<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('mobile')->unique();
            $table->string('profile_image')->nullable();
            $table->mediumText('description')->nullable();
            $table->string('date_of_joining')->nullable();
            $table->unsignedBigInteger('fk_user_id')->nullable();
            $table->string('roles')->nullable();
            $table->integer('system_id')->unsigned()->unique()->nullable();
            $table->unsignedBigInteger('fk_org_id')->nullable();
            $table->unsignedBigInteger('fk_department_id')->nullable();
            $table->unsignedBigInteger('fk_designation_id')->nullable();
            $table->unsignedBigInteger('fk_source_of_hire_id')->nullable();
            $table->unsignedBigInteger('fk_salary_id')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('alt_mobile_no')->nullable();
            $table->string('alt_email_id')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('permanent_addr1')->nullable();
            $table->string('permanent_addr2')->nullable();
            $table->unsignedBigInteger('fk_country1_id')->nullable();
            $table->unsignedBigInteger('fk_state1_id')->nullable();
            $table->unsignedBigInteger('fk_city1_id')->nullable();
            $table->string('permanent_pincode')->nullable();
            $table->boolean('same_as_permanent')->nullable();
            $table->string('temp_addr1')->nullable();
            $table->string('temp_addr2')->nullable();
            $table->string('temp_pincode')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('account_no')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('adhar_no')->nullable();
            $table->boolean('is_active')->default(0)->nullable();
            $table->boolean('is_manager')->default(0)->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
            //Foreign Keys
            $table->foreign('fk_user_id')->references('id')->on('users');
            $table->foreign('fk_org_id')->references('id')->on('orgnisations');
            $table->foreign('fk_department_id')->references('id')->on('departments');
            $table->foreign('fk_designation_id')->references('id')->on('designations');
            $table->foreign('fk_source_of_hire_id')->references('id')->on('source_of_hires');
            $table->foreign('fk_country1_id')->references('id')->on('countries');
            $table->foreign('fk_state1_id')->references('id')->on('states');
            $table->foreign('fk_city1_id')->references('id')->on('cities');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
