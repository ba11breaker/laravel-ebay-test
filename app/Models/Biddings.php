<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biddings extends Model
{
    protected $fillable = ['offer_price', 'bidder_id', 'good_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'bidder_id');
    }

    public function good()
    {
        return $this->belongsTo(Goods::class, 'good_id');
    }
}
