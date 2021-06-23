<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
  // Table Name
 protected $table = 'goals';
 // Primary Key
 public $primaryKey = 'id';
 // Timestamps
 public $timestamps = true;
}
