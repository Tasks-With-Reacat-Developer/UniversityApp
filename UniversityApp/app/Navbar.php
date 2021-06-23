<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
 // Table Name
 protected $table = 'navbars';
 // Primary Key
 public $primaryKey = 'id';
 // Timestamps
 public $timestamps = true;

 public function Nav_MultiLink(){
    return $this->belongsTo(Nav_MultiLink::class);
 }
}
