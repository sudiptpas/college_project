<?php 
 $home 			= ($current == 'home')?'current' :'';
 $customer 		= ($current == 'customer')?'current' :'';
 $supplier 		= ($current == 'supplier')?'current' :'';
 $employee 		= ($current == 'employee')?'current' :'';
 $purchase 		= ($current == 'purchase')?'current' :'';
 $sales 		= ($current == 'sales')?'current' :'';
 $product 		= ($current == 'product')?'current' :'';
 $payment 		= ($current == 'payment')?'current' :'';
 $report 		= ($current == 'report')?'current' :'';
 $admin 		= ($current == 'admin')?'current' :'';
 ?>
<div class="sidebar-menus">
	<ul>
		<li class="[[$home]]"><a href="[[URL::to('home')]]"><i class="fa fa-home"></i>Home</a></li>
		<li class="[[$customer]]"><a href="[[URL::to('customer')]]"><i class="fa fa-users sidebar-icon"></i>Customer</a></li>
		<li class="[[$supplier]]"><a href="[[URL::to('supplier')]]"><i class="fa fa-phone sidebar-icon"></i>Supplier</a></li>
		<li class="[[$employee]]"><a href="[[URL::to('employee')]]"><i class="fa fa-briefcase sidebar-icon"></i>Employee</a></li>
		<li class="[[$purchase]]"><a href="[[URL::to('purchase')]]"><i class="fa fa-shopping-cart sidebar-icon"></i>Purchase</a></li>
		<li class="[[$sales]]"><a href="[[URL::to('sales')]]"><i class="fa fa-truck sidebar-icon"></i>Sales</a></li>
		<li class="[[$product]]"><a href="[[URL::to('product')]]"><i class="fa fa-gift sidebar-icon"></i>Product</a></li>
		<li class="[[$payment]]"><a href="[[URL::to('payment')]]"><i class="fa fa-credit-card sidebar-icon"></i>Payment</a></li>
		<li class="[[$report]]"><a href="[[URL::to('report')]]"><i class="fa fa-print sidebar-icon"></i>Reports</a></li>		
		<li class="[[$admin]]"><a href="[[URL::to('admin')]]"> <i class="fa fa-cogs sidebar-icon"></i>Setting</a></li>

	</ul>
</div>