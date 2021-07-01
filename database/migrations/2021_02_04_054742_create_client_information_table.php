<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_information', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('client_id')->nullable();
            $table->bigInteger('proposal_id')->nullable();
            $table->string('business_name')->nullable();
            $table->string('web_cat')->nullable();
            $table->text('brief_info_web')->nullable();
            $table->text('service_product_offering')->nullable();
            $table->text('service_product_usage')->nullable();
            $table->text('service_product_del_area')->nullable();
            $table->text('major_comp_web')->nullable();
            $table->string('business_email_address')->nullable();
            $table->string('business_contact')->nullable();
            $table->text('business_address')->nullable();
            $table->text('keywords')->nullable();
            $table->string('target_search_engines')->nullable();
            $table->text('geographic_target_audience_state')->nullable();
            $table->text('web_admin_login_access')->nullable();
            $table->text('access_details')->nullable();
            $table->enum('google_webmaster', ['0', '1'])->default('0');
            $table->enum('google_analytic', ['0', '1'])->default('0');
            $table->enum('bing_webmaster', ['0', '1'])->default('0');
            $table->enum('facebook_login', ['0', '1'])->default('0');
            $table->enum('twitter_login', ['0', '1'])->default('0');
            $table->enum('instagram_login', ['0', '1'])->default('0');
            $table->enum('linkedin_login', ['0', '1'])->default('0');
            $table->enum('pinterest_login', ['0', '1'])->default('0');
            $table->text('other_info')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_information');
    }
}
