<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.relation.data.relation.table'), function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('key')->nullable();
            $table->string('source_type');
            $table->integer('source_id')->unsigned();
            $table->string('target_type');
            $table->integer('target_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.relation.data.relation.table'));
    }
}
