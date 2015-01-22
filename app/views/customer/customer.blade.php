@extends('default.main')
@section('content')
<div class="data-container">
	@include('customer.customer-menu')
	<div class="body">
		<div class="form-header">
		</div>
		<div class="include-form">
			<div class="show-new-customer">
				@include('customer.add-customer')
			</div>
		</div>

	</div>	 
</div>
@stop
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('.form-header').html('New Customer.');

		$('.new_customer').on('click',function(){
		$('.show-new-customer').removeClass('none');
		$('.form-header').html('New Customer.');
		$('.show-available-customers').addClass('none');
	});
	$('.list-customer').on('click',function(){
		$('.show-available-customers').removeClass('none');
		$('.form-header').html('List of active customers availavle with us.');
		$('.show-new-customer').addClass('none');
	});
	$('.submit-customer').on('click',function(){
		var name = $('.customer_name').val() ,
			address = $('.customer_address').val() ,
			phone = $('.phone').val(),
			mobile = $('.mobile').val(),
			email = $('.email').val(),
			type = $('.select_type').val();
		if(name == ''){
			$('.tiny-error-name').html('This field is required.').removeClass('none').addClass('tiny-error-message');
			$('.customer_name').addClass('error-border');
			return false;
		}else if(address == ''){
			$('.tiny-error-address').html('This field is required.').removeClass('none').addClass('tiny-error-message');
			$('.customer_address').addClass('error-border');
			return false;
		}else if(phone == ''){
			return false;
		}else if(mobile == ''){
			return false;
		}else if(email == ''){
			return false;
		}else if(gender == ''){
			return false;
		}else if(type == ''){
			return false;
		}else{
			return true;
		}
	});
	});
</script>
@stop