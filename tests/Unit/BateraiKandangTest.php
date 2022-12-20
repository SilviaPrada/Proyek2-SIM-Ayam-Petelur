<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

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
}
