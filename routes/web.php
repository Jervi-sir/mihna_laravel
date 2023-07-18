<?php

use App\Http\Controllers\FormationController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;




Route::get('/', [FormationController::class, 'list'])->name('home');        //[done]

Route::prefix('insctructor')->group(function () {
    Route::get('/add-formation', [InstructorController::class, 'addCourse'])->name('instructor.addCourse'); //[done]
    Route::post('/store-formation', [InstructorController::class, 'storeCourse'])->name('instructor.storeCourse'); //[]
    Route::get('/chat', [InstructorController::class, 'chat'])->name('instructor.chat'); //[done]
    Route::get('/edit-profile', [InstructorController::class, 'editProfile'])->name('instructor.editProfile');      //[done]
    Route::post('/update-profile', [InstructorController::class, 'updateProfile'])->name('instructor.updateProfile');      //[]
    Route::get('/my-formations', [InstructorController::class, 'myFormations'])->name('instructor.myFormations');   //[done]
    Route::get('/my-earnings', [InstructorController::class, 'myEarnings'])->name('instructor.myEarnings'); //[done]
    Route::get('/linked-accounts', [InstructorController::class, 'linkedAccounts'])->name('instructor.linkedAccounts'); //[done]
    Route::post('/update-linked-accounts', [InstructorController::class, 'updateLinkedAccounts'])->name('instructor.updateLinkedAccounts'); //[]
    Route::get('/notifications', [InstructorController::class, 'notifications'])->name('instructor.notifications'); //[done]
    Route::get('/notifications-setup', [InstructorController::class, 'notificationSetup'])->name('instructor.notificationSetup'); //[]
    Route::get('/payouts', [InstructorController::class, 'payouts'])->name('instructor.payouts');       //[done]
    Route::get('/security', [InstructorController::class, 'security'])->name('instructor.security');    //[done]
    Route::get('/student-list', [InstructorController::class, 'studentList'])->name('instructor.studentList'); //[done]
    Route::get('/student-purchase', [InstructorController::class, 'studentPurchase'])->name('instructor.studentPurchase'); //[done]
    Route::get('/dashboard', [InstructorController::class, 'dashboard'])->name('instructor.dashboard'); //[done]
    Route::get('/privacy', [InstructorController::class, 'privacy'])->name('instructor.privacy');   //[done]
    Route::get('/support', [InstructorController::class, 'support'])->name('instructor.support');   //[done]
    Route::get('/terms', [InstructorController::class, 'terms'])->name('instructor.terms');         //[done]
});

Route::prefix('student')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/billing', [StudentController::class, 'billing'])->name('student.billing');      //[]
    Route::get('/edit-profile', [StudentController::class, 'editProfile'])->name('student.editProfile'); //[]
    Route::post('/update-profile', [StudentController::class, 'updateProfile'])->name('student.updateProfile'); //[]
    Route::get('/linked-accounts', [StudentController::class, 'linkedAccounts'])->name('student.linkedAccounts');    //[]
    Route::post('/update-linked-accounts', [StudentController::class, 'updateLinkedAccounts'])->name('student.updateLinkedAccounts');    //[]
    Route::get('/list-training', [StudentController::class, 'listTraining'])->name('student.listTraining');          //[]
    Route::get('/notifications', [StudentController::class, 'notifications'])->name('student.notifications');        //[]
    Route::get('/notifications-setup', [StudentController::class, 'notificationSetup'])->name('student.notificationSetup'); //[]
    Route::get('/payments', [StudentController::class, 'payments'])->name('student.payments');   //[]
    Route::get('/profile-preview', [StudentController::class, 'profilePreview'])->name('student.profilePreview');    //[]
    Route::get('/purchase', [StudentController::class, 'purchase'])->name('student.purchase');   //[]
    Route::get('/referral', [StudentController::class, 'referral'])->name('student.referral');   //[]
    Route::get('/security', [StudentController::class, 'security'])->name('student.security');   //[]
    Route::get('/social', [StudentController::class, 'social'])->name('student.social');         //[]
    Route::get('/tickets', [StudentController::class, 'tickets'])->name('student.tickets');      //[]
    Route::get('/wishlist', [StudentController::class, 'wishlist'])->name('student.wishlist');   //[]
});

Route::prefix('formation')->group(function () {
    Route::middleware('auth')->group(function() {
        Route::get('/checkout', [FormationController::class, 'checkout'])->name('formation.checkout'); //[]
        Route::get('/invoice', [FormationController::class, 'invoice'])->name('formation.invoice');    //[]
    });
    Route::get('/list', [FormationController::class, 'list'])->name('formation.list');             //[]
    Route::get('/search', [FormationController::class, 'search'])->name('formation.search');       //[]
    Route::get('/show', [FormationController::class, 'show'])->name('formation.show');             //[]
});

require __DIR__.'/auth.php';
