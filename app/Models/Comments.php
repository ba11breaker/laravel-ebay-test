<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'commenter_id');
    }

    public function good()
    {
        return $this->belongsTo(Goods::class);
    }
}
