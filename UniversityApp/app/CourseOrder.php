<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseOrder extends Model
{
      // Table Name
      protected $table = 'course_orders';
      // Primary Key
      public $primaryKey = 'id';
      // Timestamps
      public $timestamps = true;
}
