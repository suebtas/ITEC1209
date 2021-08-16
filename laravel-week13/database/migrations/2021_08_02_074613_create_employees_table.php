<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->text('FIRST_NAME');
            $table->text('LAST_NAME');
            $table->text('EMAIL');
            $table->text('PHONE_NAMBER');
            $table->date('HIRE_DATE');
            $table->text('JOB_ID');
            $table->decimal('SALARY');
            $table->decimal('COMMISSION_PCT');
            $table->integer('MANAGER_ID');
            $table->integer('DEPARTMENT_ID');
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
        Schema::dropIfExists('employees');
    }
}
