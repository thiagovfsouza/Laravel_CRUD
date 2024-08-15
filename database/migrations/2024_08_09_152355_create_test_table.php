<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_table', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_whatsapp')->nullable();
            $table->string('phone_contact')->nullable();
            $table->string('cpf')->nullable();
            $table->string('cep')->nullable();
            $table->enum('know_company', ['Facebook', 'Linkedin'])->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_table');
    }
};
