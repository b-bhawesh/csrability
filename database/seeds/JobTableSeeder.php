<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Job;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<10; $i++)
        {
            \DB::table('jobs')->insert([
                'job_title' => 'What is loreum Ipsum', 
                'job_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 
                'publish_date' => Carbon::parse('2019-09-30')->format('Y-m-d'), 
                'closing_date' => Carbon::parse('2019-10-30')->format('Y-m-d'), 
                'company_image' => rand(1,5).'.png',
                'organisation_type' => rand(1,5), 
                'organisation' => 'Loreum Ipsum', 
                'country' => 105, 
                'state' => 21, 
                'city' => 12, 
                'attachment' =>  rand(1,5).'.pdf', 
                'posted_by' => 2
            ]);
        }
    }
}
