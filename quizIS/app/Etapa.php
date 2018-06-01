<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{
     use SoftDeletes;

    protected $fillable = ['id','Nombre'];

      public static function boot()
    {
        parent::boot();

        etapa::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEtapaIdAttribute($input)
    {
        $this->attributes['id'] = $input ? $input : null;
    }

     public function topic()
    {
        return $this->hasMany(Topic::class, 'idetapa')->withTrashed();
    }


}
