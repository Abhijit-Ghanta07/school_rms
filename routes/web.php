<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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
Route::controller(AdminController::class)->group(function(){
    //
    Route::get('/', 'Login')->name('Admin.login');
    //
    Route::post('/login_check', 'login_check')->name('Admin.login_check');
    //
    Route::get('/logout','Logout')->name('Admin.Logout');
    //
    Route::get('/Dashbroad','Dashbroad')->name('Admin.Dashbroad')->middleware('isLogin');
    
});
// route for teachers
Route::controller(TeacherController::class)->group(function(){
    //
    Route::get('/teacher_add','teacher_add')->name('teacher.add')->middleware('isLogin');
    //
    Route::post('/teacher_added','teacher_added')->name('teacher.added')->middleware('isLogin');
    //
    Route::get('/teacher_manage','teacher_manage')->name('teacher.manage')->middleware('isLogin');
    //
    Route::get('/teacher_delete/{id}','teacher_delete')->name('teacher.delete')->middleware('isLogin');
    //
    Route::get('/teacher_update/{id}','teacher_update')->name('teacher.update')->middleware('isLogin');
});
// route for student
Route::controller(StudentController::class)->group(function(){
    //
    Route::get('/student_add','student_add')->name('student.add')->middleware('isLogin');
     //
     Route::post('/student_added','student_added')->name('student.added')->middleware('isLogin');
    //
    Route::get('/student_manage','student_manage')->name('student.manage')->middleware('isLogin');
    //
    Route::get('/student_delete/{id}','student_delete')->name('student.delete')->middleware('isLogin');
    //
    Route::get('/student_update/{id}','student_update')->name('student.update')->middleware('isLogin');
    //
    Route::get('/student_Fee','student_fee')->name('student.fee')->middleware('isLogin');
    //
    Route::post('/student_Search_Fee','student_Search_fee')->name('student.Search_fee')->middleware('isLogin');
    //
    Route::post('/student_Fee_Pay','student_fee_pay')->name('student.fee_pay')->middleware('isLogin');
    //
    Route::get('/student_fee_report/{id}','student_fee_report')->name('student.fee_report')->middleware('isLogin');
    //
    Route::get('/student_fee_page/{id}','student_fee_page')->name('student.fee_page')->middleware('isLogin');
    //
    Route::post('/student_update_data','student_update_data')->name('student.updateData')->middleware('isLogin');
});
// route for fees
