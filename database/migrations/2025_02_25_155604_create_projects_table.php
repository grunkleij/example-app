<?
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->integer('sdg');
            $table->boolean('upcoming_project')->default(false);
            $table->date('start_date')->nullable();
            $table->text('description')->nullable();
            $table->binary('photo'); // BLOB field for storing images
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('projects');
    }
};
