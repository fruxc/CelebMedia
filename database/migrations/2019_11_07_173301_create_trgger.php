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

     <?php

     use Illuminate\Support\Facades\Schema;
     use Illuminate\Database\Schema\Blueprint;
     use Illuminate\Database\Migrations\Migration;

     class CreateTrigger extends Migration
     {
         public function up()
         {
               DB::unprepared('CREATE TRIGGER user_default_role AFTER INSERT ON `users` FOR EACH ROW
                     BEGIN
                        INSERT INTO `user_role` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES (3, NEW.id, now(), null);
                     END');
         }
         public function down()
         {
            DB::unprepared('DROP TRIGGER `user_default_role`');
         }
     }
}
