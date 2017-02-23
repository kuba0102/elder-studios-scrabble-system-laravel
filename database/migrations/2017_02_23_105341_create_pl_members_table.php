<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlMembersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
      Schema::create('Pl_Members', function (Blueprint $table)
      {
      $table->increments('member_id');
      $table->string('member_name');
      $table->string('member_last_name');
      $table->date('member_date_joined');
      $table->integer('member_mobile_number');
      $table->timestamps();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('pl_members');
  }
}
?>
