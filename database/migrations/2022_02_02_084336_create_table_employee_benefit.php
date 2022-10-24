<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEmployeeBenefit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_pensiun', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->nullable();
            $table->tinyInteger('tahun_ke')->nullable();
            $table->tinyInteger('usia')->nullable();
            $table->decimal('masa_kerja',4,2)->nullable();
            $table->integer('gaji')->nullable();
            $table->tinyInteger('pesangon')->nullable();
            $table->tinyInteger('penghargaan_masa_kerja')->nullable();
            $table->integer('uang_pisah')->nullable();
            $table->timestamps();

            $table->index(['employee_id']);
        });

        Schema::create('employee_retirement_benefit', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->nullable();
            $table->decimal('probability_of_life',7,6)->nullable();
            $table->decimal('discount_factor',7,6)->nullable();
            $table->integer('pv_future_benefit')->nullable();
            $table->integer('current_service_cost')->nullable();
            $table->integer('pv_benefit_obligation')->nullable();
            $table->timestamps();

            $table->index(['employee_id']);
        });

        Schema::create('employee_early_retirement', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->nullable();
            $table->decimal('mortality_rates',7,6)->nullable();
            $table->decimal('discount_factor',7,6)->nullable();
            $table->integer('pv_future_benefit')->nullable();
            $table->integer('current_service_cost')->nullable();
            $table->integer('pv_benefit_obligation')->nullable();
            $table->timestamps();

            $table->index(['employee_id']);
        });

        Schema::create('employee_disability_benefit', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->nullable();
            $table->decimal('disablity_rates',7,6)->nullable();
            $table->decimal('discount_factor',7,6)->nullable();
            $table->integer('pv_future_benefit')->nullable();
            $table->integer('current_service_cost')->nullable();
            $table->integer('pv_benefit_obligation')->nullable();
            $table->timestamps();

            $table->index(['employee_id']);
        });

        Schema::create('employee_resign_benefit', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->nullable();
            $table->decimal('resign_rates',7,6)->nullable();
            $table->decimal('discount_factor',7,6)->nullable();
            $table->integer('pv_future_benefit')->nullable();
            $table->integer('current_service_cost')->nullable();
            $table->integer('pv_benefit_obligation')->nullable();
            $table->timestamps();

            $table->index(['employee_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_benefit');
    }
}
