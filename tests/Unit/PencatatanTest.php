<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PencatatanTest extends TestCase
{
     /**
     * A basic unit test example.
     *
     * @return void
     */

     public function test_create_pencatatanAyam()
     {
         $response = $this->post('/pencatatanAyam',[
             'waktu' => 'Pagi',
             'kolom_id' => '01',
             'produktifitas' => 'Bertelur',
             'kondisi' => 'Sehat',
             'jumlah_telur' => '2',
         ]);
 
         $response->assertStatus(302);
     }
     public function test_edit_pencatatanAyam()
     {
         $id = '1';
         $response = $this->put('/pencatatanAyam' . '/' . $id,[
            'waktu' => 'Pagi',
            'kolom_id' => '01',
            'produktifitas' => 'Bertelur',
            'kondisi' => 'Sehat',
            'jumlah_telur' => '2',
         ]);
 
         $response->assertStatus(302);
     }
 
     public function test_delete_pencatatanAyam()
     {
         $id = '1';
         $response = $this->delete('/pencatatanAyam' . '/' . $id);
 
         $response->assertStatus(302);
     }
}
