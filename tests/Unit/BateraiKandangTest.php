<?php
namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BateraiKandangTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_add_baterai()
    {
        $id = 1;
        $response = $this->post('/bateraiKandang',[
            'nama_baterai' => 'Baterai B',
            'total_ayam'   => 80
        ]);
        $response->assertStatus(302);
    }

    public function test_edit_baterai()
    {
        $id = '1';
        $response = $this->put('/bateraiKandang' . '/' . $id,[
            'nama_baterai' => 'Baterai C',
            'total_ayam'   => 82,
        ]);

        $response->assertStatus(302);
    }

    public function test_delete_baterai()
    {
        $id = '1';
        $response = $this->delete('/bateraiKandang' . '/' . $id);

        $response->assertStatus(302);
    }
}
