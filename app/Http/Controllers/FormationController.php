<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wilaya;
use App\Models\Category;
use App\Models\Training;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function checkout() {
        return view('formations.checkout');
    }
    public function invoice() {
        return view('training.invoice');
    }
    public function list() {
        $trainings = Training::paginate(6);
        foreach ($trainings as $index => $training) {
            $data['trainings'][$index] = getFormation($training);
        }
        
        $categories = Category::all();
        foreach ($categories as $index => $category) {
            $data['categories'][$index] = [
                'id' => $category->id,
                'name' => $category->name
            ];
        }

        $wilayas = Wilaya::all();
        foreach ($wilayas as $index => $wilaya) {
            $data['wilayas'][$index] = [
                'id' => $wilaya->id,
                'name' => $wilaya->name,
            ];
        }

        $latests = Training::inRandomOrder()->take(3)->get();

        foreach ($latests as $index => $trendy) {
            $data['latests'][$index] = getFormation($trendy);
        }

        return view('formation.list', [
            'formations' => $data['trainings'],
            'categories' => $data['categories'],
            'wilayas' => $data['wilayas'],
            'latests' => $data['latests'],
        ]);
    }
    public function search() {
        $trainings = Training::paginate(6);
        foreach ($trainings as $index => $training) {
            $data['trainings'][$index] = getFormation($training);
        }
        
        $categories = Category::all();
        foreach ($categories as $index => $category) {
            $data['categories'][$index] = [
                'id' => $category->id,
                'name' => $category->name
            ];
        }

        $wilayas = Wilaya::all();
        foreach ($wilayas as $index => $wilaya) {
            $data['wilayas'][$index] = [
                'id' => $wilaya->id,
                'name' => $wilaya->name,
            ];
        }
        return view('formations.search',[
            'formations' => $data['trainings'],
            'categories' => $data['categories'],
            'wilayas' => $data['wilayas'],
        ]);
    }
    public function show($formation_id) {
        $training = Training::find($formation_id);
        $training->increment('visit_count'); // Increment the visit count

        $data['training'] = getFormationDetails($training);
        $suggestions = Training::all();
        foreach ($suggestions as $key => $suggestion) {
            $data['suggestions'][$key] = getFormation($suggestion);
        }
        return view('formations.show',[
            'formation' => $data['training'],
            'suggestions' => $data['suggestions'],
        ]);
    }
    public function showCoach($coach_id) {
        $coach = User::find($coach_id);

        foreach ($coach->formations as $index => $training) {
            $data['trainings'][$index] = getFormation($training);
        }

        $data['organizer']= [
            'name' => $coach->name,
            'email' => $coach->email,
            'phone_number' => 0555
        ];
        return view('instructor.show',[
            'formations' => $data['trainings'],
            'organizer' => $data['organizer']
        ]);
    }
}
