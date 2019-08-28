<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAScoreModelSummary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_score_model_summary', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('application_type');
            $table->string('source_of_registration', 100);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->unsignedInteger('engine_id');   
            $table->string('engine_name', 50);
            $table->string('version', 20)->nullable();
            $table->string('model_decider', 50)->default("");        
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
        Schema::dropIfExists('a_score_model_summary');
    }
}
