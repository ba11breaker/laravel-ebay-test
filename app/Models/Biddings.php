<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biddings extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'bidder_id');
    }

    public function good()
    {
        return $this->belongsTo(Goods::class, 'good_id');
    }
}
