<?php


function getFormation($formation) {
    $start_date = new \DateTime($formation->start_date);
    $end_date = new \DateTime($formation->end_date);
    $interval = $start_date->diff($end_date);

    $coach = $formation->coach;
    return [
        'id' => $formation->id,
        'title' => $formation->title,
        'short_description' => $formation->short_description,
        'min_seats' => $formation->min_seats,
        'images' => $formation->images,
        'start_date' => $formation->start_date,
        'end_date' => $formation->end_date,
        'price' => $formation->price,
        'coach_id' => $formation->coach_id,
        'coach_name' => $coach->name,
        'wilaya_name' => $formation->wilaya->name,
        'category_name' => $formation->category->name,
        'left_places' => 2,
        'duration' => $interval->format('%a'),
        'location' => 'location -location',
        'start_date_readable' => $start_date->format('d') .'-'.  $start_date->format('F'),
    ];
}