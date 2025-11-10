<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::get('/', function () {
return view ('index');
});


// Index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(9);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show
Route::get('/jobs/{job}', function ($id) {
    // return view('jobs.show', ['job' => $job]);

    $job=Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

// Store
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

// Edit
Route::get('/jobs/{job}/edit', function ($id) {
    $job=Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

// Update
Route::patch('/jobs/{job}', function ($id) {
request()->validate([
    'title' => ['required', 'min:3'],
    'location' => ['required'],
]);

// autorize (on hold)

$job=Job::findOrFail($id);

$job->title=request('title');
$job->location=request('location');
$job->save();

// $job->update([
//     'title' => request('title'),
//     'location' => request('location'),
// ]);

return redirect('/jobs/' . $job->id);
});

// Destroy
Route::delete('/jobs/{job}', function ($id) {
    // authorize (on hold)
    $job=Job::findOrFail($id);
    $job->delete();
    return redirect('/jobs');
});


route::get('/contact', function () {
    return view('contact');
});
