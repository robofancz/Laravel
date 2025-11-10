<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::get('/', function () {
return view ('index');
});



Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(9);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});



Route::get('/jobs/{job}', function ($id) {
    // return view('jobs.show', ['job' => $job]);
    $job=Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function(){
    // dd(request()->all());

    request()->validate([
        'title' => ['required', 'min:3'],
        'location' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'location' => request('location'),
        'employer_id' => 1,
    ]);
    return redirect('/jobs');
});


route::get('/contact', function () {
    return view('contact');
});
