<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

	public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }
}
