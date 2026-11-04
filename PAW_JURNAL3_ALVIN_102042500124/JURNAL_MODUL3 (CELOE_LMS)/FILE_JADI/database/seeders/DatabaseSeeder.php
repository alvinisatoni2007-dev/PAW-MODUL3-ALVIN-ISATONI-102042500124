<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen,dan nomor induk.
        User::updateOrCreate(
            ['email' => 'budi.santoso@celoe.test'],
            [
                'name' => 'Dr. Ir. Budi Santoso, M.T.',
                'password' => Hash::make('password123'),
                'role' => 'dosen',
                'nomor_induk' => '198001012005011001',
            ]
        );

        // Mahasiswa demo (opsional, untuk uji coba sisi mahasiswa)
        User::updateOrCreate(
            ['email' => 'mahasiswa@celoe.test'],
            [
                'name' => 'Andi Pratama',
                'password' => Hash::make('password123'),
                'role' => 'mahasiswa',
                'nomor_induk' => '1301230001',
            ]
        );
    }
}
