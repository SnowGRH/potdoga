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
        Schema::create('s_u_b_j_e_c_t_s', function (Blueprint $table) {
            $table->id('subject_id');
            $table->string('name');
            $table->string('description');
            $table->integer('limit');
            $table->timestamps();
           
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_u_b_j_e_c_t_s');
    }
};
