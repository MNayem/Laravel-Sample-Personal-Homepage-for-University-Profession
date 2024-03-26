<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\Crud;
use App\Http\Controllers\Auth\ForgotPasswordController;


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

/* Password Reset Routes */
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/', function () { 
    $researchShowFront=App\Models\Research::all();
    return view('welcome', compact('researchShowFront')); 
});
Route::get('/contact', function () { return view('pages.contact'); });
Route::get('/members', function () { 
    $advisorProfessor=App\Models\People::select('*')
                     ->where('category','Professor/Advisor')
                     ->get();
    $studentPHD=App\Models\People::select('*')
                     ->where('category','PHD Student')
                     ->get();
    $studentMS=App\Models\People::select('*')
                     ->where('category','MS Student')
                     ->get();
    $studentBS=App\Models\People::select('*')
                     ->where('category','BS Student')
                     ->get();
    $studentStaff=App\Models\People::select('*')
                     ->where('category','Staff')
                     ->get();
    $studentAlumini=App\Models\People::select('*')
                     ->where('category','Alumini')
                     ->get();
    return view('pages.members', compact('advisorProfessor','studentPHD','studentMS','studentBS','studentStaff','studentAlumini')); 
});
Route::get('/memberShowSingle/{id}', function ($id) {
    $data = App\Models\People::find($id);
    return view('personal.member.memberShowSingle', compact('data')); 
});
Route::get('/projects', function () { return view('pages.projects'); });
Route::get('/publications', function () { return view('pages.publications'); });
Route::get('/research', function () { 
    $researchShowAll=App\Models\Research::all();
    return view('pages.research', compact('researchShowAll')); 
});

Route::get('/create', function () {
    return view('create');
});
Route::post('/add', [Crud::class, 'add']);

Auth::routes();
Route::get('/foodadd', function () {
    return view('food.foodadd');
});




//About Us
Route::get('/aboutUs', [RestaurantController::class,'aboutUs' ])->name('aboutUs');
//Contact Us
Route::get('/contactUs', [RestaurantController::class,'contactUs' ])->name('contactUs');

Route::post('/contactWithUs', [PersonalController::class, 'contact_store']);








//User Dashboard Route
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Admin Dashboard Route
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


//Contact Route
Route::post('/contactwithus', [CommonController::class,'contactwithus' ]) ;


/* Title and Subtitle */

Route::post('/addTitleAndSubtitle', [PersonalController::class, 'title_and_subtitle_Store']);
Route::get('/titleAndSubtitleadd', function () {
    return view('personal.TitleAndSubtitle.titleAndSubtitleadd');
});
Route::get('/titleAndSubtitleshow', [PersonalController::class, 'title_and_subtitle_Show']);
Route::get('/titleAndSubtitleedit/{id}', [PersonalController::class,'title_and_subtitle_edit' ]) ;
Route::post('/titleAndSubtitleeditprocess/{id}', [PersonalController::class,'title_and_subtitle_edit_process' ]) ;
Route::get('/deleteTitleAndSubtitle/{id}', [PersonalController::class,'delete_title_and_subtitle' ]) ;

/* Research */

Route::post('/addresearch', [PersonalController::class, 'research_store']);
Route::get('/researchadd', function () {
    $title= App\Models\Title::all();
    $subtitle = App\Models\Title::all();
    return view('personal.research.researchadd', compact('title','subtitle'));
});
Route::get('/researchshow', [PersonalController::class, 'research_show']);
Route::get('/researchDetails/{id}', [PersonalController::class, 'research_show_details_single']);
Route::get('/researchedit/{id}', [PersonalController::class,'research_edit' ]) ;
Route::post('/researcheditprocess/{id}', [PersonalController::class,'research_edit_process' ]) ;
Route::get('/deleteresearch/{id}', [PersonalController::class,'delete_research' ]) ;

/* Member */

Route::post('/addmember', [PersonalController::class, 'member_store']);
Route::get('/memberadd', function () {
    $title= App\Models\Title::all();
    return view('personal.member.memberadd', compact('title'));
});
Route::get('/membershow', [PersonalController::class, 'member_Show']);
Route::get('/memberedit/{id}', [PersonalController::class,'member_edit' ]) ;
Route::post('/membereditprocess/{id}', [PersonalController::class,'member_edit_process' ]) ;
Route::get('/deletemember/{id}', [PersonalController::class,'delete_member' ]) ;
