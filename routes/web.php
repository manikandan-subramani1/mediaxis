<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\CustomerVerificationController;
use App\Http\Controllers\WorkorderController;
use App\Http\Controllers\CommunicationsController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\MigrationController;
use App\Models\Admin;
use App\Http\Controllers\PatientTransferController;

Route::get('/transfer-patient/{id}', [PatientTransferController::class, 'transfer'])->name('transfer.patient');

Route::get('/', function () {
    return view('index');
});


Route::middleware('guest')->group(function () {
    Route::get('customer/email/verify', [CustomerVerificationController::class, 'notice'])
        ->name('customer.verification.notice');
    Route::get('customer/email/verify/{id}', [CustomerVerificationController::class, 'verify'])
        ->name('customer.verification.verify');
});

    Route::middleware('auth:customer')->group(function () {
    Route::post('customer/email/resend', [CustomerVerificationController::class, 'resend'])
        ->name('customer.verification.resend');

});



Route::prefix('patient')->group(function ()
 {
    Route::get('/register', [CustomerAuthController::class, 'showRegisterForm'])->name('customer.register');
    Route::post('/register', [CustomerAuthController::class, 'register']);    
    Route::get('/login', [CustomerAuthController::class, 'showLoginForm'])->name('customer.login');
    Route::post('/login', [CustomerAuthController::class, 'login']);
    Route::get('/patient_register', [PatientController::class, 'patient_register'])->name('patient_register');
    Route::post('/patient_register',[PatientController::class,'patient_register'])->name('patient-register');
    Route::post('/patient_register_admin',[PatientController::class,'patient_register_admin'])->name('patient-register-admin');
    
    Route::middleware(['auth:customer', 'verified'])->group(function () {
    Route::get('dashboard',[CustomerController::class,'user_dashboard'])->name('customer.dashboard'); 
    Route::get('dashboard/{patient_id}',[CustomerController::class,'user']); 
    Route::post('/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');

    });
});


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
   
});

Auth::routes();


Route::get('/home', [AdminController::class, 'home'])->name('home');
Route::get('/admin2', [AdminController::class, 'admin'])->name('admin2');
//enquiry
Route::get('/enquiry', [CustomerController::class, 'enquiries']);
Route::delete('/enquiry/{id}', [CustomerController::class, 'deleteEnquiry'])->name('enquiry.destroy');
Route::post('/enquiry',[CustomerController::class,'enquiry'])->name('enquiry');

//patient details
Route::get('/patient_details', [AdminController::class, 'admin_work_order'])->name('patient_details');
Route::get('/add-details/{patient_id}',[BillController::class,'add_details'])->name('add-details');
Route::post('/add-treatment',[PatientController::class,'add_treatment'])->name('add-treatment');
Route::get('/delete-patient/{id}', [PatientController::class, 'delete_patient'])->name('delete-patient');
// Route::get('/admin-new-order', [AdminController::class, 'admin_new_order'])->name('admin.new.work');
// Route::post('insert_work_order_admin',[AdminController::class, 'insert_work_order_admin'])->name('insert_work_order_admin');

//bills
Route::get('/bills', [BillController::class, 'bills']);
Route::get('/add-bills/{patient_id}',[BillController::class,'create'])->name('add_bills');
Route::post('/add-payment',[BillController::class,'add_payment'])->name('add-payment');
Route::get('/delete-bills/{id}',[BillController::class,'delete_bills'])->name('delete-bills');

//migration
Route::get('/migration1', [MigrationController::class, 'migration_view'])->name('migration1');
Route::post('/migration',[MigrationController::class,'req_mig'])->name('migration');
Route::get('/migrate/{patient_id}', [MigrationController::class, 'deleteMigrate']);


Route::get('/mig-view',[AdminController::class,'mig_view'])->name('mig-view');
Route::get('/mig-rec',[AdminController::class,'mig_record'])->name('mig.rec');
Route::get('/pat-view/{patient_id}',[AdminController::class,'pat_view'])->name('patient.view');






