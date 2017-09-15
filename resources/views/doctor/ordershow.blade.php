@include('doctor.header')
    <body>
        <div class="be-wrapper be-fixed-sidebar">
	        
            
            @include('doctor.topbar')
            
            @include('doctor.left')
            <div class="be-content">
                <div class="main-content container-fluid">
                    <div class="row">
                        <div class="col-md-12">
	                    	<h3>{{ $order->patient->name }}</h3>
	                        
	                        
						</div>
					</div>
                </div>
            </div>
        </div>
        @include('doctor.footer')
    </body>
</html>