<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('publication_link');
            $table->unsignedBigInteger('sdg'); // Foreign key reference to SDG in Projects
            $table->timestamps();

            // Foreign Key Constraint
            $table->foreign('sdg')->references('sdg')->on('projects')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('publications');
    }
};
