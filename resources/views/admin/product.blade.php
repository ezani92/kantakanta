@include('layouts.header')
    <body>
        <div class="be-wrapper be-fixed-sidebar">
	        
            
            @include('layouts.topbar')
            
            @include('layouts.left')
            <div class="be-content">
                <div class="main-content container-fluid">
                    <div class="row">
                        <div class="col-md-12">
	                    	<h3>Product List's</h3>
	                    	@if(Session::has('message'))
							<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
							@endif
	                        <div class="panel panel-default panel-table">
							    <div class="panel-body">
							        <table class="table table-striped table-borderless table-responsive">
							            <thead>
							                <tr>
							                    <th width="10%">Brand</th>
							                    <th>Model</th>
							                    <th>Type</th>
							                    <th width="15%">Price</th>
							                    <th width="15%" class="actions"></th>
							                </tr>
							            </thead>
							            <tbody class="no-border-x">
								            @foreach ($products as $product)
										    <tr>
							                    <td>{{ $product->brand }}</td>
							                    <td>{{ $product->model }}</td>
							                    <td>{{ $product->type }}</td>
							                    <td>RM {{ $product->price }}</td>
							                    <td class="actions"><a href="user/{{ $product->id }}" class="icon"><span class="label label-primary"><i class="mdi mdi-file"></i> View</span></a> <a href="user/{{ $product->id }}/delete" onclick="return confirm('Are you sure want to delete this user?')" class="icon"><span class="label label-danger"><i class="mdi mdi-delete"></i> Delete</span></a></td>
							                </tr>
							                @endforeach
							            </tbody>
							        </table>
							        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							        {{ $products->links() }}
							    </div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </body>
</html>