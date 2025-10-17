<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Learn;
class LearnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Learn::factory()->count(3)->create();

        $this->call([
            LearnSeeder::class, // 👈 This line is what actually runs your seeder
        ]);
    }
}
