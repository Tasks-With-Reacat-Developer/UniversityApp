<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamSchedule extends Model
{
        // Table Name
        protected $table = 'exam_schedule';
        // Primary Key
        public $primaryKey = 'id';
        // Timestamps
        public $timestamps = true;
}
