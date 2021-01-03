<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnedBook extends Model
{
    use HasFactory;

    protected $fillable = ['patron_id', 'copies', 'book_id'];

    public function patron(){
        return $this->belongsTo(Patron::class, 'patron_id', 'id');
    }

    public function book(){
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}
