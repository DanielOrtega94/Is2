<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
	  use SoftDeletes;

  
	protected $fillable = ['title','idetapa','descripcion'];

	 public static function boot()
    {
        parent::boot();

        Topic::observe(new \App\Observers\UserActionsObserver);
    }



     public function question()
    {
        return $this->hasMany(Question::class, 'id')->withTrashed();
    }

      public function etapa()
    {
        return $this->belongsTo(Etapa::class, 'id')->withTrashed();
    }
}
