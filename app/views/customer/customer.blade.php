@extends('default.main')
@section('content')
<div class="data-container">
	@include('customer.customer-menu')
	<div class="body">
		<div class="form-header">New Customer</div>
		<div class="include-form">
			<div class="show-new-customer">
				@include('customer.add-customer')
			</div>
		</div>

	</div>	 
</div>
@stop
