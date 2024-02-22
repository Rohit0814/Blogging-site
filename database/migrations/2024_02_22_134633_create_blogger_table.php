<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogger', function (Blueprint $table) {
            $table->id('blogger_id');
            $table->string('first_name',60);
            $table->string('last_name',60);
            $table->string('password');
            $table->string('userName',100);
            $table->string('email',100);
            $table->string('address',100);
            $table->string('address2',100)->nullable();
            $table->string('country',100);
            $table->string('state',100);
            $table->string('zip',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogger');
    }
};
