<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    protected $fillable = ['dept_id', 'name', 'email'];
    
//belongsTo設定
  public function dept()
  {
  return $this->belongsTo('App\Dept');
  }
}
