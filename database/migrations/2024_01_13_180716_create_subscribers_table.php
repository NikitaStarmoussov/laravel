<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number');
            $table->string('registration_type');
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('department_name')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('street');
            $table->string('house_number')->nullable();
            $table->string('apartment_number')->nullable();
            $table->timestamps();
        });

        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('username');
        //     $table->string('password');
        //     $table->timestamps();
        // });

        // Schema::create('directories', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('description');
        //     $table->timestamps();
        // });

        // Schema::create('subscriber_cards', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('subscriber_id');
        //     $table->foreign('subscriber_id')->references('id')->on('subscribers');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriber_cards');
        Schema::dropIfExists('directories');
        Schema::dropIfExists('users');
        Schema::dropIfExists('subscribers');
    }
}
