<?php

use App\Models\JobListing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
            'jobs' => JobListing::with('employee')->paginate(3),
    ]);
});

Route::get('/job/{id}', function ($id)  {
        // Arr::first($jobs, function ($job) use ($id) {
        //     return $job['id'] == $id;
        // });
    return view('job', [
        'job' => JobListing::find($id),
    ]);
});


Route::get('/contact', function () {
    return view('contact');
});
