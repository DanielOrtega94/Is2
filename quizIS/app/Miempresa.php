<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Miempresa extends Model
{
	use SoftDeletes;

    protected $fillable = ['id','Nombre','Correo','Direccion','Telefono','rut_persona'];

      public static function boot()
    {
        parent::boot();

        Empresa::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withTrashed();
    }
    //
}
