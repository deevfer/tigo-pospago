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
        Schema::table('site_settings', function (Blueprint $table) {
            $table->string('banner_image_mobile')->nullable()->after('banner_image');
        });

        \Illuminate\Support\Facades\DB::table('site_settings')->update([
            'banner_image_mobile' => 'site-settings/banner-tigo-alta.jpeg',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn('banner_image_mobile');
        });
    }
};
