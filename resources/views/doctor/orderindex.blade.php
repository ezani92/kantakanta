@include('doctor.header')
    <body>
        <div class="be-wrapper be-fixed-sidebar">
	        
            
            @include('doctor.topbar')
            
            @include('doctor.left')
            <div class="be-content">
                <div class="main-content container-fluid">
                    <div class="row">
                        <div class="col-md-12">
	                    	<h3>Order List</h3>
	                    	@if(Session::has('message'))
							<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
							@endif
	                        <div class="panel panel-default panel-table">
							    <div class="panel-body">
							        <table class="table table-striped table-borderless">
							            <thead>
							                <tr>
							                    <th>Patient Name</th>
							                    <th>Surgery Date</th>
							                    <th>Hospital</th>
							                    <th>Status</th>
							                    <th class="actions"></th>
							                </tr>
							            </thead>
							            <tbody class="no-border-x">
								            @foreach ($orders as $order)
										    <tr>
							                    <td>{{ $order->patient->name }}</td>
							                    <td>{{ \Carbon\Carbon::createFromTimestamp($order->surgery_date)->format('d M Y, h:i A') }}</td>
							                    <td>{{ $order->surgery_hospital}}</td>
							                    <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d M Y, h:i A') }}</td>
							                    <td class="actions"><a href="order/{{ $order->id }}" class="icon"><span class="label label-primary"><i class="mdi mdi-file"></i> View</span></a> <a href="order/{{ $order->id }}/delete" onclick="return confirm('Are you sure want to delete this user?')" class="icon"><span class="label label-danger"><i class="mdi mdi-delete"></i> Delete</span></a></td>
							                </tr>
							                @endforeach
							            </tbody>
							        </table>
							        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							        {{ $orders->links() }}
							    </div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        @include('doctor.footer')
    </body>
</html>