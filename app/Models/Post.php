<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded  = ['id']; //this protety cant change anywhere
    protected $fillable = ['slug', 'title', 'excerpt', 'body'];
    protected $with     = ['category', 'author'];

    public function scopeFilter($query, array $filters) //Post::newquery()->filter() or Post::newQuery()->where('title''')....

    {
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) =>
            $query->where(
                fn($query) =>
                $query
                    ->where('title', 'Like', '%' . $search . '%')
                    ->where('body', 'Like', '%' . $search . '%')
            )
        );

        $query->when(
            $filters['Category'] ?? false,
            fn($query, $Category) =>
            $query->whereHas(
                'Category',
                fn($query) =>
                $query->where('slug', $Category)
            )
        );

        $query->when(
            $filters['author'] ?? false,
            fn($query, $author) =>
            $query->whereHas(
                'author',
                fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user() //user_id this is must same post table colum

    {
        return $this->belongsTo(User::class);
    } // this is old  change use to author below

    public function author() // autho_id

    {
        return $this->belongsTo(User::class, 'user_id'); //here if have difrent method name so we must add second paremeter define forign key
    }
}

//?=============================================================

//!practical some tips

//? public function scopeFilter($query) //Post::newquery()->filter() or Post::newQuery()->where('title''')....

//? {
//?     if (request('search')) {
//?         $query
//?             ->where('title', 'Like', '%' . request('search') . '%')
//?             ->where('body', 'Like', '%' . request('search') . '%');
//?     }

//? }
// another way
//? public function scopeFilter($query, array $filters) //Post::newquery()->filter() or Post::newQuery()->where('title''')....

//? {
//?     $query->when($filters['search'] ?? false, function ($query, $search) {
// ?        $query
//?             ->where('title', 'Like', '%' . $search . '%')
//?             ->where('body', 'Like', '%' . $search . '%');
// ?    });
//? }
//?=============================================================
