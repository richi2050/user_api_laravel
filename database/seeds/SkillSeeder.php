<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            'name' => 'react'
        ]);

        Skill::create([
            'name' => 'PHP'
        ]);

        Skill::create([
            'name' => 'Angular'
        ]);

        Skill::create([
            'name' => 'nodejs'
        ]);

    }
}
