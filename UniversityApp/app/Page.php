<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
     //This is the model

    // Table Name
    protected $table = 'pages';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
