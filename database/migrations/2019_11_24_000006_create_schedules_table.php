<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    private $tableName = 'schedules';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->unsignedInteger('lecture_time_id');
            $table->unsignedInteger('course_id');
            $table->timestamps();
            $table->softDeletes();
            $table->timestamp('permanent_deleted_at')->nullable();
            $table->index(['date']);

            $table->foreign('lecture_time_id')->references('id')->on('lecture_times');
            $table->foreign('course_id')->references('id')->on('courses');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
