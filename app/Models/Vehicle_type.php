<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle_type extends Model
{
    public $fillable = ['id', 'name', 'status'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vehicle_type';
}
