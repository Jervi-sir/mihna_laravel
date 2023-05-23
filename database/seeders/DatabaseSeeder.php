<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\Training;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create roles
        $coachRole = Role::factory()->create(['name' => 'coach']);
        $studentRole = Role::factory()->create(['name' => 'student']);

        // Create some coaches and students
        $coaches = User::factory()->count(5)->create(['role_id' => $coachRole->id]);
        $students = User::factory()->count(20)->create(['role_id' => $studentRole->id]);

        // Each coach creates some trainings
        foreach ($coaches as $coach) {
            Training::factory()->count(3)->create(['coach_id' => $coach->id]);
        }

        // Each student books some trainings
        foreach ($students as $student) {
            $trainings = Training::inRandomOrder()->take(2)->get();
            foreach ($trainings as $training) {
                $booking = Booking::factory()->create(['user_id' => $student->id, 'training_id' => $training->id]);
                Payment::factory()->create(['booking_id' => $booking->id]);
            }
        }
    }
}
