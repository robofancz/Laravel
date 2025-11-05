<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::get('/', function () {
    $jobs = Job::all();
    dd($jobs[0]);
    
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()]);
});

Route::get('/jobs/{job}', function (Job $job) {
    return view('job', ['job' => $job]);
});

route::get('/contact', function () {
    return view('contact');
});
