<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suno_accounts', function (Blueprint $table) {
            $table->id();
            $table->longText('session_id');
            $table->longText('authorization');
            $table->longText('device_id');
            $table->longText('client_id');
            $table->enum('status',[1,2])->default(1)->comment('1:Active,2:Inactive');
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
        Schema::dropIfExists('suno_accounts');
    }
};
