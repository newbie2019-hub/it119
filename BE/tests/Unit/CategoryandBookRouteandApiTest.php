<?php

namespace Tests\Unit;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryandBookRouteandApiTest extends TestCase
{
 

    /**
     * A basic unit test example.
     *
     * @return void
     */
    
    public function test_can_get_categories()
    {
        $this->call('GET', 'api/categories')->assertStatus(200);
    }

    public function test_can_access_get_all_book(){
        $this->call('GET', 'api/books')->assertStatus(200);
    }

    public function test_can_create_book()
    {
        $category = Category::create(['category' => 'Programming']);
        $book = Book::factory()->make(['category_id' => $category->id]);

        $this->call('POST', '/api/books', $book->toArray());
        $this->assertDatabaseHas('books', $book->toArray());
    }

    public function test_can_update_book()
    {
        $category = Category::create(['category' => 'Programming - 2']);
        $book = Book::factory()->create(['category_id' => $category->id]);
        $data = ['name' => 'PHP Basics - Updated', 'copies' => 15, 'category_id' => $category->id, 'author' => 'Sabay'];
        
        $expected_result = ['message' => 'Book updated successfully!'];
        $this->call('PUT', '/api/books/'.$book->id, $data)->assertSee($expected_result);
    }

    public function test_can_delete_book()
    {
        $category = Category::create(['category' => 'Programming - 2']);
        $book = Book::factory()->create(['category_id' => $category->id]);

        $this->call('DELETE', '/api/books/'.$book->id);
        $this->assertDatabaseMissing('books', $book->toArray());
    }

    public function test_can_show_specific_book()
    {
        $category = Category::create(['category' => 'Programming - 2']);
        $book = Book::factory()->create(['category_id' => $category->id]);

        $this->call('GET', '/api/books/'.$book->id)->assertJson($book->toArray());
    }


}
