<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Data Users (UUID)
        DB::table('users')->insert([
            [
                'id_user' => '01m47q4zasyy1yhx7qxeqvkhzy',
                'name' => 'Nabil',
                'username' => 'nabil',
                'password' => '$2y$12$AD047PXA3AgdxmIf3zO10eogPmckFZDNrduHLhKdRKPnRHUfvuiXO',
                'role' => 'admin',
                'created_at' => '2026-10-05 20:22:03',
                'updated_at' => '2026-10-05 20:22:03',
            ],
            [
                'id_user' => '01m47q4zj0sxphskv7skk48d6y',
                'name' => 'Aliffuady',
                'username' => 'aliffuady',
                'password' => '$2y$12$wvkRrxvjRgJO8l8Xg2HqPOL6PYVeH9pitBEx4m1ZLzBUwX32dUGCO',
                'role' => 'admin',
                'created_at' => '2026-10-05 20:22:04',
                'updated_at' => '2026-10-05 20:22:04',
            ],
        ]);

        // 2. Data Profil Sekolah (UUID)
        DB::table('profil_sekolah')->insert([
            [
                'id_profil_sekolah' => '7b7544d3-a56c-423b-a10c-418522631214',
                'nama_sekolah' => 'SMAN 1 SALAWU',
                'kepala_sekolah' => 'Drs.Alexander Nabil Einstein',
                'foto' => 'profil/gf9zEIkwSwPHuWcL49dWgj9hrISZ99dBuykgfcvy.jpg',
                'logo' => 'profil/e8TRZbyqVLgGkuE7grGyNSKNaf4EE025fws04i93.png',
                'npsn' => '62451',
                'alamat' => 'Jl. Raya Salawu No. 56, Desa Margalaksana, Kecamatan Salawu, Kabupaten Tasikmalaya, Jawa Barat 46471',
                'kontak' => '097654321234',
                'visi_misi' => 'Menjadi lebih baik',
                'tahun_berdiri' => '1980',
                'deskripsi' => 'Sekolah Menengah Atas',
                'created_at' => '2026-10-05 20:24:27',
                'updated_at' => '2026-10-05 20:24:27',
            ],
        ]);

        // 3. Data Guru (UUID)
        DB::table('gurus')->insert([
            [
                'id' => '9b8f2d1e-3a4b-4c5d-8e7f-1a2b3c4d5e6f',
                'nama_guru' => 'Yayan Hidayat',
                'nip' => '123455432112345',
                'mapel' => 'PJOK',
                'foto' => 'guru/OPxhMsyGZNTqWC5690u61nOj0Y2h2MRzAGzml9tt.jpg',
                'created_at' => '2026-10-05 20:25:24',
                'updated_at' => '2026-10-05 20:25:24',
            ],
            [
                'id' => '1a2b3c4d-5e6f-7a8b-9c0d-1e2f3a4b5c6d',
                'nama_guru' => 'Kamil',
                'nip' => '123456789012345',
                'mapel' => 'Rpl',
                'foto' => 'guru/naNaepZYVSEb7se5ERMBLNTqpFszim6zuIi7ICry.jpg',
                'created_at' => '2026-10-05 20:26:00',
                'updated_at' => '2026-10-05 20:26:00',
            ],
            [
                'id' => '2b3c4d5e-6f7a-8b9c-0d1e-2f3a4b5c6d7e',
                'nama_guru' => 'Alamsyah Firdaus',
                'nip' => '098760987609876',
                'mapel' => 'Perangkat Lunak',
                'foto' => 'guru/uJE3nJZF3pgQZBNoqJamF46uQPy6ZGYRFWqDRQmT.jpg',
                'created_at' => '2026-10-05 20:26:33',
                'updated_at' => '2026-10-05 20:26:33',
            ],
            [
                'id' => '3c4d5e6f-7a8b-9c0d-1e2f-3a4b5c6d7e8f',
                'nama_guru' => 'Nabil Aliffuady SD',
                'nip' => '456704567812390',
                'mapel' => 'Matematika',
                'foto' => 'guru/DVStxjxaNve9H8g26ZYE4mpMMA79F0BGEsU77I4A.jpg',
                'created_at' => '2026-10-05 20:27:20',
                'updated_at' => '2026-10-05 20:27:20',
            ],
            [
                'id' => '4d5e6f7a-8b9c-0d1e-2f3a-4b5c6d7e8f9a',
                'nama_guru' => 'Reski Ramadhan',
                'nip' => '098765432112345',
                'mapel' => 'PAI',
                'foto' => 'guru/cReEk9TbocDNW1SWLcyjfz64GyPljtdQrcKbS8b5.jpg',
                'created_at' => '2026-10-05 20:27:53',
                'updated_at' => '2026-10-05 20:27:53',
            ],
        ]);

        // 4. Data Siswa (UUID)
        DB::table('siswas')->insert([
            [
                'id' => '5e6f7a8b-9c0d-1e2f-3a4b-5c6d7e8f9a0b',
                'nisn' => '1234567890',
                'nama_siswa' => 'Jessica',
                'jk' => 'Perempuan',
                'tahun_masuk' => '2023',
                'created_at' => '2026-10-05 20:28:14',
                'updated_at' => '2026-10-05 20:28:14',
            ],
            [
                'id' => '6f7a8b9c-0d1e-2f3a-4b5c-6d7e8f9a0b1c',
                'nisn' => '0912873465',
                'nama_siswa' => 'Ruby',
                'jk' => 'Perempuan',
                'tahun_masuk' => '2023',
                'created_at' => '2026-10-05 20:28:26',
                'updated_at' => '2026-10-05 20:28:26',
            ],
            [
                'id' => '7a8b9c0d-1e2f-3a4b-5c6d-7e8f9a0b1c2d',
                'nisn' => '5674382901',
                'nama_siswa' => 'Alex',
                'jk' => 'Laki-laki',
                'tahun_masuk' => '2023',
                'created_at' => '2026-10-05 20:28:40',
                'updated_at' => '2026-10-05 20:28:40',
            ],
            [
                'id' => '8b9c0d1e-2f3a-4b5c-6d7e-8f9a0b1c2d3e',
                'nisn' => '0987654321',
                'nama_siswa' => 'Nabil',
                'jk' => 'Laki-laki',
                'tahun_masuk' => '2023',
                'created_at' => '2026-10-05 20:28:51',
                'updated_at' => '2026-10-05 20:28:51',
            ],
            [
                'id' => '9c0d1e2f-3a4b-5c6d-7e8f-9a0b1c2d3e4f',
                'nisn' => '0129384746',
                'nama_siswa' => 'Bilby',
                'jk' => 'Laki-laki',
                'tahun_masuk' => '2023',
                'created_at' => '2026-10-05 20:29:04',
                'updated_at' => '2026-10-05 20:29:04',
            ],
        ]);

        // 5. Data Ekstrakulikuler (UUID)
        DB::table('ekstrakulikulers')->insert([
            [
                'id_ekstrakulikuler' => '01a10f7a-90eb-73ad-807f-c2b7764212cc',
                'nama_eskul' => 'Futsal',
                'pembina' => 'Nabil',
                'jadwal' => 'Selasa, 12:30',
                'deskripsi' => 'gfds',
                'gambar' => 'ekstrakulikuler/B9tcrujgBYzx8SOGCKpFRlKfqmnO8GMa905KKmBq.jpg',
                'created_at' => '2026-10-05 20:30:53',
                'updated_at' => '2026-10-05 20:30:53',
            ],
            [
                'id_ekstrakulikuler' => '01a10f7a-ccc2-73e0-9bfa-e42cfaffd26c',
                'nama_eskul' => 'Badminton',
                'pembina' => 'obyy',
                'jadwal' => 'Sabtu, 15:00',
                'deskripsi' => 'hggfds',
                'gambar' => 'ekstrakulikuler/akE7AWJ7sC2g58pktBcWVLhxBscLrsmjBOpSUuDI.jpg',
                'created_at' => '2026-10-05 20:31:08',
                'updated_at' => '2026-10-05 20:31:08',
            ],
            [
                'id_ekstrakulikuler' => '01a10f7b-0960-71c2-af67-fad9374e828d',
                'nama_eskul' => 'Renang',
                'pembina' => 'Lutpi',
                'jadwal' => 'Sabtu, 15:00',
                'deskripsi' => 'dvdsvds',
                'gambar' => 'ekstrakulikuler/PFgIIlJaKxgjGIxeLWjp2iDztp2abpuMyC1wI0WS.jpg',
                'created_at' => '2026-10-05 20:31:24',
                'updated_at' => '2026-10-05 20:31:24',
            ],
            [
                'id_ekstrakulikuler' => '01a10f7b-4888-73e4-b52a-b7873b5a688b',
                'nama_eskul' => 'Voly',
                'pembina' => 'Bayu',
                'jadwal' => 'Sabtu, 15:00',
                'deskripsi' => 'trfes',
                'gambar' => 'ekstrakulikuler/1s4lncpEkM4a3ULpcEYJV5V9wnoODsXVnBDwrfY0.jpg',
                'created_at' => '2026-10-05 20:31:40',
                'updated_at' => '2026-10-05 20:31:40',
            ],
            [
                'id_ekstrakulikuler' => '01a10f7b-88fa-732f-a362-ba5f8f7f2101',
                'nama_eskul' => 'Papan Climbing',
                'pembina' => 'Rais',
                'jadwal' => 'Jumat, 14:50',
                'deskripsi' => 'gfdsddvfbg',
                'gambar' => 'ekstrakulikuler/pOFHKNx0CQkR8cmsg8HPnulFRvf0qc3lv2i4rE6Y.jpg',
                'created_at' => '2026-10-05 20:31:56',
                'updated_at' => '2026-10-05 20:31:56',
            ],
        ]);

        // 6. Data Galeri (UUID)
        DB::table('galeris')->insert([
            [
                'id_galeri' => 'a1b2c3d4-e5f6-7a8b-9c0d-1e2f3a4b5c6d',
                'judul' => 'pesantren',
                'keterangan' => 'gfdvc',
                'file' => 'galeri/zvrAk5KGG5gB8wEmWSYVeOpY82kwFCYwOSAHqxuY.png',
                'kategori' => 'foto',
                'tanggal' => '2026-10-06',
                'created_at' => '2026-10-05 20:32:21',
                'updated_at' => '2026-10-05 20:32:21',
            ],
            [
                'id_galeri' => 'b2c3d4e5-f6a7-8b9c-0d1e-2f3a4b5c6d7e',
                'judul' => 'MPLS',
                'keterangan' => 'jmhngbfvd',
                'file' => 'galeri/EDPyA4TTrOw5iYg6X0gtPbMRF1vWmh8GRUTRztr3.jpg',
                'kategori' => 'foto',
                'tanggal' => '2026-10-06',
                'created_at' => '2026-10-05 20:32:35',
                'updated_at' => '2026-10-05 20:32:35',
            ],
            [
                'id_galeri' => 'c3d4e5f6-a7b8-9c0d-1e2f-3a4b5c6d7e8f',
                'judul' => 'Maulid Nabi',
                'keterangan' => 'mhngbfvd',
                'file' => 'galeri/lfHHy71rzYEebpYihxeYmOOd38fCFM3chbalw1cK.jpg',
                'kategori' => 'foto',
                'tanggal' => '2026-10-06',
                'created_at' => '2026-10-05 20:32:50',
                'updated_at' => '2026-10-05 20:32:50',
            ],
            [
                'id_galeri' => 'd4e5f6a7-b8c9-0d1e-2f3a-4b5c6d7e8f9a',
                'judul' => 'Rawr',
                'keterangan' => 'tgrfeda',
                'file' => 'galeri/w87OwsZxyHq8NkHOWkujQ3BeoQMbOPrbR7JGe1v3.jpg',
                'kategori' => 'foto',
                'tanggal' => '2026-10-06',
                'created_at' => '2026-10-05 20:33:04',
                'updated_at' => '2026-10-05 20:33:04',
            ],
            [
                'id_galeri' => 'e5f6a7b8-c9d0-1e2f-3a4b-5c6d7e8f9a0b',
                'judul' => 'Lomba 17 Agustus',
                'keterangan' => 'yhaz',
                'file' => 'galeri/kheiKldrecpUP1EcFTM0XozaG9LKYipW0zpw0UAY.png',
                'kategori' => 'foto',
                'tanggal' => '2026-10-06',
                'created_at' => '2026-10-05 20:33:19',
                'updated_at' => '2026-10-05 20:33:19',
            ],
        ]);

        DB::table('berita')->insert([
            [
                'id_berita' => '3bc2d09a-14f4-499b-9858-541996f635eb',
                'judul' => 'MPLS',
                'slug' => Str::slug('MPLS'),
                'isi' => 'rggsfds',
                'tanggal' => '2026-10-06',
                'gambar' => 'berita/4lQvcMAu7jcdmrTEbhq8JRjgBnXb4Ke0lZOxtrEG.png',
                'id_user' => '01m47q4zasyy1yhx7qxeqvkhzy',
                'created_at' => '2026-10-05 20:33:30',
                'updated_at' => '2026-10-05 20:33:30',
            ],
            [
                'id_berita' => '4ed5d97b-6f6b-472b-904e-363076dd0384',
                'judul' => 'Lomba 17 Agustus',
                'slug' => Str::slug('Lomba 17 Agustus'),
                'isi' => 'tgergregr',
                'tanggal' => '2026-10-06',
                'gambar' => 'berita/GxxPSB6sQvN8lWxem8RV1MCAkH1qUnDAkfaiGTCn.png',
                'id_user' => '01m47q4zasyy1yhx7qxeqvkhzy',
                'created_at' => '2026-10-05 20:33:40',
                'updated_at' => '2026-10-05 20:33:40',
            ],
            [
                'id_berita' => '65a96321-b083-4084-9bbe-9afab5cde0e4',
                'judul' => 'Maulid Nabi',
                'slug' => Str::slug('Maulid Nabi'),
                'isi' => 'fdgdgdf',
                'tanggal' => '2026-10-06',
                'gambar' => 'berita/hF0zgqiVtAk9AenN77FWY3yw38FSF2BL0W17ogYd.png',
                'id_user' => '01m47q4zasyy1yhx7qxeqvkhzy',
                'created_at' => '2026-10-05 20:33:50',
                'updated_at' => '2026-10-05 20:33:50',
            ],
            [
                'id_berita' => 'a64695f9-886c-4608-8868-7de857c15b83',
                'judul' => 'pesantren',
                'slug' => Str::slug('pesantren'),
                'isi' => 'fgrg',
                'tanggal' => '2026-10-06',
                'gambar' => 'berita/fOEJSJ1mV8dPp9DCFtHSHkuudvSEgpAWvhJmUtCu.jpg',
                'id_user' => '01m47q4zasyy1yhx7qxeqvkhzy',
                'created_at' => '2026-10-05 20:34:00',
                'updated_at' => '2026-10-05 20:34:00',
            ],
            [
                'id_berita' => 'dc40cb7d-6aad-4c41-898a-aa6754602271',
                'judul' => 'Lomba 17 Agustus',
                'slug' => Str::slug('Lomba 17 Agustus 2'),
                'isi' => 'tgergregr',
                'tanggal' => '2026-10-06',
                'gambar' => 'berita/WhGhcfevs5rc1LpviB72ygqFYT5vnalJSVVEy1TS.png',
                'id_user' => '01m47q4zasyy1yhx7qxeqvkhzy',
                'created_at' => '2026-10-05 20:34:10',
                'updated_at' => '2026-10-05 20:34:10',
            ],
        ]);
    }
}
