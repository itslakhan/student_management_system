<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Studentcontroller;
use App\Http\Controllers\branchcontroller;
use App\Http\Controllers\coursecontroller;

use App\Models\branch;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layouts.app');
});

route::get('Student',[Studentcontroller::class,'Student'])->name('Student');
route::post('Student',[Studentcontroller::class, 'studentRegister'])->name('studentRegister');
route::get('StudentDetails',[Studentcontroller::class,'StudentDetails'])->name('StudentDetails');
route::get('EditStudent/{id}',[Studentcontroller::class,'EditStudent'])->name('EditStudent');
route::post('UpdateStudent/{id}',[Studentcontroller::class,'UpdateStudent'])->name('UpdateStudent');
route::get('DeleteStudent/{id}',[Studentcontroller::class,'DeleteStudent'])->name('DeleteStudent');


route::get('Branch',[branchcontroller::class, 'index'])->name('Branch');
route::POST('Branch',[branchcontroller::class,'store'])->name('StoreBranch');

route::get('BranchesDetails',[branchcontroller::class,'show'])->name('BranchesDetails');
route::get('BranchEdit/{id}',[branchcontroller::class,'edit'])->name('BranchEdit');
route::post('Branchupdate/{id}',[branchcontroller::class,'update'])->name('Branchupdate');
route::get('DeleteBranch/{id}',[branchcontroller::class,'delete'])->name('DeleteBranch');

route::get('Addcourses',[coursecontroller::class,'create'])->name('Addcourses');
route::POST('Addcourses',[coursecontroller::class,'store'])->name('Storecourse');
route::get('ShowCourses',[coursecontroller::class,'show'])->name('ShowCourse');

route::get('Course',[coursecontroller::class,'check'])->name('CheckCourse');


route::post('StudenCourse',[Studentcontroller::class, 'StudenCourse'])->name('StudenCourse');
// route::get('StudentMail',[Studentcontroller::class, 'StudentMail'])->name('StudentMail');










