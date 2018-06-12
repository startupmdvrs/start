<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle_company extends Model
{
    public $fillable = ['vehicle_type', 'company_name', 'status'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vehicle_company';

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
