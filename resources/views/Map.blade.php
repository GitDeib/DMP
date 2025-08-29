{{-- resources/views/visitors-map.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Visitors Map - Dapit Himlay</title>

@vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Tailwind + Flowbite --}}
<link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet" />
</head>
<body class="bg-gray-900 text-white">

{{-- Navbar --}}
<nav class="bg-gray-800/70 backdrop-blur-md fixed w-full z-50 shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ route('Landing') }}" class="flex items-center space-x-3">
            <img src="{{ asset('Images/peace-bird.png') }}" alt="Logo" class="h-12 w-auto invert">
            <span class="text-2xl font-cursive text-white">Davao Memorial Park</span>
        </a>

       {{-- Flowbite Search Bar with Additional Filter --}}
       <div class="flex flex-col md:flex-row items-start md:items-center space-y-2 md:space-y-0 md:space-x-2">

            {{-- Main Search Form --}}
            <form class="max-w-md w-full relative" onsubmit="event.preventDefault(); filterMarkers();">
                <label for="default-search" class="sr-only">Search location</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" placeholder="Search location..." required
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    <button type="submit" 
                        class="absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Search
                    </button>
                </div>
            </form>

            {{-- Additional Filter Button --}}
            <button id="toggleFilterBtn" type="button"
                class="bg-gray-700 hover:bg-gray-600 dark:bg-gray-800 dark:hover:bg-gray-700 text-white rounded-lg px-4 py-2 text-sm font-medium">
                Filters
            </button>
          <button type="button" onclick="window.location='{{ route('MapLayout') }}'"
            class="bg-gray-700 hover:bg-gray-600 dark:bg-gray-800 dark:hover:bg-gray-700 text-white rounded-lg px-4 py-2 text-sm font-medium">
            Layout
        </button>
        </div>

        {{-- Floating Filter Panel (Initially Hidden) --}}
        <div id="floatingFilters" class="absolute top-20 right-0 mt-2 z-50 p-4 bg-white dark:bg-gray-800 rounded-lg shadow-lg w-64 space-y-2 hidden">
            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Filter Graves</h3>
            <input type="date" id="dobFilter" placeholder="Date of Birth"
                   class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400">

            <input type="date" id="dodFilter" placeholder="Date of Death"
                   class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400">

            <button type="button" onclick="filterMarkers()" 
                class="w-full bg-blue-700 hover:bg-blue-800 text-white rounded-lg px-4 py-2 text-sm font-medium dark:bg-blue-600 dark:hover:bg-blue-700">
                Apply Filters
            </button>
        </div>
    </div>
</nav>

{{-- Map --}}
<div id="map" class="absolute top-0 left-0 w-full h-screen"></div>

<!-- Modern Grave Drawer with Icons & Picture -->
<div id="graveBackdrop" class="fixed inset-0 bg-black bg-opacity-40 z-40 hidden transition-opacity duration-300"></div>

<div id="graveDrawer" class="fixed top-0 right-0 z-50 h-full w-96 bg-white dark:bg-gray-900 shadow-2xl transform translate-x-full transition-transform duration-500 flex flex-col">
    <!-- Header -->
    <div class="p-6 flex justify-between items-center border-b border-gray-200 dark:border-gray-700">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Grave Info</h3>
        <button id="closeDrawer" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Content -->
    <div class="p-6 flex-1 overflow-y-auto space-y-4">
        <!-- Grave Image -->
        <div class="flex justify-center">
            <img id="graveImage" src="{{ asset('images/cemetery.png') }}" alt="Grave Image" class="w-32 h-32 object-cover rounded-full shadow-md border border-gray-300 dark:border-gray-700">
        </div>

        <!-- Info Section -->
        <div class="space-y-3">
            <div class="flex items-center text-gray-700 dark:text-gray-300">
                <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A4 4 0 017 12h10a4 4 0 011.879 5.804M12 7v.01" />
                </svg>
                <span class="font-semibold mr-1">Name:</span> <span id="graveName">John Doe</span>
            </div>
            <div class="flex items-center text-gray-700 dark:text-gray-300">
                <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" />
                </svg>
                <span class="font-semibold mr-1">Date of Birth:</span> <span id="graveDOB">1990-01-01</span>
            </div>
            <div class="flex items-center text-gray-700 dark:text-gray-300">
                <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12v4l3 3" />
                </svg>
                <span class="font-semibold mr-1">Date of Death:</span> <span id="graveDOD">2025-08-28</span>
            </div>
            <div class="flex items-start text-gray-700 dark:text-gray-300">
                <svg class="w-5 h-5 mr-2 mt-1 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h10m-7 4h7" />
                </svg>
                <span class="font-semibold mr-1">Notes:</span>
                <span id="graveNotes">Sample grave information.</span>
            </div>
        </div>

        <!-- Optional Button -->
        <div class="mt-6 flex justify-center">
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow-md transition">
                More Details
            </button>
        </div>
    </div>
