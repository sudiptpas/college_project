<?php 

	class Company extends Eloquent{
		protected $table = 'company';
		protected $softDelete = true;
		protected $fillable = ['org_id'];
		protected $primaryKey = 'company_id';

		public function users(){
			return $this->hasMany('User');
		}

		public function persons(){ 
			return $this->hasMany('Person');
 		}

 		public function brand(){
 			return $this->hasMany('Brand');
 		}

 		public function category(){
 			return $this->hasMany('Category');
 		}
 		public function products(){
 			return $this->hasMany('Product');
 		}

	}
?>