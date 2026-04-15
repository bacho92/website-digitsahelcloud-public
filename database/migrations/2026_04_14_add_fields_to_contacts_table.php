<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('demandeur_type')->nullable()->after('id');
            $table->string('company')->nullable()->after('demandeur_type');
            $table->string('role')->nullable()->after('phone');
            $table->text('message')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn(['demandeur_type', 'company', 'role']);
        });
    }
};
