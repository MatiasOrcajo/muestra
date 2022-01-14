<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoGlobalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_global', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('body');
            $table->text('head');
        });

        $seo = new \App\Models\SeoGlobal;
        $seo->head = '';
        $seo->body = ''; 
        $seo->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seo_global');
    }
}
