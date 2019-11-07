<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{


        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */


        protected $primaryKey = 'id';

        protected $fillable = [
          'type', 'quality', 'cost', 'name',
        ];

}
