@include('layouts.header')
    <body>
        <div class="be-wrapper be-fixed-sidebar">
	        
            
            @include('layouts.topbar')
            
            @include('layouts.left')
            <div class="be-content">
                <div class="main-content container-fluid">
                    <div class="row">
                        <div class="col-md-12">
	                    	<h3>User List</h3>
	                    	@if(Session::has('message'))
							<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
							@endif
	                        <div class="panel panel-default panel-table">
							    <div class="panel-body">
							        <table class="table table-striped table-borderless">
							            <thead>
							                <tr>
							                    <th>Name</th>
							                    <th>Email</th>
							                    <th>User Type</th>
							                    <th>Date & Time Register</th>
							                    <th class="actions"></th>
							                </tr>
							            </thead>
							            <tbody class="no-border-x">
								            @foreach ($users as $user)
										    <tr>
							                    <td>{{ $user->name }}</td>
							                    <td>{{ $user->email }}</td>
							                    @if ($user->guard == 1)
							                    <td>Admin</td>
							                    @elseif ($user->guard == 2)
							                    <td>Doctor</td>
							                    @elseif ($user->guard == 3)
							                    <td>Stockist</td>
							                    @elseif ($user->guard == 4)
							                    <td>Patient</td>
							                    @endif
							                    <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d M Y, h:i A') }}</td>
							                    <td class="actions"><a href="user/{{ $user->id }}" class="icon"><span class="label label-primary"><i class="mdi mdi-file"></i> View</span></a> <a href="user/{{ $user->id }}/delete" onclick="return confirm('Are you sure want to delete this user?')" class="icon"><span class="label label-danger"><i class="mdi mdi-delete"></i> Delete</span></a></td>
							                </tr>
							                @endforeach
							            </tbody>
							        </table>
							        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							        {{ $users->links() }}
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