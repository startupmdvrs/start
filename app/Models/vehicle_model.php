<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle_model extends Model
{
    public $fillable = ['company_name', 'vehicle_type', 'model_name', 'status'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vehicle_model';

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
