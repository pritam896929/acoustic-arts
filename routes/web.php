<?php
use App\Http\Controllers\EmailController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\Innerpage\InnerController;
use Illuminate\Support\Facades\Route;

/*header start route*/
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/service', [UserController::class, 'service'])->name('service');
Route::get('/testimonial', [UserController::class, 'testimonial'])->name('testimonial');
Route::get('/product', [UserController::class, 'products'])->name('products');
Route::get('/project', [UserController::class, 'project'])->name('project');
Route::get('/teams', [UserController::class, 'teams'])->name('teams');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
/*header end route*/
Route::post('/contact', [UserController::class, 'contact_validate'])->name('contact.validate');
Route::post('/dbstore', [UserController::class, 'dbStroe'])->name('db.Stroe');
// *inner pages brands routes*//
Route::get('biamp', [InnerController::class, 'biamp'])->name('biamp');
Route::get('powersoft', [InnerController::class, 'powersoft'])->name('powersoft');
Route::get('audix', [InnerController::class, 'audix'])->name('audix');
Route::get('void', [InnerController::class, 'void'])->name('void');
Route::get('cloud', [InnerController::class, 'cloud'])->name('cloud');
Route::get('goldenear', [InnerController::class, 'goldenear'])->name('goldenear');
Route::get('JL-audio', [InnerController::class, 'JL_Audio'])->name('JL_Audio');
/*service-inner page route*/
Route::get('/distribution', [InnerController::class, 'distribution'])->name('distribution');
Route::get('/project-management', [InnerController::class, 'projectManagement'])->name('project.management');
Route::get('/ease-simulation', [InnerController::class, 'ease_simulation'])->name('ease.simulation');
Route::get('/service-center', [InnerController::class, 'service_center'])->name('service.center');
//EmailMaller//
Route::get('/send-test-email', [EmailController::class, 'sendTestEmail'])->name('sendtestemail');
Route::post('/send-test-email', [EmailController::class, 'sendTestEmail'])->name('sendTestEmail');
// *inner product page routes*/
Route::get('commercialLoudspeaker', [InnerController::class, 'commercialLoudspeaker'])->name('commercialLoudspeakers');
Route::get('voidair-8', [InnerController::class, 'voidair'])->name('voidair');
Route::get('audix-microphone', [InnerController::class, 'audixmicrophone'])->name('audixmicrophone');
Route::get('242/CVS-C83T', [InnerController::class, 'CloudelEctronicsCeilingSpeaker'])->name('CloudelEctronicsCeilingSpeaker');
Route::get('Goldenear-Aon-3', [InnerController::class, 'Aon3'])->name('Aon3');
Route::get('JL-Audio-Custom-Fit-Car-Speakers', [InnerController::class, 'JLAudioCustomFitCarSpeakers'])->name('JLAudioCustomFitCarSpeakers');
