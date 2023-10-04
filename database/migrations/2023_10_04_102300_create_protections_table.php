<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protections', function (Blueprint $table) {
            $table->id();

            $table->text('content_de');
            $table->text('content_en');

            $table->string('meta_title_de')->nullable();
            $table->string('meta_title_en')->nullable();

            $table->text('meta_description_de')->nullable();
            $table->text('meta_description_en')->nullable();
            
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
        Schema::dropIfExists('protections');
    }
};
