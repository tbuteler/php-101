<?php

class CreatePeopleTable extends Migration
{
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->boolean('active')->default(1);
            $table->string('name');
            $table->string('email')->index();
            $table->enum('options', ['foo', 'bar', 'baz'])->default('foo');
            $table->text('bio')->nullable()->default(null);
        });
    }

    public function down()
    {
        Schema::drop('people');
    }
}
