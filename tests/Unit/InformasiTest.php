<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InformasiTest extends TestCase
{
     /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_createInfo()
    {
        $id = 2;
        $response = $this->post('/informasiTernak',[
            'nama_penyakit' => 'Gumboro',
            'keterangan'    => 'Penyakit gumboro atau Infectious bursal disease (IBD) adalah penyakit yang disebabkan oleh virus famili Birnaviridae. Virus ini menyebabkan ayam tampak lesu, sayap menggantung, dan kotoran menempel pada kloaka ayam.',
            'gejala'        => 'Gemetar, dehidrasi, bulu kusam dan berdiri',
            'pengobatan'    => 'Dalam pengobatannya, memberikan air gula merah atau Sorbitol selama 3 hari berturut-turut untuk membantu menaikkan stamina tubuh supaya ayam bisa beraktivitas makan dan minum kembali.',
        ]);
        $response->assertStatus(302);
    }

    public function test_edit_info()
    {
        $id = '1';
        $response = $this->put('/informasiTernak' . '/' . $id,[
            'nama_penyakit' => 'IBD'
        ]);

        $response->assertStatus(302);
    }

    public function test_delete_info()
    {
        $id = '1';
        $response = $this->delete('/informasiTernak' . '/' . $id);

        $response->assertStatus(302);
    }
}
