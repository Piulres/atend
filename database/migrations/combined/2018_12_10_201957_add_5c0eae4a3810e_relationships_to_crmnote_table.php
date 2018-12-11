<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c0eae4a3810eRelationshipsToCrmNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('crm_notes', function(Blueprint $table) {
            if (!Schema::hasColumn('crm_notes', 'customer_id')) {
                $table->integer('customer_id')->unsigned()->nullable();
                $table->foreign('customer_id', '239170_5c0eadf935228')->references('id')->on('crm_customers')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('crm_notes', function(Blueprint $table) {
            if(Schema::hasColumn('crm_notes', 'customer_id')) {
                $table->dropForeign('239170_5c0eadf935228');
                $table->dropIndex('239170_5c0eadf935228');
                $table->dropColumn('customer_id');
            }
            
        });
    }
}
