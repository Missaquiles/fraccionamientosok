<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buzon extends Model
{
    protected $table = 'buzon';
    public function usuario()
    {
        return $this->hasOne('app\Usuario');
    }
    protected $fillable=[
        'titulo','descripcion', 'imagen', 'fecha', 'estatus', 'resueltoPor', 'respuesta', 'usuario_idUsuario'
    ];
    protected $primaryKey = 'idBuzon';
}
