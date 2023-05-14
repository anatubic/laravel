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
        Schema::table('founders', function (Blueprint $table) {
            $table->dropColumn('years_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('founders', function (Blueprint $table) {
            $table->after('year_of_birth', function($table) {
                $table->integer('years_active');
            });
        });
    }
};
