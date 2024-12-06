<?php

use App\Models\job_listings;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
            'jobs' => job_listings::all(),
    ]);
});

Route::get('/job/{id}', function ($id)  {
        // Arr::first($jobs, function ($job) use ($id) {
        //     return $job['id'] == $id;
        // });
    return view('job', [
        'job' => job_listings::find($id),
    ]);
});


Route::get('/contact', function () {
    return view('contact');
});
