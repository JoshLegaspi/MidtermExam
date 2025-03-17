<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feature::create([
            'name' => 'Model',
            'description' => 'Models are PHP classes that represent database tables. They serve as the primary way to interact with your database using Eloquent ORM.',
        ]);

        Feature::create([
            'name' => 'View',
            'description' => 'View is the presentation layer of your application. Its primary role is to render HTML, often incorporating dynamic data. Essentially, it is what the user sees.',
        ]);

        Feature::create([
            'name' => 'Controller',
            'description' => 'Controller is a crucial component that acts as an intermediary between the model and the view.',
        ]);

        Feature::create([
            'name' => 'Routes',
            'description' => 'Routes define how your application responds to different URLs.',
        ]);

        Feature::create([
            'name' => 'Middleware',
            'description' => 'Middleware acts as a filter for HTTP requests entering your application.',
        ]);

        Feature::create([
            'name' => 'Blade Templates',
            'description' => ' Blade Templates allow you to write plain PHP within your HTML, making it easy to display dynamic data and build reusable layouts.',
        ]);

        Feature::create([
           'name' => 'Migrations',
            'description' => 'Migrations are like version control for your database schema. They allow you to define and modify your database tables using PHP code, rather than directly writing SQL. ',
        ]);

        Feature::create([
            'name' => 'Seeders',
            'description' => 'Seeders are used to populate your database with initial data. They allow you to insert sample or default records into your tables after running migrations.',
        ]);

        Feature::create([
            'name' => 'Database',
            'description' => 'a database is a structured collection of data organized for easy access and management. It is where your application stores its persistent information, such as user accounts, product details, or blog posts.',
        ]);

        Feature::create([
            'name' => 'Eloquent ORM',
            'description' => ' It allows you to work with database tables and records using PHP objects and methods, rather than writing raw SQL queries.',
        ]);

        
    }
}