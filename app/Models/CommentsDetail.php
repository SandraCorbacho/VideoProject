<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentsDetail extends Model
{
    use HasFactory;
    protected $fillabe = ['comment_id',  'title', 'description'];
}
