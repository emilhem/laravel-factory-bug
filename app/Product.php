<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    public function box()
    {
    	return $this->belongsTo('App\Box', 'box_id', 'id');
    }
}
