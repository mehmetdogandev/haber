<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPUnit\Framework\callback;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(table:'users', callback: function (Blueprint $table):void {
            $table->id();
            $table->string(column:'name');
            $table->string(column:'email')->unique();
            $table->timestamp(column:'email_verified_at')->nullable();
            $table->string(column:'password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table:'users');
    }
};
