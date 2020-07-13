<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // TAble Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // public $primaryKey = 'items_id';
    // timestamps
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
