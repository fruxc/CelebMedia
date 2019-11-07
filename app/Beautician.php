<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beautician extends Model
{


        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */


        protected $primaryKey = 'id';

        protected $fillable = [
          'name', 'exp', 'address',
        ];


        /**
         * The attributes that should be cast to native types.
         *
         * @var array
         */
        protected $casts = [
            'dob' => 'datetime',
        ];
}
