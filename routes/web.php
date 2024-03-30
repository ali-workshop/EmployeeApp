<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;

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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Employee routes
Route::get('/employee/index',[EmployeeController::class,'index'])->name('employee.dashboard');
Route::get('/employees',[EmployeeController::class,'showEmployees'])->name('employees');

// manager routes
Route::get('/manager/index',[ManagerController::class ,'index'])->name('manager.dashboard');
Route::get('/manager/create',[ManagerController::class,'create'])->name('manager.create');
Route::post('/manager/store',[ManagerController::class,'store'])->name('manager.store');
Route::get('/manager/show/edit/option',[ManagerController::class,'editoption'])->name('manager.edit.option');
Route::get('/manager/show/edit',[ManagerController::class,'showedit'])->name('manager.show.edit');
Route::get('/manager/show/delet',[ManagerController::class,'showedelet'])->name('manager.show.delet'); #i can use form instaed of anotehr blade for delete 
Route::get('/manager/delet{user}',[ManagerController::class,'delet'])->name('manager.delet');
Route::get('/manager/edit{user}',[ManagerController::class,'edit'])->name('manager.edit');
Route::get('/managers',[ManagerController::class,'showmanagers'])->name('managers');
Route::get('/manager/get/id',[ManagerController::class,'getID'])->name('manager.get.id');
Route::get('/manager/edit/id',[ManagerController::class,'editID'])->name('manager.edit.id');
Route::put('/manager/edit{id}',[ManagerController::class,'updateID'])->name('manager.update.id');
Route::get('manager/get/role',[ManagerController::class,'getrole'])->name("manager.get.role");
Route::get('/manager/edit/role',[ManagerController::class,'editrole'])->name('manager.edit.role');
Route::put('manager/edit/role{id}',[ManagerController::class,'updaterole'])->name("manger.update.role");
// next step add more features and inclue the upgrade message for employee when change the role from employee to manager

