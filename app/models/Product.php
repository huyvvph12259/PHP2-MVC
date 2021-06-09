<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Product extends Model{
    protected $table = 'products';
    public $fillable = [
        'name', 'price', 'cate_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'cate_id');
    }

    public function galleries(){
        return $this->hasMany(ProductGallery::class, 'product_id');
    }
}

?>