</div>

<script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
<script src="https://unpkg.com/flowbite@1.7.0/dist/flowbite.min.js"></script>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiZWx0b25kYXZlZGVvbm8iLCJhIjoiY21hM2VmY3J5MDdqbDJrb2hvZHE2YWlqNSJ9.geC5I_J_EIfffyxTFccFQA';

const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/satellite-streets-v12',
    center: [125.5844, 7.0615],
    zoom: 15
});

// Controls
map.addControl(new mapboxgl.NavigationControl({ visualizePitch: true }), 'bottom-right');
map.addControl(new mapboxgl.FullscreenControl(), 'bottom-right');
map.addControl(new mapboxgl.ScaleControl({ maxWidth: 150, unit: 'metric' }), 'bottom-left');
map.addControl(new mapboxgl.GeolocateControl({
    positionOptions: { enableHighAccuracy: true },
    trackUserLocation: true,
    showUserHeading: true
}), 'bottom-right');

// --- Style Switcher ---
const styles = [
    { name: "Streets", url: "mapbox://styles/mapbox/streets-v12" },
    { name: "Satellite", url: "mapbox://styles/mapbox/satellite-streets-v12" },
    { name: "Outdoors", url: "mapbox://styles/mapbox/outdoors-v12" },
    { name: "Light", url: "mapbox://styles/mapbox/light-v11" },
    { name: "Dark", url: "mapbox://styles/mapbox/dark-v11" },
    { name: "Navigation Day", url: "mapbox://styles/mapbox/navigation-day-v1" },
    { name: "Navigation Night", url: "mapbox://styles/mapbox/navigation-night-v1" }
];

const styleSelect = document.createElement('select');
styleSelect.className = 'absolute bottom-20 start-1 z-50 p-2 rounded-lg bg-white dark:bg-gray-800 text-black dark:text-white';
styles.forEach(s => { 
    const option = document.createElement('option'); 
    option.value = s.url; 
    option.textContent = s.name; 
    styleSelect.appendChild(option); 
});
styleSelect.addEventListener('change', e => map.setStyle(e.target.value));
document.body.appendChild(styleSelect);

// --- Graves ---
const graves = [
    { coordinates: [125.584345, 7.061513], name: 'Interment Office', alwaysShow: true },
    { coordinates: [125.584195, 7.062439], name: 'Chapel of Davao Memorial Park', alwaysShow: true },
    { coordinates: [125.583538, 7.059732], name: 'Entrance Gate', alwaysShow: true },
];

let markerObjects = [];

// Filter markers function
function filterMarkers() {
    const locationVal = document.getElementById('default-search').value.toLowerCase();
    const dobVal = document.getElementById('dobFilter').value;
    const dodVal = document.getElementById('dodFilter').value;

    markerObjects.forEach(obj => { obj.marker.remove(); });
    markerObjects = [];

    graves.forEach(grave => {
        const nameMatch = !locationVal || grave.name.toLowerCase().includes(locationVal);
        const dobMatch = !dobVal || grave.dob === dobVal;
        const dodMatch = !dodVal || grave.dod === dodVal;

        if (nameMatch && dobMatch && dodMatch) {
            const el = document.createElement('div');
            el.style.backgroundImage = "url('{{ asset('images/cemetery.png') }}')";
            el.style.width = '32px';
            el.style.height = '32px';
            el.style.backgroundSize = 'cover';
            el.style.borderRadius = '50%';
            el.style.boxShadow = '0 2px 8px rgba(0,0,0,0.2)';

            const marker = new mapboxgl.Marker(el)
                .setLngLat(grave.coordinates)
                .addTo(map);

            // Open drawer on click
            marker.getElement().addEventListener('click', () => {
                showGraveDrawer({
                    name: grave.name,
                    dob: grave.dob || '1990-01-01',
                    dod: grave.dod || '2025-08-28',
                    notes: grave.notes || 'Sample grave information.'
                });
            });

            markerObjects.push({ marker });
        }
    });
}
filterMarkers();

