<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('l_e_s_s_o_n_s', function (Blueprint $table) {
            $table->id('lesson_id');
            $table->string('status');
            $table->foreignId('subject_id')->references('subject_id')->on('s_u_b_j_e_c_t_s');
            $table->foreignId('id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('l_e_s_s_o_n_s');
    }
};
