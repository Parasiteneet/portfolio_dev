<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name','tel','date','time','user_id'
     ];
    /**
     * この予約を所有するUserを取得
     */

     public function users()
     {
         return $this->belongsTo('App\User','user_id');
     }
}
