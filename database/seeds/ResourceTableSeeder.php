<?php

use App\Resource;
use Illuminate\Database\Seeder;

class ResourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resources')->delete();

        Resource::create([
            'seq' => '1',
            'name' => 'my image',
            'description' => 'my description',
            'type' =>  'image',
            'url' =>  true,
            'status' =>  'active',
            'image' =>  '',
            'thumb' =>  '',
            'content' =>  'my content',
            'published_at' =>  \Carbon\Carbon::now()
        ]);
    }
}