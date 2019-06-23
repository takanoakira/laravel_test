<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // 1レコード
  $employee = new \App\Employee([
    'dept_id' => '1',
    'name' => '川端 莉緒',
    'email' => 'kawabata_rio@example.com'
  ]);
    $employee->save();

  // 2レコード
  $employee = new \App\Employee([
  'dept_id' => '2',
  'name' => '小玉 隆博',
  'email' => 'kodama_takahiro@example.com'
  ]);
  $employee->save();

  // 3レコード
  $employee = new \App\Employee([
  'dept_id' => '1',
  'name' => '岩井 圭',
  'email' => 'iwai_kei@example.com'
  ]);
  $employee->save();
}
      
 
  }
