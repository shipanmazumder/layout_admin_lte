<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("permission_group_id")->index();
            $table->string('name')->unique();
            $table->string('short_code')->unique();
            $table->boolean('enable_view')->default(1);
            $table->boolean('enable_add')->default(0);
            $table->boolean('enable_edit')->default(0);
            $table->boolean('enable_delete')->default(0);
            $table->boolean('enable_publish')->default(0);
            $table->boolean('status')->default(1);
            $table->index("status");
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
        Schema::dropIfExists('permission_categories');
    }
}
