<?php

namespace Database\Seeders;

use App\Models\Vaccination;
use Illuminate\Database\Seeder;

class VaccinationSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            ['patient_name' => 'Althea Ramos', 'purok' => 'Purok 1', 'vaccine' => 'BCG', 'dose' => '1st dose', 'scheduled_at' => '2026-11-03', 'status' => 'Scheduled'],
            ['patient_name' => 'Noel Fernandez', 'purok' => 'Purok 2', 'vaccine' => 'Pentavalent', 'dose' => '2nd dose', 'scheduled_at' => '2026-10-15', 'status' => 'Done'],
            ['patient_name' => 'Jessa Molina', 'purok' => 'Purok 3', 'vaccine' => 'OPV', 'dose' => '1st dose', 'scheduled_at' => '2026-11-10', 'status' => 'Scheduled'],
            ['patient_name' => 'Rafael Torres', 'purok' => 'Purok 1', 'vaccine' => 'MMR', 'dose' => '1st dose', 'scheduled_at' => '2026-10-12', 'status' => 'Done'],
            ['patient_name' => 'Celia Navarro', 'purok' => 'Purok 4', 'vaccine' => 'Anti-Flu', 'dose' => 'Annual', 'scheduled_at' => '2026-10-20', 'status' => 'Overdue'],
            ['patient_name' => 'Elijah Salazar', 'purok' => 'Purok 2', 'vaccine' => 'Hepatitis B', 'dose' => '1st dose', 'scheduled_at' => '2026-08-07', 'status' => 'Done'],
            ['patient_name' => 'Mae Villanueva', 'purok' => 'Purok 3', 'vaccine' => 'OPV', 'dose' => 'Booster', 'scheduled_at' => '2026-11-18', 'status' => 'Scheduled'],
        ];

        foreach ($rows as $row) {
            Vaccination::create($row);
        }
    }
}
