<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
   use HasFactory;

   public $timestamps = false;

   protected $fillable = [
      'nombre_comercial',
      'descripcion',
      'proveedor',
      'presentacion',
      'unidades',
      'limite',
      'estado',
      'lote_no',
      'fecha_exp',
      'entrada_producto',
   ];

   public function salidas()
   {
      return $this->hasMany(Salida::class, 'medicines_id');
   }
}
