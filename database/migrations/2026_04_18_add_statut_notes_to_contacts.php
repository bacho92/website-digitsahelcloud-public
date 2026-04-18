<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('statut')->default('non_lu')->after('is_read');
            $table->text('notes_internes')->nullable()->after('statut');
        });

        // Migrer is_read existant vers statut
        DB::table('contacts')->where('is_read', true)->update(['statut' => 'traite']);
    }

    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn(['statut', 'notes_internes']);
        });
    }
};
