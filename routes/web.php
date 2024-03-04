<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StylistsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\StylistPanelController;
use App\Http\Controllers\RecordController;

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
});

Auth::routes();

Route::middleware(['checkRole:admin'])->group(function () {
    // Routes for AddressController

    //Route::get('/home', [HomeController::class, 'index'])->name('home');


    // Route::get('/addresses', [AddressController::class, 'index'])->name('addresses.index');
    // Route::get('/addresses/create', [AddressController::class, 'create'])->name('addresses.create');
    // Route::post('/addresses', [AddressController::class, 'store'])->name('addresses.store');
    // Route::get('/addresses/{id}', [AddressController::class, 'show'])->name('addresses.show');
    // Route::get('/addresses/{id}/edit', [AddressController::class, 'edit'])->name('addresses.edit');
    // Route::put('/addresses/{id}', [AddressController::class, 'update'])->name('addresses.update');
    // Route::delete('/addresses/{id}', [AddressController::class, 'destroy'])->name('addresses.destroy');

    // // Routes for AppointmentController
    // Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    // Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
    // Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
    // Route::get('/appointments/{id}', [AppointmentController::class, 'show'])->name('appointments.show');
    // Route::get('/appointments/{id}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
    // Route::put('/appointments/{id}', [AppointmentController::class, 'update'])->name('appointments.update');
    // Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');


    // // Routes for CurrencyController
    // Route::get('/currencies', [CurrencyController::class, 'index'])->name('currencies.index');
    // Route::get('/currencies/create', [CurrencyController::class, 'create'])->name('currencies.create');
    // Route::post('/currencies', [CurrencyController::class, 'store'])->name('currencies.store');
    // Route::get('/currencies/{id}', [CurrencyController::class, 'show'])->name('currencies.show');
    // Route::get('/currencies/{id}/edit', [CurrencyController::class, 'edit'])->name('currencies.edit');
    // Route::put('/currencies/{id}', [CurrencyController::class, 'update'])->name('currencies.update');
    // Route::delete('/currencies/{id}', [CurrencyController::class, 'destroy'])->name('currencies.destroy');

    // // Routes for CustomerController
    // Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
    // Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
    // Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
    // Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customers.show');
    // Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    // Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');
    // Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');

    // // Routes for RoleController
    // Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    // Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
    // Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
    // Route::get('/roles/{id}', [RoleController::class, 'show'])->name('roles.show');
    // Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    // Route::put('/roles/{id}', [RoleController::class, 'update'])->name('roles.update');
    // Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');

    // // Routes for SalonController
    // Route::get('/salons', [SalonController::class, 'index'])->name('salons.index');
    // Route::get('/salons/create', [SalonController::class, 'create'])->name('salons.create');
    // Route::post('/salons', [SalonController::class, 'store'])->name('salons.store');
    // Route::get('/salons/{id}', [SalonController::class, 'show'])->name('salons.show');
    // Route::get('/salons/{id}/edit', [SalonController::class, 'edit'])->name('salons.edit');
    // Route::put('/salons/{id}', [SalonController::class, 'update'])->name('salons.update');
    // Route::delete('/salons/{id}', [SalonController::class, 'destroy'])->name('salons.destroy');

    // // Routes for ServicesController
    // Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
    // Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');
    // Route::post('/services', [ServicesController::class, 'store'])->name('services.store');
    // Route::get('/services/{id}', [ServicesController::class, 'show'])->name('services.show');
    // Route::get('/services/{id}/edit', [ServicesController::class, 'edit'])->name('services.edit');
    // Route::put('/services/{id}', [ServicesController::class, 'update'])->name('services.update');
    // Route::delete('/services/{id}', [ServicesController::class, 'destroy'])->name('services.destroy');

    // // Routes for StylistsController
    // Route::get('/stylists', [StylistsController::class, 'index'])->name('stylists.index');
    // Route::get('/stylists/create', [StylistsController::class, 'create'])->name('stylists.create');
    // Route::post('/stylists', [StylistsController::class, 'store'])->name('stylists.store');
    // Route::get('/stylists/{id}', [StylistsController::class, 'show'])->name('stylists.show');
    // Route::get('/stylists/{id}/edit', [StylistsController::class, 'edit'])->name('stylists.edit');
    // Route::put('/stylists/{id}', [StylistsController::class, 'update'])->name('stylists.update');
    // Route::delete('/stylists/{id}', [StylistsController::class, 'destroy'])->name('stylists.destroy');

    // // Routes for UserController
    // Route::get('/users', [UserController::class, 'index'])->name('users.index');
    // Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    // Route::post('/users', [UserController::class, 'store'])->name('users.store');
    // Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    // Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    // Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    // Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


    // // Routes for ScheduleController
    // Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedules.index');
    // Route::get('/schedules/create', [ScheduleController::class, 'create'])->name('schedules.create');
    // Route::post('/schedules', [ScheduleController::class, 'store'])->name('schedules.store');
    // Route::get('/schedules/{id}', [ScheduleController::class, 'show'])->name('schedules.show');
    // Route::get('/schedules/{id}/edit', [ScheduleController::class, 'edit'])->name('schedules.edit');
    // Route::put('/schedules/{id}', [ScheduleController::class, 'update'])->name('schedules.update');
    // Route::delete('/schedules/{id}', [ScheduleController::class, 'destroy'])->name('schedules.destroy');

    // // Routes for AppointmentController
    // Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    // Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
    // Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
    // Route::get('/appointments/{id}', [AppointmentController::class, 'show'])->name('appointments.show');
    // Route::get('/appointments/{id}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
    // Route::put('/appointments/{id}', [AppointmentController::class, 'update'])->name('appointments.update');
    // Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');

    // // Routes for ManagerController
    // Route::get('/managers', [ManagerController::class, 'index'])->name('managers.index');
    // Route::get('/managers/create', [ManagerController::class, 'create'])->name('managers.create');
    // Route::post('/managers', [ManagerController::class, 'store'])->name('managers.store');
    // Route::get('/managers/{id}', [ManagerController::class, 'show'])->name('managers.show');
    // Route::get('/managers/{id}/edit', [ManagerController::class, 'edit'])->name('managers.edit');
    // Route::put('/managers/{id}', [ManagerController::class, 'update'])->name('managers.update');
    // Route::delete('/managers/{id}', [ManagerController::class, 'destroy'])->name('managers.destroy');

    // // Routes for AccountController
    // Route::get('accounts', [AccountController::class, 'index'])->name('accounts.index');
    // Route::get('accounts/create', [AccountController::class, 'create'])->name('accounts.create');
    // Route::post('accounts', [AccountController::class, 'store'])->name('accounts.store');
    // Route::get('accounts/{id}', [AccountController::class, 'show'])->name('accounts.show');
    // Route::get('accounts/{id}/edit', [AccountController::class, 'edit'])->name('accounts.edit');
    // Route::put('accounts/{id}', [AccountController::class, 'update'])->name('accounts.update');
    // Route::delete('accounts/{id}', [AccountController::class, 'destroy'])->name('accounts.destroy');

});
Route::middleware(['checkRole:customer'])->group(function () {

});
Route::get('/index', [IndexController::class, 'index'])->name('index');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/stylistpanel', [StylistPanelController::class, 'index'])->name('stylistpanel');
Route::post('/stylistpanel', [StylistPanelController::class, 'handleAppointment'])->name('stylistpanel.handleAppointment');

