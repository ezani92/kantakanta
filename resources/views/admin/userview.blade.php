@include('layouts.header')
    <body>
        <div class="be-wrapper be-fixed-sidebar">
	        
            
            @include('layouts.topbar')
            
            @include('layouts.left')
            <div class="be-content">
                <div class="main-content container-fluid">
                    <div class="row">
                        <div class="col-md-12">
	                    	<h3>{{ $user-> name }}</h3>
	                        
	                        Email : {{ $user-> email }}
						</div>
					</div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </body>
</html>