<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';
    protected $fillable = ['title', 'slug', 'content', 'parent_id'];
    use HasFactory;


   // One category -> Many posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Связь модели Category с моделью Category, позволяет получить все
     * дочерние категории текущей категории
     */
    public function children() {
        return $this->hasMany(Category::class, 'parent_id');
    }

    /**
     * Связь модели Category с моделью Category, позволяет получить
     * родителя текущей категории
     */
    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id');
    }

     // TODO заменить на scope
    /**
     * Возвращает список корневых категорий каталога товаров
     */
    public static function roots() {
        return self::where('parent_id', 0)->get();
    }

}
