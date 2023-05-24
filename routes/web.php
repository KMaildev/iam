<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\LoginHistoryController;
use App\Http\Controllers\Admin\StudentManageController;
use App\Http\Controllers\AsuTomorrowController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\CompanyAccountController;
use App\Http\Controllers\CompanyUserListController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StudentAccountController;
use App\Http\Controllers\StudentDocsController;
use App\Http\Controllers\StudentListController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/home', [WelcomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitiesController::class);
Route::resource('news', NewsController::class);
Route::resource('employer', EmployerController::class);
Route::resource('asu_tomorrow', AsuTomorrowController::class);
Route::resource('about', AboutController::class);
Route::get('history', [AboutController::class, 'history'])->name('history');
Route::get('message', [AboutController::class, 'message'])->name('message');
Route::get('org', [AboutController::class, 'org'])->name('org');
Route::get('team', [AboutController::class, 'team'])->name('team');

Route::get('en', [LangController::class, 'lang_eng'])->name('en');
Route::get('jp', [LangController::class, 'lang_jp'])->name('jp');

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/logindashboard', [DashboardController::class, 'index'])->name('logindashboard');
    Route::resource('dashboard', DashboardController::class);
    Route::resource('change_password', ChangePasswordController::class);
    Route::resource('student_account', StudentAccountController::class);
    Route::post('student_update', [StudentAccountController::class, 'studentUpdate'])->name('student_update');
    Route::resource('student_docs', StudentDocsController::class);
    Route::get('student_docs_management/{id}', [StudentDocsController::class, 'studentDocsManagement'])->name('student_docs_management');

    Route::resource('company_account', CompanyAccountController::class);
    Route::resource('company_user_list', CompanyUserListController::class);
    Route::get('add_company_user_list', [CompanyUserListController::class, 'addCompanyUserList'])->name('add_company_user_list');
    Route::get('remove_company_user_list', [CompanyUserListController::class, 'removeCompanyUserList'])->name('remove_company_user_list');

    Route::get('student_lists_datatable', [StudentListController::class, 'index'])->name('student_lists_datatable');
    Route::get('company_students_datatable', [StudentListController::class, 'companyStudents'])->name('company_students_datatable');
});


// Admin 



Route::resource('admin_panel', AdminDashboardController::class);
Route::get('admin_logout', [AdminDashboardController::class, 'logoutAdmin'])->name('admin_logout');

Route::resource('company', CompanyController::class);
Route::get('user_active_status', [CompanyController::class, 'activeStatus'])->name('user_active_status');
Route::get('company_export', [CompanyController::class, 'CompanyExport'])->name('company_export');


Route::resource('student_manage', StudentManageController::class);
Route::get('updateSecondSelectDate', [StudentManageController::class, 'updateSecondSelectDate'])->name('updateSecondSelectDate');
Route::get('updateThirdSelectDate', [StudentManageController::class, 'updateThirdSelectDate'])->name('updateThirdSelectDate');
Route::get('user_export', [StudentManageController::class, 'UserExport'])->name('user_export');


Route::get('admin_student_lists_datatable', [StudentListController::class, 'adminStudentListsDatatable'])->name('admin_student_lists_datatable');

Route::resource('login_history', LoginHistoryController::class);
