<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $modelo
 * @property $placa
 * @property $horaentrada
 * @property $horasalida
 * @property $tiempoestac
 * @property $importe
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    
    static $rules = [
		'modelo' => 'required',
		'placa' => 'required',
		'horaentrada' => 'required',
		'horasalida' => 'required',
		'tiempoestac' => 'required',
		'importe' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['modelo','placa','horaentrada','horasalida','tiempoestac','importe'];



}
