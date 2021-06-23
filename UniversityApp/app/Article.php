<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //This is the model

    // Table Name
    protected $table = 'articles';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(AdminUser::class);
    }
}
