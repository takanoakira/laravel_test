<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class depts extends Model
{
   //timestamps利用しない
  public $timestamps = false;
 
  protected $fillable = ['dept_name'];
 
  //primaryKeyの変更
  protected $primaryKey = "dept_id";
 
  //hasMany設定
  public function employee()
  {
  return $this->hasMany('App\Employee');
  }
}