// Маршрут для сохранения созданной записи
Route::post('/records', [RecordController::class, 'store'])->name('records.store');
Route::get('/stylistpanel', [RecordController::class, 'stylistPanel'])->name('stylistpanel');
Route::post('/stylistpanel', [RecordController::class, 'handleAppointment'])->name('stylistpanel.handleAppointment');
Route::get('/records/{id}', [RecordController::class,'show'])->name('records.show');
Route::get('/records/{id}/edit', [RecordController::class, 'edit'])->name('records.edit');
Route::put('/records/{id}', [RecordController::class, 'update'])->name('records.update');
Route::delete('/records/{id}', [RecordController::class, 'destroy'])->name('records.destroy');



// Routes for AddressController
Route::get('/addresses', [AddressController::class, 'index'])->name('addresses.index');
Route::get('/addresses/create', [AddressController::class, 'create'])->name('addresses.create');
Route::post('/addresses', [AddressController::class, 'store'])->name('addresses.store');
Route::get('/addresses/{id}', [AddressController::class, 'show'])->name('addresses.show');
Route::get('/addresses/{id}/edit', [AddressController::class, 'edit'])->name('addresses.edit');
Route::put('/addresses/{id}', [AddressController::class, 'update'])->name('addresses.update');
Route::delete('/addresses/{id}', [AddressController::class, 'destroy'])->name('addresses.destroy');

