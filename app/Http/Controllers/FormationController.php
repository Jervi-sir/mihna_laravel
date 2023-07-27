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
        
        return view('training.checkout');
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
        $coach = $training->coach;

        $start_date = new \DateTime($training->start_date);
        $end_date = new \DateTime($training->end_date);

        $interval = $start_date->diff($end_date);
        //echo $interval->format('%a days');  // Output: 9 days

        $data['training'] = [
            'id' => $training->id,
            'title' => $training->title,
            'short_description' => $training->short_description,
            'long_description' => $training->long_description,
            'category_name' => $training->category->name,
            'min_seats' => $training->min_seats,
            'images' => $training->images,
            'start_date' => $training->start_date,
            'end_date' => $training->end_date,
            'price' => $training->price,
            'coach_id' => $training->coach_id, 
            'coach_name' => $coach->name,
            'wilaya_name' => $training->wilaya->name,
            'left_places' => 2,
            'duration' => $interval->format('%a'),
        ];

        return view('formations.show',[
            'formation' => $data['training'],
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
