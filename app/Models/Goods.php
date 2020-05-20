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
}