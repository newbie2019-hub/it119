<?php

namespace Tests\Unit;

use App\Models\Book;
use App\Models\BorrowedBook;
use App\Models\Category;
use App\Models\Patron;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BorrowedRouteandApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_store_borrowed_book()
    {
        $category = Category::create(['category' => 'Sci-fi']);
        $patron = Patron::factory()->create();
        $book = Book::factory(['category_id' => $category->id])->create();
        $borrowed = BorrowedBook::make(['copies' => 12, 'book_id' => $book->id, 'patron_id' => $patron->id]);

        $this->call('POST', '/api/borrowedbook', $borrowed->toArray())->assertSuccessful();
        $this->assertDatabaseHas('borrowed_books', $borrowed->toArray());
    }

    public function test_can_get_all_borrowed()
    {
        $this->call('GET', '/api/borrowedbook')->assertSuccessful();
    }

    public function test_can_get_specific_borrowed()
    {
        $category = Category::create(['category' => 'Biography']);
        $patron = Patron::factory()->create();
        $book = Book::factory(['category_id' => $category->id])->create();
        $borrowed = BorrowedBook::create(['copies' => 12, 'book_id' => $book->id, 'patron_id' => $patron->id]);

        $this->call('GET', '/api/borrowedbook/'.$borrowed->id)
              ->assertJsonFragment($borrowed->toArray());
    }
}
