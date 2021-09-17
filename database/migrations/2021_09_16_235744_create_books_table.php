<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string	('firstname');
            $table->string ('lastname');
            $table->string ('mobile');
            $table->string ('email');
            $table->date ('dob');
            $table->string ('gender');
            $table->string	('companyName') ->nullable();
            $table->string ('addressStreet') ->nullable();
            $table->string ('addressSuburb') ->nullable();
            $table->string ('addressCity') ->nullable();
            $table->string	('addressPostcode') ->nullable();
            $table->string ('addressCountry') ->nullable();
            $table->date ('courseDate');
            $table->foreignID ('coursedate_id')->contrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
