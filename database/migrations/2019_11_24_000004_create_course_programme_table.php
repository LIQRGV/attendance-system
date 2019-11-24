<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseProgrammeTable extends Migration
{
    private $tableName = 'course_programme';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('programme_id');
            $table->timestamps();
            $table->softDeletes();
            $table->timestamp('permanent_deleted_at')->nullable();

            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('programme_id')->references('id')->on('programmes');
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
