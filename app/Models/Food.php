<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table= 'foods';

    protected $fillable = [
        'title','price','discount','category_id','image_path'
    ];
}
