<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model {
    use HasFactory;


    protected $table = 'job_listings';

    protected $fillable = ['title', 'location'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }


    // Locally stored jobs for testing without a database


    // public static function all(): array
    // {
    //     return [
    //         [
    //             'id'=>1,
    //             'title' => 'Software Engineer', 
    //             'location' => 'New York'
    //         ],
    //         [
    //             'id'=>2 ,
    //             'title' => 'Product Manager',
    //              'location' => 'San Francisco'
    //             ],
    //         [
    //             'id'=>3 ,
    //             'title' => 'Designer',
    //              'location' => 'Remote'
    //             ],
    //     ];
    // }

    // public static function find(int $id): array
    // {
    //     $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

    //     if (! $job) {
    //         abort(404);
    //     }
    //     else {
    //         return $job;
    //     }
    // }
}


