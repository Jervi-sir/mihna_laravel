<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function billing() {
        return view('student.billing');
    }
    public function editProfile() {
        return view('student.editProfile');
    }
    public function updateProfile() {
        //return view('student.');
    }
    public function linkedAccounts() {
        return view('student.linkedAccounts');
    }
    public function updateLinkedAccounts() {
        //return view('student.');
    }
    public function listTraining() {
        return view('student.listTraining');
    }
    public function notifications() {
        return view('student.notifications');
    }
    public function notificationSetup() {
        return view('student.notificationSetup');
    }
    public function payments() {
        return view('student.payments');
    }
    public function profilePreview() {
        return view('student.profilePreview');
    }
    public function purchase() {
        return view('student.purchase');
    }
    public function referral() {
        return view('student.referral');
    }
    public function security() {
        return view('student.security');
    }
    public function social() {
        return view('student.social');
    }
    public function tickets() {
        return view('student.tickets');
    }
    public function wishlist() {
        return view('student.wishlist');
    }
  
}
