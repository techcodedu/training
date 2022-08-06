<?php

use App\Models\Training;
use Illuminate\Support\Facades\Route;

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
    return view('trainings',[
        'heading' =>"Available Courses",
        'trainings'=> Training::all()
    ]);
    
});
// Single View {part 3.1}

Route::get('/trainings/{training}', function(Training $training){
    return view('training',[
        'training' =>$training
    ]);

});
