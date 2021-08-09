<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * この予約を所有するUserを取得
     */

     public function user()
     {
         return $this->belongsTo('App\User');
     }
}
