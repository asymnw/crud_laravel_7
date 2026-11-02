<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToCategoriesTable extends Migration
{
    /**
     * Run the migrations.database/migrations/2026_09_21_015139_add_description_to_categories_table.php
     *
     * @return void
     */
public function up(): void
{
    Schema::table('categories', function (Blueprint $table) {
        $table->text('description')->after('categories_name'); // Gunakan 'category_name' (pakai y)
    });
}



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            //
        });
    }
}
