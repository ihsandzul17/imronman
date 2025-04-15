<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompletedAtToPengaduansTable extends Migration
{
    public function up()
    {
        Schema::table('pengaduans', function (Blueprint $table) {
            $table->timestamp('completed_at')->nullable()->after('status');
        });
    }

    public function down()
    {
        Schema::table('pengaduans', function (Blueprint $table) {
            $table->dropColumn('completed_at');
        });
    }
}
