<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Platillo
 *
 * @property $id
 * @property $nombre
 * @property $precio
 * @property $imagen
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Platillo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'precio', 'imagen', 'estado'];


}
