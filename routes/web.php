<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\FooterBannerController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\FrontMessageController;
use Illuminate\Support\Facades\Route;

//    Front Section Route
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/education', [FrontController::class, 'education'])->name('education');
Route::get('/skill', [FrontController::class, 'skill'])->name('skill');
Route::get('/service', [FrontController::class, 'service'])->name('service');
Route::get('/project', [FrontController::class, 'project'])->name('project');
Route::get('/counter', [FrontController::class, 'counter'])->name('counter');
Route::get('/banner', [FrontController::class, 'banner'])->name('banner');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');

//    Front Message Route
Route::post('/front-message', [FrontMessageController::class, 'frontMessage'])->name('front-message');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.home.home');
    })->name('dashboard');

//    Admin Main Section Route
    Route::get('add-main', [MainController::class, 'addMain'])->name('add-main');
    Route::post('new-main', [MainController::class, 'newMain'])->name('new-main');
    Route::get('manage-main', [MainController::class, 'manageMain'])->name('manage-main');
    Route::get('edit-main/{id}', [MainController::class, 'editMain'])->name('edit-main');
    Route::post('update-main/{id}', [MainController::class, 'updateMain'])->name('update-main');
    Route::get('delete-main/{id}', [MainController::class, 'deleteMain'])->name('delete-main');

    //    Admin Service Section Route
    Route::get('add-service', [ServiceController::class, 'addService'])->name('add-service');
    Route::post('new-service', [ServiceController::class, 'newService'])->name('new-service');
    Route::get('manage-service', [ServiceController::class, 'manageService'])->name('manage-service');
    Route::get('edit-service/{id}', [ServiceController::class, 'editService'])->name('edit-service');
    Route::post('update-service/{id}', [ServiceController::class, 'updateService'])->name('update-service');
    Route::get('delete-service/{id}', [ServiceController::class, 'deleteService'])->name('delete-service');

    //    Admin Education Section Route
    Route::get('add-education', [EducationController::class, 'addEducation'])->name('add-education');
    Route::post('new-education', [EducationController::class, 'newEducation'])->name('new-education');
    Route::get('manage-education', [EducationController::class, 'manageEducation'])->name('manage-education');
    Route::get('edit-education/{id}', [EducationController::class, 'editEducation'])->name('edit-education');
    Route::post('update-education/{id}', [EducationController::class, 'updateEducation'])->name('update-education');
    Route::get('delete-education/{id}', [EducationController::class, 'deleteEducation'])->name('delete-education');

    //    Admin Skill Section Route
    Route::get('add-skill', [SkillController::class, 'addSkill'])->name('add-skill');
    Route::post('new-skill', [SkillController::class, 'newSkill'])->name('new-skill');
    Route::get('manage-skill', [SkillController::class, 'manageSkill'])->name('manage-skill');
    Route::get('edit-skill/{id}', [SkillController::class, 'editSkill'])->name('edit-skill');
    Route::post('update-skill/{id}', [SkillController::class, 'updateSkill'])->name('update-skill');
    Route::get('delete-skill/{id}', [SkillController::class, 'deleteSkill'])->name('delete-skill');

    //    Admin About Section Route
    Route::get('add-about', [AboutController::class, 'addAbout'])->name('add-about');
    Route::post('new-about', [AboutController::class, 'newAbout'])->name('new-about');
    Route::get('manage-about', [AboutController::class, 'manageAbout'])->name('manage-about');
    Route::get('edit-about/{id}', [AboutController::class, 'editAbout'])->name('edit-about');
    Route::post('update-about/{id}', [AboutController::class, 'updateAbout'])->name('update-about');
    Route::get('delete-about/{id}', [AboutController::class, 'deleteAbout'])->name('delete-about');

    //    Admin Project Section Route
    Route::get('add-project', [ProjectController::class, 'addProject'])->name('add-project');
    Route::post('new-project', [ProjectController::class, 'newProject'])->name('new-project');
    Route::get('manage-project', [ProjectController::class, 'manageProject'])->name('manage-project');
    Route::get('edit-project/{id}', [ProjectController::class, 'editProject'])->name('edit-project');
    Route::post('update-project/{id}', [ProjectController::class, 'updateProject'])->name('update-project');
    Route::get('delete-project/{id}', [ProjectController::class, 'deleteProject'])->name('delete-project');

    //    Admin Counter Section Route
    Route::get('add-counter', [CounterController::class, 'addCounter'])->name('add-counter');
    Route::post('new-counter', [CounterController::class, 'newCounter'])->name('new-counter');
    Route::get('manage-counter', [CounterController::class, 'manageCounter'])->name('manage-counter');
    Route::get('edit-counter/{id}', [CounterController::class, 'editCounter'])->name('edit-counter');
    Route::post('update-counter/{id}', [CounterController::class, 'updateCounter'])->name('update-counter');
    Route::get('delete-counter/{id}', [CounterController::class, 'deleteCounter'])->name('delete-counter');

    //    Admin Footer Banner Section Route
    Route::get('add-banner', [FooterBannerController::class, 'addBanner'])->name('add-banner');
    Route::post('new-banner', [FooterBannerController::class, 'newBanner'])->name('new-banner');
    Route::get('manage-banner', [FooterBannerController::class, 'manageBanner'])->name('manage-banner');
    Route::get('edit-banner/{id}', [FooterBannerController::class, 'editBanner'])->name('edit-banner');
    Route::post('update-banner/{id}', [FooterBannerController::class, 'updateBanner'])->name('update-banner');
    Route::get('delete-banner/{id}', [FooterBannerController::class, 'deleteBanner'])->name('delete-banner');

    //    Admin Contact Section Route
    Route::get('add-contact', [ContactController::class, 'addContact'])->name('add-contact');
    Route::post('new-contact', [ContactController::class, 'newContact'])->name('new-contact');
    Route::get('manage-contact', [ContactController::class, 'manageContact'])->name('manage-contact');
    Route::get('edit-contact/{id}', [ContactController::class, 'editContact'])->name('edit-contact');
    Route::post('update-contact/{id}', [ContactController::class, 'updateContact'])->name('update-contact');
    Route::get('delete-contact/{id}', [ContactController::class, 'deleteContact'])->name('delete-contact');
});
