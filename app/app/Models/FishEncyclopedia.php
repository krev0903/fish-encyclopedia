<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Models\Category;

class FishEncyclopedia extends Model
{
    use HasFactory;

    protected $table = 'fish_encyclopedias';

    protected $fillable = [
        'name',      
        'scientific_name',
        'category_id',
        'temp_id',
        'ph_id',
        'description',
        'price',
        // 'image_path',
        // 'product_id',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d'
    ];

    public function category() : Relation {
        return $this -> belongsTo(Category::class);
    }
    public function temp() : Relation {
        return $this -> belongsTo(Temp::class);
    }
    public function ph() : Relation {
        return $this -> belongsTo(Ph::class);
    }
}
