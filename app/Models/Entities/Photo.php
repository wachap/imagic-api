<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'photos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'fileName', 'url', 'trashed'];

    /**
     * The filable value of Name.
     *
     * @var string
     */
    public function setNameAttribute ($valor)
    {
        if (!empty($valor))
        {
            $this->attributes['name'] = $valor;
            $this->attributes['slug'] = str_slug($valor);
        }
    }
}
