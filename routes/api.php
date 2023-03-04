<?php

use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\FoodController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/register', [ProfileController::class, 'register']);
Route::post('/token', [ProfileController::class, 'create_token']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/profile', [ProfileController::class, 'get_profile']);
    Route::put('/profile', [ProfileController::class, 'update_profile']);
    Route::put('/profile/picture', [ProfileController::class, 'update_profile_picture']);

    Route::post('/exercises', [ExerciseController::class, 'create_exercise']);
    Route::get('/exercises', [ExerciseController::class, 'get_exercises']);
    Route::get('/exercises/{exercise_id}', [ExerciseController::class, 'get_exercise']);
    Route::put('/exercises/{exercise_id}', [ExerciseController::class, 'update_exercise']);

    Route::post('/exercise-logs', [ExerciseController::class, 'create_exercise_log']);
    Route::get('/exercise-logs', [ExerciseController::class, 'get_exercise_logs']);
    Route::get('/exercise-logs/{log_id}', [ExerciseController::class, 'get_exercise_log']);
    Route::put('/exercise-logs/{log_id}', [ExerciseController::class, 'update_exercise_log']);    

    Route::post('/foods', [FoodController::class, 'create_food']);
    Route::get('/foods', [FoodController::class, 'get_foods']);
    Route::get('/foods/{food_id}', [FoodController::class, 'get_food']);
    Route::put('/foods/{food_id}', [FoodController::class, 'update_food']);

    Route::post('/food-logs', [FoodController::class, 'create_food_log']);
    Route::get('/food-logs', [FoodController::class, 'get_food_logs']);
    Route::get('/food-logs/{log_id}', [FoodController::class, 'get_food_log']);
    Route::put('/food-logs/{log_id}', [FoodController::class, 'update_food_log']);     

    Route::post('/media', [MediaController::class, 'upload_media']);
    Route::post('/media/log', [MediaController::class, 'upload_log_media']);
});
