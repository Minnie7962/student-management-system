<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EventController;
use App\Exports\AttendancesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\TeacherController;

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
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('courses', CourseController::class);
Route::resource('staff', StaffController::class);
Route::resource('exams', ExamController::class);
Route::resource('grades', GradeController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('attendance', AttendanceController::class);
Route::resource('fees', FeeController::class);
Route::resource('projects', ProjectController::class);
Route::resource('events', EventController::class);
Route::resource('students', StudentController::class);

Route::get('/attendance/export/{start}/{end}', function ($start, $end) {
    return Excel::download(new AttendancesExport($start, $end), 'attendances.xlsx');
})->name('attendance.export');

Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
Route::get('/notifications/{notification}/mark-as-read', [NotificationController::class, 'markAsRead'])->name('notifications.mark-as-read');
Route::post('/notifications/send', [NotificationController::class, 'sendNotification'])->name('notifications.send');

Route::get('/students/performance', [StudentController::class, 'performance'])->name('students.performance.index');
Route::get('/teachers/overview', [StaffController::class, 'overview'])->name('teachers.overview.index');
Route::get('/courses/schedule', [CourseController::class, 'schedule'])->name('courses.schedule.index');

Route::get('/courses', 'CourseController@index');
Route::get('/courses/create', 'CourseController@create');
Route::post('/courses', 'CourseController@store');
Route::get('/courses/{course}/edit', 'CourseController@edit');
Route::patch('/courses/{course}', 'CourseController@update');
Route::delete('/courses/{course}', 'CourseController@destroy');