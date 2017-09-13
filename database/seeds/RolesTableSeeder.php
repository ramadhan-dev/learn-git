<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ROLES TABLE
        DB::table('roles')->insert([
            'name' => 'admin'
        ]);

        DB::table('roles')->insert([
            'name' => 'pimpinan'
        ]);

        DB::table('roles')->insert([
            'name' => 'front'
        ]);

        DB::table('roles')->insert([
            'name' => 'back'
        ]);
         DB::table('roles')->insert([
            'name' => 'pelayanan'
        ]);
          DB::table('roles')->insert([
            'name' => 'perizinan'
        ]);

        // KATEGORIS TABLE
        DB::table('kategoris')->insert([
            'nama' => 'SIUP - Surat Izin Usaha Perdagangan'
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'TDP - Tanda Daftar Perusahaan'
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'HO - Izin Gangguan'
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'IMB - Izin Mendirikan Bangunan'
        ]);

        // IZINS TABLE
        DB::table('izins')->insert([
            'jenis' => 'izin pertama',
            'kategori_id' => 1,
        ]);

        DB::table('izins')->insert([
            'jenis' => 'izin kedua',
            'kategori_id' => 2,
        ]);

        DB::table('izins')->insert([
            'jenis' => 'izin ketiga',
            'kategori_id' => 3,
        ]);

        DB::table('izins')->insert([
            'jenis' => 'izin keempat',
            'kategori_id' => 4,
        ]);

        // PERSYARATAN TABLE

        DB::table('persyaratans')->insert([
            'deskripsi' => 'FCKTP',
            'keterangan' => 'Foto Copy',
            'status' => 1,
        ]);

        DB::table('persyaratans')->insert([
            'deskripsi' => 'FCSIM',
            'keterangan' => 'Foto Copy',
            'status' => 1,
        ]);

        DB::table('persyaratans')->insert([
            'deskripsi' => 'FCSTNK',
            'keterangan' => 'Foto Copy',
            'status' => 1,
        ]);

        DB::table('persyaratans')->insert([
            'deskripsi' => 'FCBPKB',
            'keterangan' => 'Foto Copy',
            'status' => 1,
        ]);
    }
}
