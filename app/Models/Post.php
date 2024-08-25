<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    // protected $fillable = [
    //     'title',
    //     'body',
    //     'user_id',
    //     'category_id'];
    protected $with = ['author','category'];
    public function author(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
