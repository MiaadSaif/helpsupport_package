<?php

use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;
use Miaad\Helpsupport\Helpsupport;
use Miaad\Helpsupport\Http\Controllers\HelpsupportController;

Route::middleware(['web', 'change_password'])->group(function () {
    Route::get('/index', [HelpsupportController::class, 'index'])->name('index');
    Route::get('/help/index', [HelpsupportController::class, 'index'])->name('help');
    Route::get('/NewTicket/create', [HelpsupportController::class, 'create'])->name('createNewTicket');
    Route::post('/ViewTicket/store', [HelpsupportController::class, 'store'])->name('storeNewTicket');
    Route::get('/ViewTicket/MyTickets', [HelpsupportController::class, 'MyTickets'])->name('MytTickets');
    Route::get('/ViewResponse/show', [HelpsupportController::class, 'show'])->name('showResponse');
    Route::post('/ViewResponse/submit_response', [HelpsupportController::class, 'submit_response'])->name('createNewResponse');
    Route::get('/ViewResponse/TicketTracking', [HelpsupportController::class, 'TicketTracking'])->name('TicketTracking');
});
