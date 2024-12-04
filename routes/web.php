<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs'=> [
            [
                'id' => 1,
                'title' => 'director',
                'salary'=> '$50.000',
            ],
            [  
                'id'=> 2,
                'title' => 'teacher',
                'salary' => '$40.000',
            ]
        ],
    ]);
    // return 'About page';
    // return ['foo' =>'bar'];
});

Route::get('/job/{id}', function ($id) {
        $jobs = [
            [  
                'id'=> 1,
                'title' => 'director',
                'salary'=> '$50.000',
            ],
            [
                'id'=> 2,
                'title' => 'teacher',
                'salary' => '$40.000',
            ]
        ];

        // Arr::first($jobs, function ($job) use ($id) {
        //     return $job['id'] == $id;
        // });

        $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return view('job', [
        'job' => $job
    ]);
});


Route::get('/contact', function () {
    return view('contact');
});
