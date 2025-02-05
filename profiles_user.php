public function up()
{
    Schema::create('profile_user', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->foreignId('profile_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}
