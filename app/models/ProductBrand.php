<?php 

	class ProductBrand extends Eloquent{
		protected $table = 'product_brand';
		protected $softDelete = true;
		protected $fillable = array('brand_name','company_id');
		protected $primaryKey = 'brand_id';


	}
?>