<?php

namespace App\Models;

use App\Models\Batch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $table='courses';
    protected $primarykey='id';
    protected $fillable = [
      'name',   
      'syllabus',
      'duration'
    ];

    public function batch()
      {
        return $this->hasMany(Batch::class);
      }

      public function duration()
      {
        return $this->duration. "Months";
      }
    
}
