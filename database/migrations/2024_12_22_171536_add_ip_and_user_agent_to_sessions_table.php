<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('sessions', function (Blueprint $table) {
            // If you also need user_id, uncomment the line below
            // $table->unsignedBigInteger('user_id')->nullable()->after('id');

            // ip_address might be up to 45 chars for IPv6. Make it nullable if you want.
            $table->string('ip_address', 45)->nullable()->after('last_activity');

            // user_agent can be quite long, so we usually use text() or longText().
            $table->text('user_agent')->nullable()->after('ip_address');
        });
    }

    public function down()
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->dropColumn('ip_address');
            $table->dropColumn('user_agent');
            // Uncomment if you added user_id
            // $table->dropColumn('user_id');
        });
    }
};
