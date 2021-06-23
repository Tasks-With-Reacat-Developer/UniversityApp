<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamsSchedules extends Model
{
           // Table Name
           protected $table = 'exams_schedules';
           // Primary Key
           public $primaryKey = 'id';
           // Timestamps
           public $timestamps = true;
}
