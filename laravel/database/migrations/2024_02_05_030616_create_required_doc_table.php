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
        Schema::create('required_doc', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path')->nullable();
            $table->json('project_type');
            $table->boolean('below_age'); // ต่ำกว่่า 18
            $table->boolean('voluntary'); // ความสมัครใจ
            $table->unsignedBigInteger('submission_project_id');
            $table->foreign('submission_project_id')->references('id')->on('submission_project');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('required_doc');
    }
};
