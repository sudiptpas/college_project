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
			<div class="show-available-customers table-responsive none">
				<table class="table table-stripped">
					<tr>
						<th>Name</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
					@foreach($customers as $customer)
						@if($customer->persons->company_id == Session::get('company_id'))
							<tr>
								<td>[[$customer->persons->fullname]]</td>
								<td>[[$customer->persons->address]]</td>
								<td>[[$customer->persons->phone]]</td>
								<td>[[$customer->persons->mobile]]</td>
								<td>[[$customer->persons->email]]</td>
								<td>
									@if($customer->persons->status == 0)
										<span class="glyphicon glyphicon-ok"></span>
									@else
										<span class="glyphicon glyphicon-remove"></span>
									@endif
								</td>
								<td><span class="glyphicon glyphicon-edit"></span> &nbsp; <span class="glyphicon glyphicon-cloud"> </td>
							</tr>
						@endif						
					@endforeach
				</table>
			</div>
		</div>

	</div>	 
</div>
@stop