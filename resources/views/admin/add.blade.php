@include('layouts.header')
    <body>
        <div class="be-wrapper be-fixed-sidebar">
	        
            
            @include('layouts.topbar')
            
            @include('layouts.left')
            <div class="be-content">
                <div class="main-content container-fluid">
                    <div class="row">
                        <div class="col-md-12">
	                        
							<div class="row">
							    <div class="col-md-12">
							        <div class="panel panel-default panel-border-color panel-border-color-primary">
							            <div class="panel-heading panel-heading-divider">Add New User<span class="panel-subtitle">All user account can be added here</span></div>
							            <div class="panel-body">
							                <form action="/admin/user" method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
								                @if ($errors->any())
								                	@foreach ($errors->all() as $error)
									                	<div role="alert" class="alert alert-danger alert-icon alert-dismissible">
														    <div class="icon"><span class="mdi mdi-close-circle-o"></span></div>
														    <div class="message">
														        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Whoops!</strong> {{ $error }}
														    </div>
														</div>
									                @endforeach
								                @endif
								                {!! csrf_field() !!}
							                    <div class="form-group">
							                        <label class="col-sm-3 control-label">Name</label>
							                        <div class="col-sm-6">
							                            <input type="text" name="name" class="form-control">
							                        </div>
							                    </div>
							                    <div class="form-group">
							                        <label class="col-sm-3 control-label">Email</label>
							                        <div class="col-sm-6">
							                            <input type="email" name="email" class="form-control">
							                        </div>
							                    </div>
							                    <div class="form-group">
												    <label class="col-sm-3 control-label">User Type</label>
												    <div class="col-sm-6">
												        <select name="usertype" class="form-control">
												            <option value="1">Admin</option>
												            <option value="2">Doctor</option>
												            <option value="3">Stokist</option>
												            <option value="4">Customer</option>
												        </select>
												    </div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">&nbsp;</label>
							                        <div class="col-sm-6">
							                            <input class="btn btn-info btn-block" type="submit" value="Submit">
							                        </div>
												</div>
							                </form>
							            </div>
							        </div>
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