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
    request()->validate(rules: [
        'title' => ['required', 'min: 3'],
        'salary' => ['required'],
    ]);

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

Route::get('/job/{id}/edit', function ($id)  {

    return view('jobs.edit', [
        'job' => JobListing::find($id),
    ]);
});

Route::patch('/job/{id}', function ($id)  {
    // validate the data
    request()->validate(rules: [
        'title'=> ['required', 'min: 3'],
        'salary'=> ['required'],
    ]);
    // update the data

    $job = JobListing::findOrFail($id);
    $job->update([
        'title'=> request('title'),
        'salary'=> request('salary'),
    ]);
    // redirect to the form
    return redirect('/job/'. $job->id);
});

Route::delete('/job/{id}', function ($id)  {
    // delete the data
    $job = JobListing::findOrFail($id);
    $job->delete();
    // redirect to the view
    return redirect('/jobs');

});


Route::get('/contact', function () {
    return view('contact');
});
