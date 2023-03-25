<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://restcountries.com/v3.1/region/americas?fields=translations')->json();
        $countries = array_map(fn($value)=> ['name' => $value['translations']['spa']['common']],$response);
        DB::table('countries')->insert($countries);
    }
}
