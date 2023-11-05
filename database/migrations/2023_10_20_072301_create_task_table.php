<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->text('task_description');
            $table->integer('task_status')->default(0);
            $table->integer('task_priority')->default(0);
            $table->integer('task_type')->default(1);
            $table->integer('task_from_res')->default(0);
            $table->string('task_complain_no')->nullable();
            $table->integer('task_assigned')->nullable();
            $table->string('duplicate_id')->nullable();
            $table->dateTime('task_expire')->nullable();
            $table->integer('is_active')->default(1);
            $table->integer('created_by')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->integer('updated_by')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task');
    }
}
