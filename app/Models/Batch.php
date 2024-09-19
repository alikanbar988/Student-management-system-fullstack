<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Batch extends Model
{
    use HasFactory;
    protected $table='batchs';
    protected $primarykey='id';
    protected $fillable = [
      'name',   
      'course_id',
      'start_date'
    ];

    public function course (){
      return $this->belongsTo(Course::class);
    }
    public function enrollment (){
      return $this->hasMany(Enrollment::class);
    }
}
