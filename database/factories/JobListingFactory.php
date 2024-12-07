<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\JobListing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Joblisting>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = JobListing::class;

    public function definition(): array
    {
        return [
            "title" => fake()->jobTitle,
            "employee_id" => Employee::factory(),
            "salary" => "$50,000",
        ];
    }
}
