<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sala
 *
 * @property $id
 * @property $nombre
 * @property $mesas
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sala extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'mesas', 'estado'];


}
