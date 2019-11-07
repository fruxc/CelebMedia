<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
      use Notifiable;

      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */


      protected $primaryKey = 'id';

      protected $fillable = [
        'type', 'amount',
      ];


      /**
       * The attributes that should be cast to native types.
       *
       * @var array
       */
      protected $casts = [
          'booking_date' => 'datetime',
      ];
}