// Routes for AppointmentController
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/appointments/{id}', [AppointmentController::class, 'show'])->name('appointments.show');
Route::get('/appointments/{id}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
Route::put('/appointments/{id}', [AppointmentController::class, 'update'])->name('appointments.update');
Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');


// Routes for CurrencyController
Route::get('/currencies', [CurrencyController::class, 'index'])->name('currencies.index');
Route::get('/currencies/create', [CurrencyController::class, 'create'])->name('currencies.create');
Route::post('/currencies', [CurrencyController::class, 'store'])->name('currencies.store');
Route::get('/currencies/{id}', [CurrencyController::class, 'show'])->name('currencies.show');
Route::get('/currencies/{id}/edit', [CurrencyController::class, 'edit'])->name('currencies.edit');
Route::put('/currencies/{id}', [CurrencyController::class, 'update'])->name('currencies.update');
Route::delete('/currencies/{id}', [CurrencyController::class, 'destroy'])->name('currencies.destroy');

// Routes for CustomerController
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customers.show');
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');

// Routes for RoleController
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
Route::get('/roles/{id}', [RoleController::class, 'show'])->name('roles.show');
Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
Route::put('/roles/{id}', [RoleController::class, 'update'])->name('roles.update');
Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');

// Routes for SalonController
Route::get('/salons', [SalonController::class, 'index'])->name('salons.index');
Route::get('/salons/create', [SalonController::class, 'create'])->name('salons.create');
Route::post('/salons', [SalonController::class, 'store'])->name('salons.store');
Route::get('/salons/{id}', [SalonController::class, 'show'])->name('salons.show');
Route::get('/salons/{id}/edit', [SalonController::class, 'edit'])->name('salons.edit');
Route::put('/salons/{id}', [SalonController::class, 'update'])->name('salons.update');
Route::delete('/salons/{id}', [SalonController::class, 'destroy'])->name('salons.destroy');

// Routes for ServicesController
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');
Route::post('/services', [ServicesController::class, 'store'])->name('services.store');
Route::get('/services/{id}', [ServicesController::class, 'show'])->name('services.show');
Route::get('/services/{id}/edit', [ServicesController::class, 'edit'])->name('services.edit');
Route::put('/services/{id}', [ServicesController::class, 'update'])->name('services.update');
Route::delete('/services/{id}', [ServicesController::class, 'destroy'])->name('services.destroy');

// Routes for StylistsController
Route::get('/stylists', [StylistsController::class, 'index'])->name('stylists.index');
Route::get('/stylists/create', [StylistsController::class, 'create'])->name('stylists.create');
Route::post('/stylists', [StylistsController::class, 'store'])->name('stylists.store');
Route::get('/stylists/{id}', [StylistsController::class, 'show'])->name('stylists.show');
Route::get('/stylists/{id}/edit', [StylistsController::class, 'edit'])->name('stylists.edit');
Route::put('/stylists/{id}', [StylistsController::class, 'update'])->name('stylists.update');
Route::delete('/stylists/{id}', [StylistsController::class, 'destroy'])->name('stylists.destroy');

// Routes for UserController
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


// Routes for ScheduleController
Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedules.index');
Route::get('/schedules/create', [ScheduleController::class, 'create'])->name('schedules.create');
Route::post('/schedules', [ScheduleController::class, 'store'])->name('schedules.store');
Route::get('/schedules/{id}', [ScheduleController::class, 'show'])->name('schedules.show');
Route::get('/schedules/{id}/edit', [ScheduleController::class, 'edit'])->name('schedules.edit');
Route::put('/schedules/{id}', [ScheduleController::class, 'update'])->name('schedules.update');
Route::delete('/schedules/{id}', [ScheduleController::class, 'destroy'])->name('schedules.destroy');

// Routes for AppointmentController
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/appointments/{id}', [AppointmentController::class, 'show'])->name('appointments.show');
Route::get('/appointments/{id}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
Route::put('/appointments/{id}', [AppointmentController::class, 'update'])->name('appointments.update');
Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');

// Routes for ManagerController
Route::get('/managers', [ManagerController::class, 'index'])->name('managers.index');
Route::get('/managers/create', [ManagerController::class, 'create'])->name('managers.create');
Route::post('/managers', [ManagerController::class, 'store'])->name('managers.store');
Route::get('/managers/{id}', [ManagerController::class, 'show'])->name('managers.show');
Route::get('/managers/{id}/edit', [ManagerController::class, 'edit'])->name('managers.edit');
Route::put('/managers/{id}', [ManagerController::class, 'update'])->name('managers.update');
Route::delete('/managers/{id}', [ManagerController::class, 'destroy'])->name('managers.destroy');

// Routes for AccountController
Route::get('accounts', [AccountController::class, 'index'])->name('accounts.index');
Route::get('accounts/create', [AccountController::class, 'create'])->name('accounts.create');
Route::post('accounts', [AccountController::class, 'store'])->name('accounts.store');
Route::get('accounts/{id}', [AccountController::class, 'show'])->name('accounts.show');
Route::get('accounts/{id}/edit', [AccountController::class, 'edit'])->name('accounts.edit');
Route::put('accounts/{id}', [AccountController::class, 'update'])->name('accounts.update');
Route::delete('accounts/{id}', [AccountController::class, 'destroy'])->name('accounts.destroy');
