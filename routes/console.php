<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Schedule::command('generate:monthly-remittances')
//     ->monthlyOn(1, '00:10')
//     ->runInBackground()
//     ->withoutOverlapping();
