<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patron extends Model
{
    use HasFactory;

    protected $fillable = ['last_name', 'first_name', 'middle_name', 'email'];

    public function borrowedbook(){
        return $this->hasMany(BorrowedBook::class, 'patron_id', 'id');
    }

    public function returnedbook(){
        return $this->hasMany(ReturnedBook::class, 'patron_id', 'id');
    }
}
