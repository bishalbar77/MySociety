<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ownership')->nullable();
            $table->string('flat_no')->nullable();
            $table->string('ltname');
            $table->string('country');
            $table->string('dob');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('district');
            $table->string('state');
            $table->string('city');
            $table->string('pincode');
            $table->string('add');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('type')->default('Management');
            $table->integer('is_active')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
