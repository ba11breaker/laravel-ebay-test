<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $fillable = ['name', 'description', 'favourites', 'picurl'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class, 'good_id');
    }

    public function biddings()
    {
        return $this->hasMany(Biddings::class, 'good_id');
    }
}
