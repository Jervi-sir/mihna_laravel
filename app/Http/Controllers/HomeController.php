<?php

namespace App\Http\Controllers;

use App\Models\Wilaya;
use App\Models\Category;
use App\Models\Training;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
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
            $data['latests'][$index] = getFormation($trendy);;
        }

        return view('home.home', [
            'formations' => $data['trainings'],
            'categories' => $data['categories'],
            'wilayas' => $data['wilayas'],
            'latests' => $data['latests'],
        ]);
    }
}
