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
    public function test_validation_for_book_post_request()
    {
        $this->call('POST', 'api/books')->assertStatus(422);
    }

    public function test_validation_for_book_put_request()
    {
        $this->call('PUT', 'api/books/2')->assertStatus(422);
    }

    public function test_validation_for_patron_post_request()
    {
        $this->call('POST', 'api/patrons')->assertStatus(422);

    }
    public function test_validation_for_patron_put_request()
    {
        $this->call('PUT', 'api/patrons/2')->assertStatus(422);
    }

    public function test_validation_for_borrowed_book_post_request()
    {
        $this->call('POST', 'api/borrowedbook')->assertStatus(422);
    }

    public function test_validation_for_returned_book_post_request()
    {
        $this->call('POST', 'api/returnedbook')->assertStatus(422);
    }

}
