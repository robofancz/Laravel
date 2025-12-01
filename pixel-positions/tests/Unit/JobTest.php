<?php

use \App\Models\Employer;
use \App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;

it(' belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect( $job->employer->is($employer) )->toBeTrue();
});

it('can have tags', function () {
    $job = Job::factory()->create();

    $job->tag('Laravel');

    expect($job->tags)->toHaveCount(1);
});