<?php

namespace App\Models;

use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $table='students';
    protected $primarykey='id';
    protected $fillable = [
      'name',   
      'address',
      'mobile'
    ];
    public function enrollment (){
      return $this->hasMany(Enrollment::class);
    }
}
