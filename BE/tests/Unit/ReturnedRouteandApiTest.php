<?php

namespace Tests\Unit;

use App\Models\Book;
use App\Models\BorrowedBook;
use App\Models\Category;
use App\Models\Patron;
use App\Models\ReturnedBook;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReturnedRouteandApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_store_returned_book()
    {
        $category = Category::create(['category' => 'Sci-fi']);
        $patron = Patron::factory()->create();
        $book = Book::factory(['category_id' => $category->id])->create();
        
        $borrowed = BorrowedBook::create(['copies' => 12, 'book_id' => $book->id, 'patron_id' => $patron->id]);
        $returned = ReturnedBook::create(['copies' => 12, 'book_id' => $book->id, 'patron_id' => $patron->id]);

        $this->call('POST', '/api/returnedbook', $returned->toArray());
        $this->assertDatabaseHas('returned_books', $returned->toArray());
    }

    public function test_can_get_all_returned()
    {
        $this->call('GET', '/api/returnedbook')->assertSuccessful();
    }

    public function test_can_get_specific_borrowed()
    {
        $category = Category::create(['category' => 'Biography']);
        $patron = Patron::factory()->create();
        $book = Book::factory(['category_id' => $category->id])->create();
        $returned = ReturnedBook::create(['copies' => 12, 'book_id' => $book->id, 'patron_id' => $patron->id]);

        $this->call('GET', '/api/returnedbook/'.$returned->id)
              ->assertJsonFragment($returned->toArray());
    }
}
