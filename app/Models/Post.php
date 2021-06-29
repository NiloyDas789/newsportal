<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['created_at','updated_at'];

    protected $date = [
        'published_at' => 'datetime:Y-m-d',
    ];
    public function catagories()
    {
        return $this->belongsToMany('App\Models\Catagory');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
    public function reporters()
    {
        return $this->belongsTo('App\Models\Reporter');
    }
}
