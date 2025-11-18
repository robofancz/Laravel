<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Gate;


class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(9);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job){
        return view('jobs.show', ['job' => $job]);
    }

    public function store(Job $job)
    {
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
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        request()->validate([
    'title' => ['required', 'min:3'],
    'location' => ['required'],
]);

// autorize (on hold)


$job->update([
    'title' => request('title'),
    'location' => request('location'),
    ]);

    return redirect('/jobs/' . $job->id);
}

    public function destroy(Job $job)
    {
        // authorize (on hold)
        $job->delete();
        return redirect('/jobs');
    }
}
