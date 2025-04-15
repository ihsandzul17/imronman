<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pengaduans', function (Blueprint $table) {
            $table->unsignedBigInteger('last_action_by')->nullable()->after('status');
            $table->foreign('last_action_by')->references('id')->on('users')->onDelete('set null');
        });
    }
    
    public function down()
    {
        Schema::table('pengaduans', function (Blueprint $table) {
            $table->dropForeign(['last_action_by']); // Hapus foreign key
            $table->dropColumn('last_action_by'); // Hapus kolom
        });
    }
};