// --- Floating Filter Toggle ---
const toggleBtn = document.getElementById('toggleFilterBtn');
const floatingPanel = document.getElementById('floatingFilters');
toggleBtn.addEventListener('click', () => {
    floatingPanel.classList.toggle('hidden');
});

// --- Drawer Functions ---
const graveDrawer = document.getElementById('graveDrawer');
const closeDrawerBtn = document.getElementById('closeDrawer');

function showGraveDrawer(grave) {
    document.getElementById('graveName').textContent = grave.name || 'John Doe';
    document.getElementById('graveDOB').textContent = grave.dob || '1990-01-01';
    document.getElementById('graveDOD').textContent = grave.dod || '2025-08-28';
    document.getElementById('graveNotes').textContent = grave.notes || 'Sample grave information.';
    graveDrawer.classList.remove('translate-x-full');
}

closeDrawerBtn.addEventListener('click', () => {
    graveDrawer.classList.add('translate-x-full');
});

// --- Sample Phases ---
map.on('load', function () {
    const phases = [
        {
            id: 'phase1',
            color: '#ff0000',
            coords: [
                [125.584405, 7.061930],
                [125.585005, 7.062041],
                [125.585145, 7.062436],
                [125.584919, 7.063378],
                [125.584154, 7.063517],
                [125.584048, 7.062812],
                [125.584482, 7.062490],
                [125.584405, 7.061930]
            ],
            graveBase: [125.584450, 7.062041],
            dx: 0.00004,
            dy: 0.00006,
            rows: 2,
            cols: 5,
            label: 'Phase 1 Grave'
        },
        {
            id: 'phase2',
            color: '#00ff00',
            coords: [
                [125.584565, 7.061688],
                [125.584604, 7.061210],
                [125.585534, 7.061341],
                [125.585438, 7.061976],
                [125.584565, 7.061688]
            ],
            graveBase: [125.5847, 7.0613],
            dx: 0.00006,
            dy: 0.00008,
            rows: 2,
            cols: 5,
            label: 'Phase 2 Grave'
        },
        {
            id: 'phase3',
            color: '#0000ff',
            coords: [
                [125.585228, 7.062357],
                [125.585189, 7.062813],
                [125.585712, 7.062919],
                [125.585762, 7.062420],
                [125.585228, 7.062357]
            ],
            graveBase: [125.5853, 7.0624],
            dx: 0.00006,
            dy: 0.00008,
            rows: 2,
            cols: 5,
            label: 'Phase 3 Grave'
        }
    ];

    // Draw phase borders & graves
    phases.forEach(phase => {
        map.addSource(phase.id, {
            type: 'geojson',
            data: { type: 'Feature', geometry: { type: 'LineString', coordinates: phase.coords } }
        });
        map.addLayer({
            id: phase.id + '-line',
            type: 'line',
            source: phase.id,
            layout: {},
            paint: { 'line-color': phase.color, 'line-width': 3 }
        });

        for(let r=0; r<phase.rows; r++) {
            for(let c=0; c<phase.cols; c++) {
                const lng = phase.graveBase[0] + c*phase.dx;
                const lat = phase.graveBase[1] + r*phase.dy;
                const el = document.createElement('div');
                el.style.backgroundImage = "url('{{ asset('images/cemetery.png') }}')";
                el.style.width = '32px';
                el.style.height = '32px';
                el.style.backgroundSize = 'cover';
                el.style.borderRadius = '50%';
                el.style.boxShadow = '0 2px 8px rgba(0,0,0,0.2)';

                const marker = new mapboxgl.Marker(el)
                    .setLngLat([lng, lat])
                    .addTo(map);

                marker.getElement().addEventListener('click', () => {
                    showGraveDrawer({
                        name: `${phase.label} ${r*phase.cols + c + 1}`,
                        dob: '1990-01-01',
                        dod: '2025-08-28',
                        notes: 'Sample grave information.'
                    });
                });
            }
        }
    });
});
</script>
</body>
</html>
