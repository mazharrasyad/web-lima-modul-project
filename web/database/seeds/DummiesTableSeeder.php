<?php

use Illuminate\Database\Seeder;

class DummiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semesters = [
            ['nama' => '20191'],
            ['nama' => '20192'],
            ['nama' => '20201'],
            ['nama' => '20202'],
            ['nama' => '20211'],
            ['nama' => '20212'],
            ['nama' => '20221'],
            ['nama' => '20222'],
        ];

        DB::table('semester')->insert($semesters);

        $scrummasters = [
            ['nama' => 'Atmam'],
            ['nama' => 'Alfian'],
            ['nama' => 'Anta'],
            ['nama' => 'Syaiful'],
        ];

        DB::table('scrummaster')->insert($scrummasters);

        $prodis = [
            ['nama' => 'Teknik Informatika'],
            ['nama' => 'Sistem Informasi'],
        ];

        DB::table('prodi')->insert($prodis);

        $perans = [
            ['nama' => 'Web Developer'],
            ['nama' => 'Android Developer'],
            ['nama' => 'System Analysis'],
            ['nama' => 'Project Manager'],
            ['nama' => 'Akuntan'],
            ['nama' => 'Data Analysis'],
            ['nama' => 'Web Design'],
            ['nama' => 'Android Design'],
        ];

        DB::table('peran')->insert($perans);

        $mahasiswas = [
            ['nim' => '0110217001', 'nama' => 'Muhammad Adil Nashrul Haq'],
            ['nim' => '0110217002', 'nama' => 'Muhammad Akbar'],
            ['nim' => '0110117003', 'nama' => 'Tryas Tono'],
            ['nim' => '0110117004', 'nama' => 'Syafitri Adjizah'],
        ];

        DB::table('mahasiswa')->insert($mahasiswas);

        $tims = [
            ['nama' => 'Kelompok 1', 'semester_id' => 1, 'prodi_id' => 1, 'final_skor' => 100, 'created_by' => 'Atmam'],
            ['nama' => 'Kelompok 2', 'semester_id' => 1, 'prodi_id' => 2, 'final_skor' => 90, 'created_by' => 'Syaiful'],
            ['nama' => 'Kelompok 3', 'semester_id' => 2, 'prodi_id' => 2, 'final_skor' => 80, 'created_by' => 'Anta'],
            ['nama' => 'Kelompok 4', 'semester_id' => 3, 'prodi_id' => 1, 'final_skor' => 70, 'created_by' => 'Alfian'],
        ];

        DB::table('tim')->insert($tims);                 

        $membertims = [[
            'tim_id' => 1, 
            'mahasiswa_id' => 1, 
            'peran_id' => 1, 
            'tanggung_jawab' => 'Membuat Backend Website', 
            'final_skor' => 100, 
            'created_by' => 'Atmam'
            ],[
            'tim_id' => 1, 
            'mahasiswa_id' => 2, 
            'peran_id' => 2, 
            'tanggung_jawab' => 'Membuat Frontend Android', 
            'final_skor' => 95, 
            'created_by' => 'Alfian'
            ],[
            'tim_id' => 2, 
            'mahasiswa_id' => 3, 
            'peran_id' => 3, 
            'tanggung_jawab' => 'Membuat Use Case', 
            'final_skor' => 90, 
            'created_by' => 'Anta'
            ],[
            'tim_id' => 2, 
            'mahasiswa_id' => 4, 
            'peran_id' => 4, 
            'tanggung_jawab' => 'Mengkoordinasikan setiap member tim', 
            'final_skor' => 85, 
            'created_by' => 'Syaiful'
            ],
        ];

        DB::table('membertim')->insert($membertims);

        $projects = [[
            'nama' => 'Manajemen Proyek', 
            'deskripsi' => 'Buatlah website untuk memanajemen proyek',
            'tanggal_mulai' => '2019-10-01', 
            'tanggal_akhir' => '2019-10-31',
            'jumlah_sprint' => 4,
            'budget' => 1000000,
            'status' => 'Baru',
            'persen' => 0,
            'semester_id' => 1,             
            'scrummaster_id' => 1,
            'tim_id' => null,
            'created_by' => 'Sirojul Munir', 
            ],[
            'nama' => 'Pemrograman Mobile', 
            'deskripsi' => 'Buatlah aplikasi android untuk menyimpan materi pemrograman mobile',
            'tanggal_mulai' => '2019-10-01', 
            'tanggal_akhir' => '2019-11-30',
            'jumlah_sprint' => 8,
            'budget' => 2000000,
            'status' => 'Proses',
            'persen' => 25,
            'semester_id' => 2,             
            'scrummaster_id' => 2,
            'tim_id' => 2,
            'created_by' => 'Hilmy Abidzar', 
            ],[
            'nama' => 'OOAD', 
            'deskripsi' => 'Buatlah aplikasi website untuk menyimpan materi OOAD',
            'tanggal_mulai' => '2019-10-01', 
            'tanggal_akhir' => '2019-12-31',
            'jumlah_sprint' => 12,
            'budget' => 3000000,
            'status' => 'Selesai',
            'persen' => 100,
            'semester_id' => 3,             
            'scrummaster_id' => 3,
            'tim_id' => 3,
            'created_by' => 'Nasrul', 
            ],
        ];

        DB::table('project')->insert($projects);

        $mvps = [
            ['project_id' => 1, 'sprint' => 2, 'tanggal_rilis' => '2019-10-14', 'deskripsi' => 'Fitur Login dapat digunakan'],
            ['project_id' => 2, 'sprint' => 4, 'tanggal_rilis' => '2019-10-31', 'deskripsi' => 'Fitur Login dan CRUD dapat digunakan'],
            ['project_id' => 3, 'sprint' => 6, 'tanggal_rilis' => '2019-11-30', 'deskripsi' => 'Fitur Login dan CRUD pada website dan android dapat digunakan'],
        ];

        DB::table('mvp')->insert($mvps);  
    }
}
