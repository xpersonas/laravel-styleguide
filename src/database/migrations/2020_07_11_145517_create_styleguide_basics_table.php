<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStyleguideBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('styleguide_basics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('headings')->nullable();
            $table->boolean('text')->nullable();
            $table->boolean('lists')->nullable();
            $table->boolean('blockquote')->nullable();
            $table->boolean('rule')->nullable();
            $table->boolean('table')->nullable();
            $table->boolean('breadcrumbs')->nullable();
            $table->boolean('forms')->nullable();
            $table->boolean('buttons')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('styleguide_basics');
    }
}
