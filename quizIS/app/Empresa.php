<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
     use SoftDeletes;

    protected $fillable = ['Nombre','user_id','Correo','Direccion','Telefono','rut_juridica','etapa','test'];

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

}
