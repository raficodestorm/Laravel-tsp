<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
public function up(): void
{
Schema::create('profiles', function (Blueprint $table) {
$table->id();
$table->foreignId('user_id')->constrained()->onDelete('cascade');
$table->string('website')->nullable();
$table->string('phone')->nullable();
$table->string('address')->nullable();
$table->string('profile_picture')->nullable();
$table->text('bio')->nullable();
$table->timestamps();
});
}


public function down(): void
{
Schema::dropIfExists('profiles');
}
};