<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalestaxsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salestaxs', function (Blueprint $table) {
            $table->string('state', 2);
            $table->string('zipcode', 5);
            $table->string('taxRegionName', 89);
            $table->float('stateRate');
            $table->float('estimatedCombinedRate');
            $table->float('estimatedCountyRate');
            $table->float('estimatedCityRate');
            $table->float('estimatedSpecialRate');
            $table->integer('riskLevel');

            $table->primary('zipcode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salestaxs');
    }
}
