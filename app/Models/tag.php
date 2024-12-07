<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    public function job() {
        return $this->belongsToMany(JobListing::class, "tags_job", "tag_id", "job_listing_id");
    }
}
