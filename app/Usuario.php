<?php

namespace controleDeUsuarios;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','categoria_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function categoria(){
        return $this->belongsTo('controleDeUsuarios\Categoria');
    }
}
