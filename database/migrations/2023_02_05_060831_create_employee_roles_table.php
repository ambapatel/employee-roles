<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_roles', function (Blueprint $table) {
            $table->unsignedInteger('employee_id');
            $table->foreign("employee_id")->on("employees")->references("id")->onUpdate("RESTRICT")->onDelete("CASCADE");
            $table->unsignedInteger('role_id');
            $table->foreign("role_id")->on("roles")->references("id")->onUpdate("RESTRICT")->onDelete("CASCADE");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_roles');
    }
}
