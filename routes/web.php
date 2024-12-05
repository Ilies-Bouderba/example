<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
            'jobs' => Job::all(),
    ]);
});

Route::get('/job/{id}', function ($id)  {
        // Arr::first($jobs, function ($job) use ($id) {
        //     return $job['id'] == $id;
        // });
    return view('job', [
        'job' => Job::find($id),
    ]);
});


Route::get('/contact', function () {
    return view('contact');
});
