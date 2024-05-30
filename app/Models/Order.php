<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable= ['student_id'];

    public function students(){
        return $this->belongsTo(Student::class, 'students');
    }

    public static function list()
    {
        $data = self::all();
        return $data;
    }

    public static function store($request, $id = null)
    {
        $data = $request->only('student_id');
        $data = self::updateOrCreate(['id' => $id], $data);
    }

}
