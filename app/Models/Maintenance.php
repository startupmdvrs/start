<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    public $fillable = ['name', 'status'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'maintenance';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function maintenance_subs() {
        return $this->hasMany('\App\Models\Maintenance_sub')->orderBy('name');
    }
}
