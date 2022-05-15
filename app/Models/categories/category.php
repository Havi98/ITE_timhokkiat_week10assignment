<?php

namespace App\Models\categories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\posts\Post;

class category extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'categories';
    protected $guarded = ['id'];

    public function getAllPosts()
    {
        return $this->hasMany(Posts::class);
    }
}
