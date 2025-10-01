<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id()->comment('PK auto increment');
            $table->string('project_code')->unique()->comment('Unique');
            $table->string('name');
            $table->enum('status', ['planned', 'active', 'on_hold', 'completed', 'cancelled'])->default('active')->comment('planned | active | on_hold |
completed | cancelled');
            $table->date('start_date')->nullable();
        });



        Schema::create('sites', function (Blueprint $table) {
            $table->id()->comment('PK auto increment');
            $table->string('site_code')->unique()->comment('Unique');
            $table->string('name');
            $table->string('city');
            $table->string('country', 2)->comment('ISO code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
        Schema::dropIfExists('sites');
    }
};
