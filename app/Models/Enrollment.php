<?php

namespace App\Models;

use App\Models\Batch;
use App\Models\Payment;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enrollment extends Model
{
    use HasFactory;
    protected $table = 'enrollments';
    protected $primarykey='id';
    protected $fillable = [
      'enroll_no',   
      'batch_id',
      'student_id',
      'join_date',
      'fee'

    ];


    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
   // public function payment()
   // {
     //   return $this->hasMany(Payment::class);
     //}
}

