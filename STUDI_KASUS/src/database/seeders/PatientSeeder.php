<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::firstOrCreate([
            'name' => 'John Doe',
            'patient_code' => 'P001',
            'birth_date' => '1990-01-01',
            'gender' => 'Male',
        ]);
        
    }
}
