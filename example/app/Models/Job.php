<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job{
    public static function all(): array
    {
        return [
            [
                'id'=>1,
                'title' => 'Software Engineer', 
                'location' => 'New York'
            ],
            [
                'id'=>2 ,
                'title' => 'Product Manager',
                 'location' => 'San Francisco'
                ],
            [
                'id'=>3 ,
                'title' => 'Designer',
                 'location' => 'Remote'
                ],
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }
        else {
            return $job;
        }
    }
}


