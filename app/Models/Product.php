<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];

    //relacion uno a muchos
    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    //relacion uno a muchos inversa
    public function brand()
    {
        return $this->belongsTo(Brand::class);    
    }

    public function subcategory()
    {
        return $this -> belongsTo(Subcategory::class);
    }

    //relacion de muchos a muchos

    public function color()
    {
        return $this ->hasMany(Color::class);
    }

    //relacion polimorfica de uno a muchos
    public function images()
    {
        return $this->morphMany(Image::class, "imageable ");
    }

}
