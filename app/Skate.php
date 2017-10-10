<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skate extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'skates';
    protected $fillable = array('name', 'description', 'brand_id', 'category_id', 'model_manufacture_date', 'price', 'created_at_ip', 'updated_at_ip');
    public $timestamps = false;

    public function brand()
    {
        return $this->hasOne('App\Brand');
    }

    public function category()
    {
        return $this->hasOne('App\Category');
    }
}