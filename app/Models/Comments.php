<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['content', 'commenter_id', 'good_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'commenter_id');
    }

    public function good()
    {
        return $this->belongsTo(Goods::class, 'good_id');
    }
}
