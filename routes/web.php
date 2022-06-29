<?php  
Route::get('/', 'WebController@get_index'); 
Route::post('/contactMe', 'WebController@contactMe');

Route::get('/locale/{locale}', function($locale){
    Session::put('locale', $locale);
    return redirect()->back();
}); 



Route::group(['prefix'=>'admin'], function(){  
    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\LoginController@login');
    Route::get('/logout','Admin\LoginController@logout')->name('admin.logout');
    Route::post('logout', 'Admin\LoginController@logout'); 

    Route::get('/', 'adminController@index')->name('admin.index');
    Route::get('/personelinformation','adminController@personelinformation');
    Route::post('/Addpersonelinformation','adminController@Addpersonelinformation'); 

    Route::get('/education','adminController@education');
    Route::get('/education/update/{id}','adminController@educationUpdate');
    Route::get('/education/delete/{id}','adminController@educationDelete');
    Route::post('/addEduinformation','adminController@addEduinformation');
    Route::post('/updateEduinformation/{id}','adminController@updateEduinformation');


    Route::get('/experience','adminController@experience');
    Route::get('/experience/update/{id}','adminController@experienceUpdate');
    Route::get('/experience/delete/{id}','adminController@experienceDelete');
    Route::post('/addExperiences','adminController@addExperiences');
    Route::post('/updateExperiences/{id}','adminController@updateExperiences');


    Route::get('/skill','adminController@skill');
    Route::post('/addSkills','adminController@addSkills');
    Route::get('/updateSkills/{id}','adminController@updateSkills');
    Route::post('/SaveUpdateSkills/{id}','adminController@SaveUpdateSkills');
    Route::get('/SkillsDelete/{id}','adminController@SkillsDelete');


    Route::get('/project','adminController@project');
    Route::post('/addProjects','adminController@addProjects');
    Route::get('/UpdateProject/{id}','adminController@UpdateProject');
    Route::post('/SaveUpdateProject/{id}','adminController@SaveUpdateProject'); 
    Route::get('/ProjectDelete/{id}','adminController@ProjectDelete'); 

    Route::get('/application','adminController@application');
    Route::post('/addApplications','adminController@addApplications');

    Route::get('/contact','adminController@contact');
    Route::get('/DeleteMessages/{id}','adminController@DeleteMessages'); 
    

    

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 

Route::post('admin-password/email', 'Admin\ForgotPasswordController@SendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
