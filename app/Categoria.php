<?php
// para criar modelo pelo cli: php artisan make:model Categoria
namespace controleDeUsuarios;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = array('nome');
    protected $guarded = ['id'];

    public function usuarios(){
        return $this->hasMany('controleDeUsuarios\Produto');
    }
}


