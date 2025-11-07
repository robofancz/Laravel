<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::get('/', function () {
return view ('index');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->get();

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{job}', function (Job $job) {
    return view('job', ['job' => $job]);
});

route::get('/contact', function () {
    return view('contact');
});
