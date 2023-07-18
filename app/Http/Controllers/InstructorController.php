<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function addCourse() {
        return view('instructor.addCourse');
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
        return view('instructor.myCourses');
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
        return view('instructor.dashboard');
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
