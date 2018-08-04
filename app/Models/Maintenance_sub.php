<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance_sub extends Model
{
    public $fillable = ['name', 'maintenance_id', 'description'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'maintenance_sub';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function maintenance() {
		return $this->belongsTo('\App\Models\Maintenance','maintenance_id', 'id');
    }
}
