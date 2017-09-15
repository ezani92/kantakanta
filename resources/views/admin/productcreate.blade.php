@include('layouts.header')
    <body>
        <div class="be-wrapper be-fixed-sidebar">
	        
            
            @include('layouts.topbar')
            
            @include('layouts.left')
            <div class="be-content">
                <div class="main-content container-fluid">
                    <div class="row">
                        <div class="col-md-12">
	                        
							<div class="panel panel-default panel-border-color panel-border-color-primary">
							    <div class="panel-heading panel-heading-divider">Add New Product<span class="panel-subtitle">Fill all field to add a new product</span></div>
							    <div class="panel-body">
							        <form method="POST" action="/admin/product">
								        <div class="row">
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
											<div class="col-md-12">
												{!! csrf_field() !!}
									            <div class="form-group xs-pt-10">
									                <label>Brand</label>
									                <input type="text" name="product_brand" class="form-control input-s">
									            </div>
									            <div class="form-group">
									                <label>Model</label>
									                <input type="text" name="product_model" class="form-control input-s">
									            </div>
									            <div class="form-group">
									                <label>Type</label>
									                <input type="text" name="product_type" class="form-control input-s">
									            </div>
									            <div class="form-group">
									                <label>Design</label>
									                <input type="text" name="product_design" class="form-control input-s">
									            </div>
									            <div class="form-group">
									                <label>Backup Iol</label>
									                <input type="text" name="product_backup_iol" class="form-control input-s">
									            </div>
									            <div class="form-group">
									                <label>Viscoelastic</label>
									                <input type="text" name="product_viscoeastic" class="form-control input-s">
									            </div>
									            <div class="form-group">
									                <label>Price (include With Gst)</label>
									                <input type="text" name="product_price" class="form-control input-s">
									            </div>
									        </div>
									        <button type="submit" class="btn btn-block btn-info">Add New Product</button>
								        </div>	
							        </form>
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