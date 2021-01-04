<?php

namespace Tests\Unit;

use Tests\TestCase;

class ValidationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_validation_for_book()
    {
        $this->call('POST', 'api/books')->assertStatus(422);
    }
    public function test_validation_for_patron()
    {
        $this->call('POST', 'api/patrons')->assertStatus(422);
    }
    public function test_validation_for_borrowed_book()
    {
        $this->call('POST', 'api/borrowedbook')->assertStatus(422);
    }
    public function test_validation_for_returned_book()
    {
        $this->call('POST', 'api/returnedbook')->assertStatus(422);
    }
}
