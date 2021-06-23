<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    // Table Name
    protected $table = 'colleges';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

}
