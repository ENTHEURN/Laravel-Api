<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'age',
        'phone',
    ];

    public function product_orders()
    {
        return $this->belongsToMany(Product::class, 'product_orders');
    }

    public static function list()
    {
        return self::all();
    }

    public static function store($request, $id = null)
    {
        $data = $request->only('name', 'age', 'phone');
        return self::updateOrCreate(['id' => $id], $data);
    }
}
