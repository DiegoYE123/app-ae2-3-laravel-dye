Schema::create('libros', function (Blueprint $table) {
    $id = $table->id();
    $table->string('titulo');
    $table->string('autor')->nullable();
    $table->timestamps();
});