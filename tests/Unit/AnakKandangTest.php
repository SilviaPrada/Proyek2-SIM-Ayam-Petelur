<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AnakKandangTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_anakKandang()
    {
        $response = $this->post('/anakKandang/create',[
            'nama_anak_kandang' => 'Silvia Prada Aprilia',
            'no_ktp' => '350711490020004',
            'jk' => 'P',
            'telp' => '085706377366',
            'tmp_lahir' => 'Malang',
            'tgl_lahir' => '2002-04-09',
            'baterai_id' => '1',
            'photo' => new \Illuminate\Http\UploadedFile(public_path('assets/img/gumboro.png'), 'doc.pdf', null, null, true),
        ]);

        $response->assertStatus(405);
    }
    public function test_edit_anakKandang()
    {
        $id = '1';
        $response = $this->put('/anakKandang' . '/' . $id,[
            'nama_anak_kandang' => 'Shine Devi Oktaviana',
            'no_ktp' => '35071149006758',
            'jk' => 'P',
            'telp' => '085706377567',
            'tmp_lahir' => 'Malang',
            'tgl_lahir' => '2002-10-01',
            'baterai_id' => '2',
            'photo' => new \Illuminate\Http\UploadedFile(public_path('assets/img/logo.png'), 'doc.pdf', null, null, true),
        ]);

        $response->assertStatus(500);
    }

    public function test_delete_anakKandang()
    {
        $id = '1';
        $response = $this->delete('/anakKandang' . '/' . $id);

        $response->assertStatus(500);
    }
}
