<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //This is the model

    // Table Name
    protected $table = 'messages';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
