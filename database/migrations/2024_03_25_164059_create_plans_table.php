<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('t_name');
            $table->string('A2');
            $table->string('B2');
            $table->string('C2');
            $table->string('D2');
            $table->string('E2');
            $table->string('F2');
            $table->string('G2');
            $table->string('H2');
            $table->string('I2');
            $table->string('J2');
            $table->string('K2');
            $table->string('L2');
            $table->string('M2');
            $table->string('N2');
            $table->string('O2');
            $table->string('P2');
            $table->string('Q2');
            $table->string('R2');
            $table->string('S2');
            $table->string('T2');
            $table->string('U2');
            $table->string('V2');
            $table->string('W2');
            $table->string('X2');
            $table->string('Y2');
            $table->string('Z2');
            $table->string('a21');
            $table->string('b21');
            $table->string('c21');
            $table->string('d21');
            $table->string('z21');
            $table->string('f21');
            $table->string('g21');
            $table->string('h21');
            $table->string('j21');
            $table->string('k21');
            $table->string('l21');
            $table->string('m21');
            $table->string('n21');
            $table->string('o21');
            $table->string('p21');
            $table->string('q21');
            $table->string('r21');
            $table->string('s21');
            $table->string('t21');
            $table->string('u21');
            $table->string('v21');
            $table->string('w21');
            $table->string('x21');
            $table->string('y21');
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
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
        Schema::dropIfExists('plans');
    }
}
