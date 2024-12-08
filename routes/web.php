<?php

use App\Models\JobListing;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs.index', [
            'jobs' => JobListing::with('employee')->latest()->paginate(3),
    ]);
});

Route::post('/jobs', function () {
    // validation
    JobListing::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employee_id' => 1
    ]);

    return redirect('/jobs');
});


Route::get('/jobs/create', function () {
    return view('jobs.create');
});


Route::get('/job/{id}', function ($id)  {
        // Arr::first($jobs, function ($job) use ($id) {
        //     return $job['id'] == $id;
        // });
    return view('jobs.show', [
        'job' => JobListing::find($id),
    ]);
});


Route::get('/contact', function () {
    return view('contact');
});
