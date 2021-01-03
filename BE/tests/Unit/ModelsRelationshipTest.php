<?php

namespace Tests\Unit;

use App\Models\Book;
use App\Models\BorrowedBook;
use App\Models\Category;
use App\Models\Patron;
use App\Models\ReturnedBook;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ModelRelationshipTest extends TestCase
{
   
  
    /**
     * A basic unit test example.
     *
     * @return void
     */
    
    public function test_a_book_belongs_to_category()
    {
        $category = Category::create(['category' => 'Fiction']);
        $book = Book::factory()->create(['category_id' => $category->id]);

        $this->assertInstanceOf(Category::class, $book->category);
        
    }

    public function test_a_category_has_many_books()
    {
        $category = Category::create(['category' => 'Horror']);
        $book = Book::factory()->create(['category_id' => $category->id]);

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $category->books);
    }


    public function test_a_book_has_many_borrowed()
    {
        $category = Category::create(['category' => 'Novel']);
        $book = Book::factory()->create(['category_id' => $category->id]);
        $patron = Patron::factory()->create();
        $borrowedbook = BorrowedBook::create([
             'patron_id' => $patron->id,
             'copies' => rand(5, 20),
             'book_id' => $book->id
        ]);

        $this->assertTrue($book->borrowed->contains($borrowedbook));
    }

    public function test_a_book_has_many_returned()
    {
        $category = Category::create(['category' => 'Biography']);
        $book = Book::factory()->create(['category_id' => $category->id]);
        $patron = Patron::factory()->create();
        $returnedbook = ReturnedBook::create([
             'patron_id' => $patron->id,
             'copies' => rand(5, 20),
             'book_id' => $book->id
        ]);

        $this->assertTrue($book->returned->contains($returnedbook));
    }

    public function test_a_borrowed_book_belongs_to_book()
    {
        $category = Category::create(['category' => 'Science']);
        $book = Book::factory()->create(['category_id' => $category->id]);
        $patron = Patron::factory()->create();
        $borrowedbook = BorrowedBook::create([
             'patron_id' => $patron->id,
             'copies' => rand(5, 20),
             'book_id' => $book->id
        ]);

        $this->assertInstanceOf(Book::class, $borrowedbook->book);
    }

    public function test_a_borrowed_book_belongs_to_patron()
    {
        $category = Category::create(['category' => 'Science']);
        $book = Book::factory()->create(['category_id' => $category->id]);
        $patron = Patron::factory()->create();
        $borrowedbook = BorrowedBook::create([
             'patron_id' => $patron->id,
             'copies' => rand(5, 20),
             'book_id' => $book->id
        ]);

        $this->assertInstanceOf(Patron::class, $borrowedbook->patron);
    }
    
    public function test_a_returned_book_belongs_to_book()
    {
        $category = Category::create(['category' => 'Science']);
        $book = Book::factory()->create(['category_id' => $category->id]);
        $patron = Patron::factory()->create();
        $returnedbook = ReturnedBook::create([
             'patron_id' => $patron->id,
             'copies' => rand(5, 20),
             'book_id' => $book->id
        ]);

        $this->assertInstanceOf(Book::class, $returnedbook->book);
    }

    public function test_a_returned_book_belongs_to_patron()
    {
        $category = Category::create(['category' => 'Science']);
        $book = Book::factory()->create(['category_id' => $category->id]);
        $patron = Patron::factory()->create();
        $returnedbook = ReturnedBook::create([
             'patron_id' => $patron->id,
             'copies' => rand(5, 20),
             'book_id' => $book->id
        ]);

        $this->assertInstanceOf(Patron::class, $returnedbook->patron);
    }

    public function test_a_patron_has_many_borrowed()
    {
        $category = Category::create(['category' => 'Biography']);
        $book = Book::factory()->create(['category_id' => $category->id]);
        $patron = Patron::factory()->create();
        $borrowedbook = BorrowedBook::create([
             'patron_id' => $patron->id,
             'copies' => rand(5, 20),
             'book_id' => $book->id
        ]);

        $this->assertTrue($patron->borrowedbook->contains($borrowedbook));
    }

     public function test_a_patron_has_many_returned()
     {
         $category = Category::create(['category' => 'Biography']);
         $book = Book::factory()->create(['category_id' => $category->id]);
         $patron = Patron::factory()->create();
         $returnedbook = ReturnedBook::create([
              'patron_id' => $patron->id,
              'copies' => rand(5, 20),
              'book_id' => $book->id
         ]);
 
         $this->assertTrue($patron->returnedbook->contains($returnedbook));
     }
}
