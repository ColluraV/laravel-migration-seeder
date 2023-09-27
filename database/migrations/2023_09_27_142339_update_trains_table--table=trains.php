<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameCurrentNameColumn extends Migration
{
    public function up()
    {
        Schema::table('tasks', function(Blueprint $table) {
            $table->renameColumn('stezione_partenza', 'stazione_partenza');
        });
    }

    public function down()
    {
        Schema::table('tasks', function(Blueprint $table) {
            $table->renameColumn('stazione_partenza', 'stezione_partenza');
        });
    }
};
