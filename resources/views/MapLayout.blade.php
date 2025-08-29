<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dapit Himlay: Precision Grave Planner</title>
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css' rel='stylesheet' />
  <script src='https://unpkg.com/@mapbox/mapbox-gl-draw/dist/mapbox-gl-draw.js'></script>
  <script src='https://unpkg.com/@turf/turf@6/turf.min.js'></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
  <style>
    body { margin: 0; padding: 0; }
    #map { position: absolute; top: 0; bottom: 0; width: 100%; }
  </style>
</head>
<body>
  <!-- Controller -->
  <div class="absolute top-4 left-4 z-50 w-80 bg-white rounded-lg shadow-lg p-4">
    <h3 class="text-lg font-semibold text-gray-700 mb-4">Precision Grave Planner</h3>

    <!-- Draw Section -->
    <div class="mb-4">
      <button id="draw-btn" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 rounded-md transition">Draw Section Boundary</button>
    </div>

    <!-- Rows & Columns -->
    <div class="grid grid-cols-2 gap-2 mb-4">
      <div>
        <label class="block text-sm font-medium text-gray-700">Rows</label>
        <input type="number" id="rows" min="1" value="10" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Columns</label>
        <input type="number" id="cols" min="1" value="10" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>
    </div>

    <div>
      <button id="generate-btn" disabled class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-2 rounded-md transition">Generate Grave Grid</button>
    </div>

    <p id="status" class="mt-3 text-sm text-blue-600 font-medium">Select a mode to begin</p>
  </div>

  <div id="map"></div>

  <script>
    // Initialize Mapbox
    mapboxgl.accessToken = 'pk.eyJ1IjoiZWx0b25kYXZlZGVvbm8iLCJhIjoiY21hM2VmY3J5MDdqbDJrb2hvZHE2YWlqNSJ9.geC5I_J_EIfffyxTFccFQA';
    const map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v11',
      center: [125.612, 7.123],
      zoom: 18
    });

    const draw = new MapboxDraw({ displayControlsDefault: false, controls: { polygon: true, trash: true }});
    map.addControl(draw);

    const drawBtn = document.getElementById('draw-btn');
    const generateBtn = document.getElementById('generate-btn');
    const statusDiv = document.getElementById('status');
    let currentSection = null;

    drawBtn.addEventListener('click', () => {
      draw.changeMode('draw_polygon');
      statusDiv.textContent = 'Draw the section boundary. Click to add points, double-click to finish.';
    });

    generateBtn.addEventListener('click', () => {
      const rows = parseInt(document.getElementById('rows').value);
      const cols = parseInt(document.getElementById('cols').value);
      generateGraves(currentSection, rows, cols);
    });

    function createGraveShape(centerX, centerY, width, height) {
      const halfW = width / 2 / 111320;
      const halfH = height / 2 / 111320;
      return [
        [centerX - halfW, centerY - halfH],
        [centerX + halfW, centerY - halfH],
        [centerX + halfW, centerY + halfH],
        [centerX - halfW, centerY + halfH],
        [centerX - halfW, centerY - halfH]
      ];
    }

    function generateGraves(sectionPolygon, rows, cols) {
      const graves = [];
      const section = turf.polygon(sectionPolygon.coordinates);
      const bbox = turf.bbox(section);
      const [minX, minY, maxX, maxY] = bbox;

      const graveWidth = (maxX - minX) / cols;
      const graveHeight = (maxY - minY) / rows;

      for (let row = 0; row < rows; row++) {
        for (let col = 0; col < cols; col++) {
          const x = minX + (col * graveWidth) + graveWidth / 2;
          const y = minY + (row * graveHeight) + graveHeight / 2;

          const grave = {
            type: 'Feature',
            geometry: {
              type: 'Polygon',
              coordinates: [createGraveShape(x, y, graveWidth * 111320 * 0.9, graveHeight * 111320 * 0.9)]
            },
            properties: { plot_id: `R${row+1}-C${col+1}`, status: 'empty' }
          };

          if (turf.booleanPointInPolygon(turf.point([x, y]), section)) {
            graves.push(grave);
          }
        }
      }

      // Clear previous graves
      draw.getAll().features.forEach(f => { if(f.geometry.type === 'Polygon') draw.delete(f.id); });
      graves.forEach(grave => draw.add(grave));
      statusDiv.textContent = `Generated ${graves.length} graves`;
    }

    // Event listener for draw completion
    map.on('draw.create', (e) => {
      if (e.features[0].geometry.type === 'Polygon') {
        currentSection = e.features[0].geometry;
        generateBtn.disabled = false;
        statusDiv.textContent = 'Section drawn. Set rows/columns and generate graves.';
      }
    });

    map.on('draw.delete', () => { statusDiv.textContent = 'Section deleted.'; });
  </script>
</body>
</html>
