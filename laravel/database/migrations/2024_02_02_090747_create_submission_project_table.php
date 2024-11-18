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
        Schema::create('submission_project', function (Blueprint $table) {
            $table->id();
            $table->date('submit_date')->nullable();
            $table->string('project_code')->nullable();
            $table->integer('meeting_no')->nullable();
            $table->date('meeting_date')->nullable();
            $table->string('board1')->nullable();
            $table->string('board2')->nullable();
            $table->string('status')->nullable();
            $table->string('Q1');
            $table->string('Q2');
            $table->string('Q3');
            $table->string('Q4');
            $table->json('Q5')->nullable();
            $table->string('Q6');
            $table->string('Q7');
            $table->string('Q8');
            $table->string('Q9');
            $table->string('Q10');
            $table->string('Q11');
            $table->string('Q12');
            $table->json('Q13-1')->nullable();
            $table->string('Q13-2');
            $table->string('Q13-3');
            $table->string('Q13-4');
            $table->string('Q14');
            $table->string('Q15');
            $table->string('Q16');
            $table->string('Q17');
            $table->string('Q18');
            $table->string('Q19');
            $table->string('Q20');
            $table->string('Q21');
            $table->string('Q22');
            $table->string('Q23');
            $table->string('Q24');
            $table->string('Q25');
            $table->string('Q26');
            $table->string('Q27');
            $table->json('Q28')->nullable();
            $table->json('Q29')->nullable();
            $table->string('Q30');
            $table->string('Q31');
            $table->string('Q32');
            $table->string('Q33');
            $table->string('Q34');
            $table->string('Q35');
            $table->json('Q36')->nullable();
            $table->string('Q37');
            $table->string('Q38');
            $table->string('Q39');
            $table->string('Q40');
            $table->string('Q41');
            $table->string('Q42');
            $table->string('Q43');
            $table->string('Q44');
            $table->string('Q45');
            $table->string('Q46');
            $table->json('Q47')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submission_project');
    }
};
