<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College_Brief extends Model
{
    // Table Name
    protected $table = 'college__briefs';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
