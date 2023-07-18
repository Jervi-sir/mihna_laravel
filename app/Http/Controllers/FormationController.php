<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function checkout() {
        return view('training.checkout');
    }
    public function invoice() {
        return view('training.invoice');
    }
    public function list() {
        return view('training.list');
    }
    public function search() {
        return view('training.search');
    }
    public function show() {
        return view('training.show');
    }
}
