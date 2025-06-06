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
    Schema::table('interns', function (Blueprint $table) {
        $table->string('cv')->nullable();
        $table->string('cinFile')->nullable();
        $table->string('demande')->nullable();
    });
}

public function down(): void
{
    Schema::table('interns', function (Blueprint $table) {
        $table->dropColumn(['cv', 'cinFile', 'demande']);
    });
}

};
