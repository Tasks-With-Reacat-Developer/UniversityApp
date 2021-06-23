<?php

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

/*Route::get('/', function () {
return view('welcome');
});*/

/*Route::get('/admin', function () {
return view('admin.index');
});*/

Route::get('/', 'HomeController@index')->name('index');
//Route::get('/search', 'SearchEngineController@index')->name('search.index');
Route::get('/search', 'SearchEngineController@search')->name('search.engine');

/*
Route::get('/admin/login', [
'as' => 'login',
'uses' => 'Admin\AdminAuth\AdminLoginController@showLoginForm'
]);

Route::post('/admin/login', [
'as' => '',
'uses' => 'Admin\AdminAuth\AdminLoginController@login'
]);*/

/*Route::post('/admin/logout', [
'as' => 'logout',
'uses' => 'Admin\AdminAuth\AdminLoginController@logout'
]);

Route::get('/admin/logout', 'Admin\AdminAuth\AdminLoginController@logout');
 */

Auth::routes(['register' => false]);
Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\AdminController@dashboard')->name('admin.dashboard');
   // route::resource('/language', 'Admin\AdminLangController');
    route::resource('/articles', 'Admin\AdminArticlesController');
    Route::get('/pages/search', 'Admin\AdminPagesController@search');
    route::resource('/pages', 'Admin\AdminPagesController');
    route::resource('/colleges', 'Admin\AdminCollegesController');
    route::resource('/departments', 'Admin\AdminDepartmentsController');
    route::resource('/messages', 'Admin\AdminMessagesController');
    route::resource('/appearance', 'Admin\AdminAppearanceController');
    Route::get('/appearance/page/create', 'Admin\AdminAppearanceController@createPage')->name('app.create.page');
    Route::post('/appearance/page/create', 'Admin\AdminAppearanceController@storePage')->name('app.store.page');
    Route::get('/appearance/page/{id}/edit', 'Admin\AdminAppearanceController@editPage')->name('app.edit.page');
    Route::put('/appearance/page/{id}/edit', 'Admin\AdminAppearanceController@updatePage')->name('app.update.page');

    Route::get('/appearance/brief/ar/create', 'Admin\AdminAppearanceController@createBriefAr')->name('app.create.brief.ar');
    Route::get('/appearance/brief/en/create', 'Admin\AdminAppearanceController@createBriefEn')->name('app.create.brief.en');
    Route::post('/appearance/brief/create', 'Admin\AdminAppearanceController@storeBrief')->name('app.store.brief');
    Route::get('/appearance/brief/ar/{id}/edit', 'Admin\AdminAppearanceController@editBriefAr')->name('app.edit.brief.ar');
    Route::get('/appearance/brief/en/{id}/edit', 'Admin\AdminAppearanceController@editBriefEn')->name('app.edit.brief.en');
    Route::put('/appearance/brief/{id}/edit', 'Admin\AdminAppearanceController@updateBrief')->name('app.update.page');
    Route::get('/appearance/dean/ar/create', 'Admin\AdminAppearanceController@createDeanAr')->name('app.create.dean.ar');
    Route::get('/appearance/dean/en/create', 'Admin\AdminAppearanceController@createDeanEn')->name('app.create.dean.en');
    Route::post('/appearance/dean/create', 'Admin\AdminAppearanceController@storeDean')->name('app.store.dean');
    Route::get('/appearance/dean/ar/{id}/edit', 'Admin\AdminAppearanceController@editDeanAr')->name('app.edit.dean.ar');
    Route::get('/appearance/dean/en/{id}/edit', 'Admin\AdminAppearanceController@editDeanEn')->name('app.edit.dean.en');
    Route::put('/appearance/dean/{id}/edit', 'Admin\AdminAppearanceController@updateDean')->name('app.update.dean');
    Route::get('/appearance/future-vision/ar/create', 'Admin\AdminAppearanceController@createFutureVisionAr')->name('app.create.future.vision.ar');
    Route::get('/appearance/future-vision/en/create', 'Admin\AdminAppearanceController@createFutureVisionEn')->name('app.create.future.vision.en');
    Route::post('/appearance/future-vision/create', 'Admin\AdminAppearanceController@storeFutureVision')->name('app.store.future.vision');
    Route::get('/appearance/future-vision/ar/{id}/edit', 'Admin\AdminAppearanceController@editFutureVisionAr')->name('app.edit.future.vision.ar');
    Route::get('/appearance/future-vision/en/{id}/edit', 'Admin\AdminAppearanceController@editFutureVisionEn')->name('app.edit.future.vision.en');
    Route::put('/appearance/future-vision/{id}/edit', 'Admin\AdminAppearanceController@updateFutureVision')->name('app.update.future.vision');
    Route::get('/appearance/message/ar/create', 'Admin\AdminAppearanceController@createMessageAr')->name('app.create.message.ar');
    Route::get('/appearance/message/en/create', 'Admin\AdminAppearanceController@createMessageEn')->name('app.create.message.en');
    Route::post('/appearance/message/create', 'Admin\AdminAppearanceController@storeMessage')->name('app.store.message');
    Route::get('/appearance/message/ar/{id}/edit', 'Admin\AdminAppearanceController@editMessageAr')->name('app.edit.message.ar');
    Route::get('/appearance/message/en/{id}/edit', 'Admin\AdminAppearanceController@editMessageEn')->name('app.edit.message.en');
    Route::put('/appearance/message/{id}/edit', 'Admin\AdminAppearanceController@updateMessage')->name('app.update.message');
    Route::get('/appearance/goals/ar/create', 'Admin\AdminAppearanceController@createGoalsAr')->name('app.create.goals.ar');
    Route::get('/appearance/goals/en/create', 'Admin\AdminAppearanceController@createGoalsEn')->name('app.create.goals.en');
    Route::post('/appearance/goals/create', 'Admin\AdminAppearanceController@storeGoals')->name('app.store.goals');
    Route::get('/appearance/goals/ar/{id}/edit', 'Admin\AdminAppearanceController@editGoalsAr')->name('app.edit.goals.ar');
    Route::get('/appearance/goals/en/{id}/edit', 'Admin\AdminAppearanceController@editGoalsEn')->name('app.edit.goals.en');
    Route::put('/appearance/goals/{id}/edit', 'Admin\AdminAppearanceController@updateGoals')->name('app.update.goals');
    //route::resource('/courses','Admin\AdminCoursesController');
    Route::resource('/courses', 'Admin\AdminCoursesController', [
        'only' => ['index', 'create', 'store', 'update', 'edit', 'destroy'],
    ]);
    Route::get('/courses/create-group', 'Admin\AdminCoursesController@create_course_group')->name('create.group');
    Route::get('/courses/{id}/edit-group', 'Admin\AdminCoursesController@edit_course_group')->name('edit.group');
    route::resource('/students', 'Admin\AdminStudentsController', [
        'only' => ['index', 'create', 'store', 'update', 'edit', 'destroy'],
    ]);
    Route::post('/students/{id}/create-student-data', 'Admin\AdminStudentsController@store_student_data')->name('store.student.data');
    Route::put('/students/{id}/update-student-data/{student_id}', 'Admin\AdminStudentsController@update_student_data')->name('update.student.data');
    Route::get('/students/{id}/create-student-data', 'Admin\AdminStudentsController@create_student_data')->name('create.student.data');
    Route::get('/students/{id}/edit-student-data', 'Admin\AdminStudentsController@edit_student_data')->name('edit.student.data');
    //Route::get('/colleges/{$college->id}/delete', ['as' => 'college.delete', 'uses' => 'Admin\AdminCollegesController@destroy']);
    //Route::get('/login', 'Admin\AdminAuth\AdminLoginController@showLoginForm')->name('admin.login');
    //Route::post('/login', 'Admin\AdminAuth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/login', [
        'as' => 'admin.login',
        'uses' => 'Admin\AdminAuth\AdminLoginController@showLoginForm',
    ]);

    Route::post('/login', [
        'as' => 'admin.login.submit',
        'uses' => 'Admin\AdminAuth\AdminLoginController@login',
    ]);
    Route::post('/logout', [
        'as' => 'admin.logout',
        'uses' => 'Admin\AdminAuth\AdminLoginController@logout',
    ]);
    Route::get('/logout', 'Admin\AdminAuth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/password/reset', 'Admin\AdminAuth\AdminRestPasswordController@RestPassword')->name('admin.reset');
    Route::post('/password/reset', 'Admin\AdminAuth\AdminRestPasswordController@RestPassword')->name('admin.reset');
    Route::get('/password/email', 'Admin\AdminAuth\AdminRestPasswordController@email')->name('admin.email');
    Route::post('/password/email', 'Admin\AdminAuth\AdminRestPasswordController@email')->name('admin.email');

    // Registration Routes...
    Route::get('/users/create', 'Admin\AdminAuth\AdminRegisterController@showRegistrationForm');
    Route::post('/users/create', 'Admin\AdminAuth\AdminRegisterController@register')->name('register');
    route::resource('/users', 'Admin\AdminAuth\AdminRegisterController', [
        'only' => ['index', 'update', 'edit', 'destroy'],
    ]);
    Route::post('/courses/create', 'Admin\AdminCoursesController@fetch_department_data')->name('department.data');
    Route::post('/courses/create-group', 'Admin\AdminCoursesController@store_course_group')->name('course.group');
    Route::put('/courses/{id}/update-group', 'Admin\AdminCoursesController@update_course_group')->name('course.group.update');
    Route::post('/courses/fetch-college-data', 'Admin\AdminCoursesController@fetch_college_level_data')->name('college.level.data');
    Route::post('/courses/fetch-course-data', 'Admin\AdminCoursesController@fetch_course_data')->name('course.data');
    Route::get('/schedules', 'Admin\AdminSchedulesController@index')->name('index.schedules');
    Route::get('/schedules/create-lec-schedule', 'Admin\AdminSchedulesController@createLec')->name('create.lec.schedule');
    Route::post('/schedules/create-lec-schedule', 'Admin\AdminSchedulesController@storeLec')->name('store.lec.schedule');
    Route::get('/schedules/{id}/edit-lec-schedule', 'Admin\AdminSchedulesController@editLec')->name('edit.lec.schedule');
    Route::put('/schedules/{id}/edit-lec-schedule', 'Admin\AdminSchedulesController@updateLec')->name('update.lec.schedule');
    Route::get('/schedules/create-exam-schedule', 'Admin\AdminSchedulesController@createExam')->name('create.exam.schedule');
    Route::post('/schedules/create-exam-schedule', 'Admin\AdminSchedulesController@storeExam')->name('store.exam.schedule');
    Route::get('/schedules/{id}/edit-exam-schedule', 'Admin\AdminSchedulesController@editExam')->name('edit.exam.schedule');
    Route::put('/schedules/{id}/edit-exam-schedule', 'Admin\AdminSchedulesController@updateExam')->name('update.exam.schedule');
});
//Route::post('/login', 'Auth\LoginController@login');
route::resource('/news', 'ArticlesController');
route::resource('/pages', 'PagesController');

Route::prefix('student')->group(function () {
    Route::get('/', 'StudentController@index')->name('student');
    Route::get('/gpa', 'StudentController@gpa')->name('gpa');
    Route::get('/grades', 'StudentController@grades')->name('grades');
    Route::get('/lectures-schedule', 'StudentController@lec_schedule')->name('lec.schedule');
    Route::get('/exam-schedule', 'StudentController@exam_schedule')->name('exam.schedule');
    Route::get('/change-password', 'StudentController@change_password')->name('change.password');
    Route::put('/change-password', 'StudentController@update_password')->name('update.password');
});
Route::post('/', 'LanguageController@changeLanguage')->name('change.language');
Route::get('/contact', 'Admin\AdminMessagesController@contact')->name('contact.us');
