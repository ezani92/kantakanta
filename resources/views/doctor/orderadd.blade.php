@include('doctor.header')
    <body>
        <div class="be-wrapper be-fixed-sidebar">
	        
            
            @include('doctor.topbar')
            
            @include('doctor.left')
            <div class="be-content">
                <div class="main-content container-fluid">
                    <div class="row">
                        <div class="col-md-12">
	                        
							<div class="panel panel-default panel-border-color panel-border-color-primary">
							    <div class="panel-heading panel-heading-divider">Add New Order<span class="panel-subtitle">Fill all field to add a new order</span></div>
							    <div class="panel-body">
							        <form method="post" action="/doctor/order">
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
											<div class="col-md-6">
												{!! csrf_field() !!}
									            <div class="form-group xs-pt-10">
									                <label>Patient IC Number</label>
									                <input type="text" name="patient_ic" class="form-control input-xs">
									            </div>
									            <div class="form-group">
									                <label>Patient Name</label>
									                <input type="text" name="patient_name" class="form-control input-xs">
									            </div>
									            <div class="form-group">
									                <label>Patient Email</label>
									                <input type="text" name="patient_email" class="form-control input-xs">
									            </div>
									            <div class="form-group">
									                <label>Mobile Phone No</label>
									                <input type="text" name="patient_phone" class="form-control input-xs">
									            </div>
									            <div class="form-group">
									                <label>MRN No</label>
									                <input type="text" name="patient_mrn" class="form-control input-xs">
									            </div>
									            <div class="form-group">
									                <label>Surgery Date</label>
									                <input type="date" name="surgery_date" class="form-control input-xs">
									            </div>
									            <div class="form-group">
									                <label>Surgery State</label>
									                <input type="text" name="surgery_state" class="form-control input-xs">
									            </div>
									            <div class="form-group">
									                <label>Surgery Hospital</label>
									                <input type="text" name="surgery_hospital" class="form-control input-xs">
									            </div>
									            <div class="form-group">
									                <label>Doctor Name</label>
									                <input type="text" name="doctor_name" class="form-control input-xs">
									            </div>
									            <div class="form-group xs-pt-10">
									                <label>Surgery Eyes</label>
									                <br />
									                <div class="be-radio inline">
							                        	<input type="radio" checked="" value="left" name="surgery_eye" id="rad1">
														<label for="rad1">Left (OS)</label>
							                        </div>
							                        <div class="be-radio inline">
							                        	<input type="radio" checked="" value="right" name="surgery_eye" id="rad2">
														<label for="rad2">Right (OD)</label>
							                        </div>
									            </div>
											</div>
											<div class="col-md-6">
									            <div class="form-group">
									                <label>Procedure</label>
									                <br />
									                <div class="be-radio inline">
							                        	<input type="radio" checked="" value="Phaco" name="procedure" id="rad3">
														<label for="rad3">Phaco</label>
							                        </div>
							                        <div class="be-radio inline">
							                        	<input type="radio" checked="" value="ECCE" name="procedure" id="rad4">
														<label for="rad4">ECCE</label>
							                        </div>
							                        <div class="be-radio inline">
							                        	<input type="radio" checked="" value="ICCE" name="procedure" id="rad5">
														<label for="rad5">ICCE</label>
							                        </div>
							                        <div class="be-radio inline">
							                        	<input type="radio" checked="" value="Lens Aspiration" name="procedure" id="rad6">
														<label for="rad6">Lens Aspiration</label>
							                        </div>
									            </div>
									            <div class="form-group">
												    <label>Product Brand</label>
												    <select name="product_brand" class="form-control input-x">
												        <option value="">Select</option>
												    </select>
												</div>
												<div class="form-group">
												    <label>Product Type</label>
												    <select name="product_type" class="form-control input-x">
												        <option value="">Select</option>
												    </select>
												</div>
												<div class="form-group">
									                <label>Power</label>
									                <input type="text" name="power" class="form-control input-xs">
									            </div>
									            <div class="form-group xs-pt-10">
									                <label>Product Option</label>
									                <br />
									                <div class="be-checkbox inline">
								                        <input name="product_option[]" id="check6" type="checkbox">
														<label for="check6">IOL Package</label>
							                        </div>
							                        <div class="be-checkbox inline">
								                        <input name="product_option[]" id="check7" type="checkbox">
														<label for="check7">OVD Package</label>
							                        </div>
									            </div>
									            <div class="form-group xs-pt-10">
									                <label>Backup Lens</label>
									                <br />
									                <div class="be-radio inline">
							                        	<input type="radio" checked="" value="yes" name="backup_lens" id="backup_lens1">
														<label for="backup_lens1">Yes</label>
							                        </div>
							                        <div class="be-radio inline">
							                        	<input type="radio" checked="" value="no" name="backup_lens" id="backup_lens2">
														<label for="backup_lens2">No</label>
							                        </div>
									            </div>
									            <div class="form-group">
												    <label>Collection Centre</label>
												    <select name="colection_centre" class="form-control input-x">
												        <option value="">Select</option>
												    </select>
												</div>
												<div class="form-group">
									                <label>Total Amount</label>
									                <input type="text" name="total_amount" class="form-control input-xs">
									            </div>
											</div>
											<button type="submit" class="btn btn-space btn-primary btn-block">Submit</button>
								        </div>
							        </form>
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