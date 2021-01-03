<?php

namespace Tests\Unit;

use App\Models\Patron;
use Tests\TestCase;

class PatronRouteandApiTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_access_get_all_patron()
    {
        $this->call('GET', 'api/patrons')->assertStatus(200);
    }

    public function test_can_create_patron()
    {
        $patron = Patron::factory()->make();
        
        $this->call('POST', '/api/patrons', $patron->toArray())->assertSuccessful();
        $this->assertDatabaseHas('patrons', $patron->toArray());
    }

    public function test_can_update_patron()
    {
        $patron = Patron::factory()->create();
        $data = [
            'last_name' => 'Sample',
            'first_name' => 'Patron',
            'middle_name' => 'Test',
            'email' => 'sabayyvan2018@gmail.com'
        ];

        $this->call('PUT', '/api/patrons/'.$patron->id, $data);
        $this->assertDatabaseHas('patrons', $data);
    }

    public function test_can_delete_patron()
    {
        $patron = Patron::factory()->make();
        
        $this->call('DELETE', 'api/patrons/'.$patron->id);
        $this->assertDatabaseMissing('patrons', $patron->toArray());
    }

    public function test_can_show_specific_patron()
    {
        $patron = Patron::factory()->create();
        
        $this->call('GET', '/api/patrons/'.$patron->id)->assertJson($patron->toArray());
    }
}
