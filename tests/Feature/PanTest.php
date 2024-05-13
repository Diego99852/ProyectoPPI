<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;
use App\Models\Pan;

class PanTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test for creating a Pan record.
     *
     * @return void
     */
    public function test_create_pan_record()
    {
        $response = $this->get('/pan/create');
        $response->assertStatus(200);
        $data = [
            'nombre' => 'Pan de molde',
            'precio' => 2.50,
        ];
        $response = $this->post('/pan', $data);
        $response->assertRedirect('/Pan');
        $this->assertDatabaseHas('pans', $data);
    }

    /**
     * Test for updating a Pan record.
     *
     * @return void
     */
    public function test_update_pan_record()
    {
        $pan = Pan::factory()->create();
        $updatedData = [
            'nombre' => 'Pan integral',
            'precio' => 3.00,
        ];
        $response = $this->put("/pan/{$pan->id}", $updatedData);
        $response->assertRedirect('/Pan');
        $this->assertDatabaseHas('pans', $updatedData);
    }

    /**
     * Test for deleting a Pan record.
     *
     * @return void
     */
    public function test_delete_pan_record()
    {
        $pan = Pan::factory()->create();
        $response = $this->delete("/pan/{$pan->id}");
        $response->assertRedirect('/Pan');
        $this->assertDeleted($pan);
    }
}
