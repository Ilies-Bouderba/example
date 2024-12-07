<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    /** @use HasFactory<\Database\Factories\JobListingFactory> */
    use HasFactory;
    protected $table = "JobListing";
    protected $fillable = ['title', 'salary'];

    public function Employee() {
        return $this->belongsTo(Employee::class);
        // so what happens here is that it will look inside the class Employee and then find that table and then get the foriegn key from that table, and the match it with the other table and then find the matched data
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, "tags_job", "job_listing_id", relatedPivotKey: "tag_id");
    }
}
