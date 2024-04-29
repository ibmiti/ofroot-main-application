<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HealthDataController;
use App\Http\Controllers\OnlineBookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|-----------------------------------------------------------------
|   Admin routes
|-----------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/secret/admin', function (){
    return view('auth.admin');
});

Route::post('/process-form', [LoginController::class, 'process'])->name('process.form');

// Not in use
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

/*
|-----------------------------------------------------------------
|   related routes
|-----------------------------------------------------------------
*/
Route::get('/capabilities', function(){
    return view('capabilities');
});

// return the mission view
Route::get('/ourmission', function(){return view('ourmission');});

// return the ourpromise view
Route::get('/ourpromise', function() { return view('ourpromise');});

// return the whyWeAreDifferent view
Route::get('/whyWeAreDifferent', function() { return view('whyWeAreDifferent');});


/*
|--------------------------------------------------------------------------
| Contact related routes
|--------------------------------------------------------------------------
*/
// Choose Service type
Route::get('/online-booking/service-selection', function(){
    return view('onlineBooking.serviceSelection.choose-service');
});


// Service type 1: Removal-services.
Route::post('/online-booking/marketing', [OnlineBookingController::class, 'marketing']);

// Service type 2: lawn-services
Route::post('/online-booking/webdevelopment', [OnlineBookingController::class, 'webdevelopment']);

// Service type 3: lawn-services
Route::post('/online-booking/ai-integration', [OnlineBookingController::class, 'AiIntegration']);

// Begin OnlineBooking Process
Route::get('online-booking/step-one', function() {
    return view('onlineBooking.step-one');
});

Route::post('online-booking/step-two', [OnlineBookingController::class, 'checkZipCode']);
Route::post('online-booking/step-three', [OnlineBookingController::class, 'storeDateData'])->name('step-three');
Route::get('online-booking/edit-information', function(){ return view('onlineBooking.step-three'); });
Route::post('online-booking/step-four', [OnlineBookingController::class, 'submitCustomerData']);
Route::post('online-booking/submit-details', [OnlineBookingController::class, 'sendEmail']);


/*
|------------------------------------------------------------------
| Health ai (ofrootHealth) urls
|------------------------------------------------------------------
|
*/

Route::get('/health', [HealthDataController::class, 'healthView'])
->name('health');

Route::get('/submit-ecg-data', [HealthDataController::class,'ecgSubmitView'])
->name('ecg-submit-view');

Route::post('/process-health-data', [HealthDataController::class, 'processEcgData'])
->name('process-health-data');

/*
|------------------------------------------------------------------
| End of Health ai (ofrootHealth) urls
|------------------------------------------------------------------
|
*/




// require __DIR__.'/auth.php';
