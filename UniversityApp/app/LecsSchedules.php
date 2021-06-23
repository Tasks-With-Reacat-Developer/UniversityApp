<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LecsSchedules extends Model
{
           // Table Name
           protected $table = 'lecs_schedules';
           // Primary Key
           public $primaryKey = 'id';
           // Timestamps
           public $timestamps = true;
}
