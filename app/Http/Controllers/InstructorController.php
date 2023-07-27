<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class InstructorController extends Controller
{
    public function register() {
        return view('auth.instructor.register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $role_id = Role::where('name', 'coach')->first()->id;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $role_id,
            'phone_number' => $request->phone_number
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/instructor/dashboard');
    }
    public function login() {
        return view('auth.instructor.login');
    }
    public function authenticate(LoginRequest $request) {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->intended('/instructor/dashboard');
    }
    public function addCourse() {
        return view('instructor.create');
    }

    public function chat() {
        return view('instructor.chat');
    }

    public function editProfile() {
        return view('instructor.editProfile');
    }

    public function updateProfile() {
        return view();
    }

    public function myFormations() {
        return view('instructor.myFormations');
    }

    public function myEarnings() {
        return view('instructor.myEarnings');
    }

    public function linkedAccounts() {
        return view('instructor.linkedAccounts');
    }

    public function updateLinkedAccounts() {
        //return view('instructor.');
    }

    public function notifications() {
        return view('instructor.notifications');
    }

    public function notificationSetup() {
        return view('instructor.notificationSetup');
    }

    public function payouts() {
        return view('instructor.payouts');
    }
    
    public function security() {
        return view('instructor.security');
    }
    
    public function studentList() {
        return view('instructor.studentList');
    }
    
    public function studentPurchase() {
        return view('instructor.studentPurchase');
    }

    public function dashboard() {
        $oraganizer = Auth::user();
        $courses = $oraganizer->courses;
        
        return view('instructor.dashboard',[
            'organizer' => $oraganizer,
            'courses' => $courses,
        ]);
    }

    public function privacy() {
        return view('layouts.orivacy');
    }

    public function support() {
        return view('layouts.support');
    }
    
    public function terms() {
        return view('layouts.terms');
    }
}
