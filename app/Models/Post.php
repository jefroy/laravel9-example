<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class); // gets user object by id (fk) // update view controller to show this
    }
}
