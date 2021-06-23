<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    // Table Name
    protected $table = 'briefs';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
