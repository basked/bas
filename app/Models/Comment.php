<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = ['post_id', 'user_id', 'published_by', 'content'];
    //TODO нужна ли промежуточная таблица
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    //TODO нужна ли промежуточная таблица
    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
