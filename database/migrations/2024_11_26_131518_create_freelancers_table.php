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
        Schema::create('freelancers', function (Blueprint $table) {
            $table->id();
            $table->string('profile_pic')->nullable();
            $table->string('name');
            $table->string('porto_url')->nullable();
            $table->integer('age');
            $table->enum('rank', ['Bronze', 'Silver', 'Gold', 'Platinum', 'Diamond'])->default('Bronze');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('address');
            $table->date('join_date');
            $table->unsignedInteger('work_duration')->default(0);
            $table->integer('job_completed')->default(0);
            $table->enum('availability_status', ['Available', 'Not available', 'On work'])->default('Available');
            $table->decimal('rating', 2, 1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancers');
    }
};
