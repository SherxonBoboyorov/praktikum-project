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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();

            $table->string('image');

            $table->string('title_de');
            $table->string('title_en');

            $table->string('slug_de');
            $table->string('slug_en');

            $table->text('applicants_de')->nullable();
            $table->text('applicants_en')->nullable();

            $table->text('services_de')->nullable();
            $table->text('services_en')->nullable();

            $table->text('conditions_de')->nullable();
            $table->text('conditions_en')->nullable();

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
        Schema::dropIfExists('employers');
    }
};
