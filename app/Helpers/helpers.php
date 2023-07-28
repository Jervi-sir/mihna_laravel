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
        'left_places' => $formation->total_seats - $formation->nb_booked,
        'duration' => $interval->format('%a'),
        'location' => 'location -location',
        'start_date_readable' => $start_date->format('d') .'-'.  $start_date->format('F'),
    ];
}

function getFormationDetails($formation) {
    $start_date = new \DateTime($formation->start_date);
    $end_date = new \DateTime($formation->end_date);
    $interval = $start_date->diff($end_date);

    $coach = $formation->coach;
    return [
        'id' => $formation->id,
        'title' => $formation->title,
        'short_description' => $formation->short_description,
        'long_description' => $formation->long_description,
        'what_learned' => $formation->what_learned,
        'requirements' => $formation->requirements,
        'planning' => $formation->planning,

        'category_name' => $formation->category->name,
        'min_seats' => $formation->min_seats,
        'images' => $formation->images,
        'start_date' => $formation->start_date,
        'end_date' => $formation->end_date,
        'price' => $formation->price,
        
        'wilaya_name' => $formation->wilaya->name,
        'address' => $formation->address,

        'left_places' => $formation->total_seats - $formation->nb_booked,
        'min_seats' => $formation->min_seats,
        'total_seats' => $formation->total_seats,
        'nb_booked' => $formation->nb_booked,

        'duration' => $interval->format('%a'),
        'certificate' => $formation->certificate,

        'coach_id' => $formation->coach_id, 
        'coach_image' => $coach->profile_pic, 
        'coach_name' => $coach->name,
        'coach_description' => '$coach->description',
        'coach_punch_line' => '$coach->punch_line',
        'coach_total_formations' => 1,
        'coach_total_students' => 10,
    ];
}