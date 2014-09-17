<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPriceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_price', function(Blueprint $table)
		{
			$table->increments('price_id');
			$table->integer('option_id');
			$table->integer('product_price');
			$table->timestamp('purchase_date');
			$table->string('lot_no');
			$table->string('batch_no');
			$table->timestamp('manufacture_date');
			$table->timestamp('expiry_date');
			$table->integer('cost_price');
			$table->integer('sell_price');
			$table->integer('market_price');
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
		Schema::drop('product_price');
	}

}
