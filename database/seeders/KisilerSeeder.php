<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
//use Illuminate\Database\QueryException;






class KisilerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kisilers') ->insert([
            'name' => Str::random(10),
            'surname' => Str::random(10),
            'phone' => Str::random(10),
            'email' => Str::random(10).'gmail.com',
            'sehirid' => Str::random(10),
            'selflink' => 'name',
            'created_at'=>now(),
            'updated_at'=>now()

        ]);
    }
}
