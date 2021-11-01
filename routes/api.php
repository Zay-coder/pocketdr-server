<?php



use App\Http\Controllers\ApiController;
use App\Http\Controllers\API\ChallengeController;
use App\Http\Controllers\API\TherapistController;
use Illuminate\Support\Facades\Route;


//JWT authentication routes
Route::post('login', [ApiController::class, 'login']);
Route::post('register', [ApiController::class, 'register']);

//challenges routes
Route::get('adult_challenges', [ChallengeController::class, 'adult_challenges']);
Route::get('teen_challenges', [ChallengeController::class, 'teen_challenges']);


//therapist routes
Route::get('all_therapists', [TherapistController::class, 'all_therapists']);
Route::get('adult_therapists', [TherapistController::class, 'adult_therapists']);
Route::get('teen_therapists', [TherapistController::class, 'teen_therapists']);
Route::get('couple_therapists', [TherapistController::class, 'couple_therapists']);
Route::get('get_chosen_therapist/{x}', [TherapistController::class, 'get_chosen_therapist']);



//JWT authentication routes using jwt middleware
Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('logout', [ApiController::class, 'logout']);
    Route::get('get_user', [ApiController::class, 'get_user']);


});


