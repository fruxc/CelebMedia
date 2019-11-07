<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrgger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       DB::unprepared('CREATE TRIGGER DATE_TR
         BEFORE INSERT ON services
         FOR EACH ROW
         BEGIN
         IF(New.booking_date>=NOW()) THEN
          CALL raise_application_error(20002,"DATE SHOULD NOT BE LESS THAN TODAYS DATE");
         END IF;
         END;
         /
         ');
       }
       public function down()
       {
         DB::unprepared('DROP TRIGGER `DATE_TR`');
       }
}
