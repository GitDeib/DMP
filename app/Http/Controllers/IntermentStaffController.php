<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IntermentStaff;
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
            'email' => 'required|email|unique:interment_staffs,email',
            'phonenumber' => 'required|string|max:20',
            'password' => 'required|string|min:6',
        ]);

        IntermentStaff::create([
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/users')->with('success', 'Interment Staff account created successfully!');
    }


    public function index()
{
    $staffs = IntermentStaff::all(); // fetch all interment staff accounts
    return view('users', compact('staffs'));
}
}
