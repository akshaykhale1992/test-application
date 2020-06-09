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
            // Basic Details
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile', 10)->unique();
            $table->date('birthday');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->bigInteger('state_id');
            $table->bigInteger('city_id');

            // Qualification Details
            $table->string('education');
            $table->string('year_of_completion');
            $table->string('profile_picture');
            $table->string('skill');
            $table->string('certificate_file');

            // Profession Details
            $table->enum('profession', ['salaried', 'self_employed'])->default('salaried');

            // Salaries Person Details
            $table->string('company_name')->nullable()->default(null);
            $table->date('joining_date')->nullable()->default(null);

            // Self-Employed Person Details
            $table->string('business_name')->nullable()->default(null);
            $table->string('location')->nullable()->default(null);

            // Misc. Columns
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable()->default(null);
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
