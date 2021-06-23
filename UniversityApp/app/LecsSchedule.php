<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LecsSchedule extends Model
{
        // Table Name
        protected $table = 'lecs_schedule';
        // Primary Key
        public $primaryKey = 'id';
        // Timestamps
        public $timestamps = true;
        
   public function course()
   {
   return $this->belongsTo(Course::class);
   }
        
}
