<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\Formcontroller;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\JobOfferController;
;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/section', [UtilisateurController::class, 'showform'])->name('section.form');
    Route::get('/company', [CompanyController::class, 'showform'])->name('company.form');

    Route::get('/cvform', [Formcontroller::class, 'index'])->name('formCv');
    Route::post('/store', [Formcontroller::class, 'store'])->name('cv.store');
    Route::get('/cv/cursus', [Formcontroller::class, 'getUserCursus'])->name('getUserCursus');
    Route::delete('/cursus/{id}', [Formcontroller::class, 'destroy'])->name('cursus.destroy');

    
    Route::get('/user/experiences', [ExperienceController::class, 'getUserExperience'])->name('getUserExperience');
    Route::post('/experience', [ExperienceController::class, 'store'])->name('experience.store');
    Route::delete('/experience/{id}', [ExperienceController::class, 'destroy'])->name('experience.destroy');

    

Route::post('/language', [LanguageController::class, 'storeLanguage'])->name('language.store');
Route::get('/user/language', [LanguageController::class, 'getUserLanguage'])->name('getUserLanguage');
Route::delete('/language/{id}', [LanguageController::class, 'deleteLanguage'])->name('language.destroy');

Route::post('/competence', [CompetenceController::class, 'store'])->name('competence.store');
Route::get('/user/competence', [CompetenceController::class, 'getUserCompetence'])->name('getUserCompetence');
Route::delete('/competence/{id}', [CompetenceController::class, 'destroy'])->name('competence.destroy');


Route::get('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate.pdf');
Route::get('/cv', [PDFController::class, 'index'])->name('cv');

    Route::post('/section', [UtilisateurController::class, 'store'])->name('section');

    Route::post('/company', [CompanyController::class, 'store'])->name('company');

    Route::get('/offers', [JobOfferController::class, 'create'])->name('job_offers.create');

    Route::post('/offers', [JobOfferController::class, 'store'])->name('job_offers.store');

});

require __DIR__.'/auth.php';
