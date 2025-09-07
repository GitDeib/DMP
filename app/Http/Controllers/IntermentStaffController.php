<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Use the User model
use Illuminate\Support\Facades\Hash;

class IntermentStaffController extends Controller
{
    // !!! CREATING INTERMENT STAFF ACCOUNT METHOD !!!
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phonenumber' => 'required|string|max:20',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'password' => Hash::make($request->password),
            'role' => 'interment_staff', // set role here
        ]);

        return redirect('/users')->with('success', 'Interment Staff account created successfully!');
    }

    public function index()
    {
        $staffs = User::where('role', 'interment_staff')->get(); // only interment staff
        return view('users', compact('staffs'));
    }
}
