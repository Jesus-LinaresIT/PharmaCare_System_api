<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
   use HasFactory;

   public $timestamps = false;

   protected $fillable = [
      'medicines_id',
      'nombre_comercial',
      'descripcion',
      'proveedor',
      'presentacion',
      'unidades',
      'fecha_salida',
   ];

   public function medicines()
   {
      return $this->belongsTo(Medicine::class);
   }
}
