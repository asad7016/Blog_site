<?php

namespace asad;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  //table name
  protected$table='posts';
  //primary key
  public $primaryKey='id';
  //timestamps
   public $timestamps=true;
   public function user(){
   	return $this->belongsTo('asad\User');
   }
}
