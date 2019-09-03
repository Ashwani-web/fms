<?php
use  App\Http\Middleware;
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

Route::prefix('admin')->group(function() {
    Route::get('/', 'Auth\AdminLoginController@showLoginForm')->name('admin.adminlogin');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.adminlogin');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.adminlogin.submit');
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('manage-class-provider', 'AdmincpController@ListofClassprovide');
    Route::get('add-class-provider', 'AdmincpController@AddclassProviderForm');
    Route::post('add-class-provider', 'AdmincpController@AddclassProvider');

    Route::post('edit-class-provider/{id}', 'AdmincpController@AddcpImage');

    //Route::delete('add-class-provider/{id}', 'AdmincpController@deletecpimage');
    //Route::delete('/add-class-provider', 'AdmincpController@deletecpimage');
    //Route::delete('/add-class-provider/{id}', 'AdmincpController@deletecpimage');
    
    Route::get('edit-class-provider/{id}','AdmincpController@editclassProvider');
    Route::post('update-class-provider/{id}', 'AdmincpController@updateclassProvider');
    
    //Route::post('add-state', 'AdmincpController@state');
    Route::delete('destroy/{id}', 'AdmincpController@destroy');
    //Route::delete('edit-class-provider/{id}', 'AdmincpController@deletecpimage');
    Route::get('add-class/{id}', 'AdmincpController@addClassesget');
    Route::post('add-class', 'AdmincpController@addClassesposts');
    Route::get('edit-class/{id}','AdmincpController@editClasspost');
    Route::post('edit-class/{id}','AdmincpController@updateClasspost');
    Route::delete('/add-class-provider/{id}', 'AdmincpController@deletecpimage');
    Route::get('customer-list','AdmincpController@customerList');
    
}); 


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('login', function () {
//     return view('auth.login');
// });

// Route::group(array('before' => 'auth'), function(){
// });



Route::prefix('classprovider')->group(function()  {
    Route::get('/login', 'Auth\ClassProviderLoginController@showLoginForm');
    Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\ClassProviderLoginController@login']);
    Route::get('/dashboard', 'ClassProviderController@index');
    Route::get('/listclasses', 'ClassProviderController@listClasses');
    Route::get('/addclasses', 'ClassProviderController@addClasses');
    Route::get('/paymentlist', 'ClassProviderController@paymentList'); 
    Route::get('/myprofile', 'ClassProviderController@addProfile');
    Route::post('/addClass', 'ClassProviderController@addNewClasses');
    Route::post('/addprofile', 'ClassProviderController@myProfile');
    Route::post ( '/updateClass', 'ClassProviderController@updateClass');
    Route::post ( '/deleteItem', 'ClassProviderController@deleteClass');
    Route::post ( 'getAchivment', 'ClassProviderController@getAchivmentId');
   
    
});


    
    
Route::prefix('user')->group(function()  {
    Route::get('/login', 'Auth\LoginController@showLoginForm');
    Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@login']);
    Route::get('/dashboard', 'CustmorePannelController@index');
    Route::get('/allclasses', 'CustmorePannelController@listOfClass');
    Route::get('/paymentdetail', 'CustmorePannelController@paymentDetail');
    
    Route::get('/myprofile', 'addProfileController@index');
  
    Route::post('/uplodeprofile', 'addProfileController@uplodeProfile');
    Route::get('/uplodeprofile', 'addProfileController@uplodeProfile');
    
    
    
    // view family section
    Route::get('/allFamilyView', 'addProfileController@allChildrenView');
    Route::post('/updatedetails', 'addProfileController@updateFamilyDetail');
    Route::get('/viewprofile', 'addProfileController@viewProfile');
    Route::get('/view', 'addProfileController@viewFamilyProfile');
    Route::get('/addNewFamily', 'addProfileController@addDetail');
    Route::post('/addedfamily', 'addProfileController@addNewFamily');
    Route::post('test', 'addProfileController@editFamily');
    Route::get('test', 'addProfileController@showFamily');
    Route::post ( '/deleteItem', 'addProfileController@deleteFamily' );
    Route::get('/menu', 'HeaderMenuBarController@index');
    
    Route::get('/sendmail', 'addProfileController@sendMail');
    Route::get('/mailForm', function () {
        return view('custmore.custmore_pannel.sendmail');
    });
});

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/registers', function () {
    return view('custmore.register');
});
Route::get('/{id}/class/{slug}','SubcategoryController@indexclass');
Route::get('mail/send', 'MailController@send');
Route::post('sendmail', 'MailController@sendMail');

Route::post('/registers', 'RegisterController@create');
Route::get('/{id}', 'CategoryController@index');
Route::get('/{id}/{catId}', 'CategoryController@subcategory');
Route::get('/{id}/{catId}/{furSubid}','CategoryController@furSubCat');


//Route::get('/showall/{id}','Subcategorycontroller@index');
//Route::get('/{id}','Subcategorycontroller@index');

// Route::get('/category','CategoryController@showCatPage');