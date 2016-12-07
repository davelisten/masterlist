@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="container">
				<h2 class="page-header" style="color: #800000;">
					Personal Information
				</h2>
				<form>
					<div class="form-group">
						<div class="col-md-3">
							<label for="exampleInputEmail1">Last Name</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last Name">
						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1">First Name</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name">
						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1">Middle Name</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Middle Name">
						</div>
						<div class="col-md-1">
							<label for="exampleInputEmail1">Suffix</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Suffix">
						</div>
						<div class="col-md-2">
							<label for="exampleInputEmail1">Nick Name</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nick Name">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-3">
							<label for="exampleInputEmail1">Civil Status</label>
							<select class="form-control">
								<option></option>
								<option>Single</option>
								<option>Married</option>
								<option>Widow/Widower</option>
								<option>Legally Separated</option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1">Gender</label>
							<select class="form-control">
								<option></option>
								<option>Female</option>
								<option>Male</option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1">Birth Date</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Birth Date">
						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1">Birth Place</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Birth Place">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4">
							<label for="exampleInputEmail1">Religion</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Religion">
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Contact No.</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact No.">
						</div>
						<div class="col-md-4">
							<label for="exampleInputEmail1">Email Address</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							<label for="exampleInputEmail1">Present Address</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Present Address">
						</div>
						<div class="col-md-6">
							<label for="exampleInputEmail1">Permanent Address</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Permanent Address">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-3">
							<label for="exampleInputEmail1">TIN</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="TIN">
						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1">SSS</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="SSS">
						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1">Philhealth</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Philhealth">
						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1">Pag-ibig</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Pag-ibig">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							<label for="exampleInputEmail1">Father's Name</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Father's Name">
						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1">Birth Date</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Birth Date">
						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1">Occupation</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Occupation">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							<label for="exampleInputEmail1">Mother's Name</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Mother's Name">
						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1">Birth Date</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Birth Date">
						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1">Occupation</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Occupation">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							<label for="exampleInputEmail1">Spouse's Name</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Spouse's Name">
						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1">Date of Marriage</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Birth Date">
						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1">Occupation</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Occupation">
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="exampleInputEmail1">Contact Person</label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact Person">
							</div>
							<div class="col-md-3">
								<label for="exampleInputEmail1">Relation</label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Relation">
							</div>
							<div class="col-md-3">
								<label for="exampleInputEmail1">Cotact No.</label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact No.">
							</div>
							<div class="col-md-3">
								<label for="exampleInputEmail1">Address</label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address">
							</div>
						</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="container">

				<h2 class="page-header" style="color: #800000;">
					Educational Attainement
				</h2>
				<form>
					<div class="row">
						<div class="container">
							<div class="form-group">
								<h4 class="page-header" style="color: #800000;">
									Primary / Elementary
								</h4>
								<div class="col-md-1">
									<label for="exampleInputEmail1">Level</label>
									<select class="form-control">
										<option></option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
									</select>
								</div>
								<div class="col-md-7">
									<label for="exampleInputEmail1">Name of School</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of School">
								</div>
								<div class="col-md-2">
									<label for="exampleInputEmail1">Year Started</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Year Start">
								</div>
								<div class="col-md-2">
									<label for="exampleInputEmail1">Year Ended</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Year End">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="container">
							<div class="form-group">
								<h4 class="page-header" style="color: #800000;">
									High School
								</h4>
								<div class="col-md-1">
									<label for="exampleInputEmail1">Level</label>
									<select class="form-control">
										<option></option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</div>
								<div class="col-md-7">
									<label for="exampleInputEmail1">Name of School</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of School">
								</div>
								<div class="col-md-2">
									<label for="exampleInputEmail1">Year Started</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Year Start">
								</div>
								<div class="col-md-2">
									<label for="exampleInputEmail1">Year Ended</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Year End">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="container">
							<div class="form-group">
								<h4 class="page-header" style="color: #800000;">
									College
								</h4>
								<div class="col-md-1">
									<label for="exampleInputEmail1">Level</label>
									<select class="form-control">
										<option></option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
								<div class="col-md-11">
									<label for="exampleInputEmail1">Course Completed</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Course Completed">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Name of School</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of School">
								</div>
								<div class="col-md-2">
									<label for="exampleInputEmail1">Year Started</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Year Start">
								</div>
								<div class="col-md-2">
									<label for="exampleInputEmail1">Year Ended</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Year End">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="container">
							<div class="form-group">
								<h4 class="page-header" style="color: #800000;">
									Vocational
								</h4>
								<div class="col-md-1">
									<label for="exampleInputEmail1">Level</label>
									<select class="form-control">
										<option></option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
								<div class="col-md-11">
									<label for="exampleInputEmail1">Course Completed</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Course Completed">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Name of School</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of School">
								</div>
								<div class="col-md-2">
									<label for="exampleInputEmail1">Year Started</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Year Start">
								</div>
								<div class="col-md-2">
									<label for="exampleInputEmail1">Year Ended</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Year End">
								</div>
							</div>
						</div>
					</div>
			</div>
			</form>
			<div class="row">
				<div class="container">

					<h2 class="page-header" style="color: #800000;">
						Working Experience
					</h2>
					<form>
						<div class="row">
							<div class="container">
								<div class="col-md-5">
									<label for="exampleInputEmail1">Company</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Company">
								</div>
								<div class="col-md-5">
									<label for="exampleInputEmail1">Address</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address">
								</div>
								<div class="col-md-2">
									<label for="exampleInputEmail1">Contact No.</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Position">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="container">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Position</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Position">
								</div>
								<div class="col-md-2">
									<label for="exampleInputEmail1">Year Started</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Year Start">
								</div>
								<div class="col-md-2">
									<label for="exampleInputEmail1">Year Ended</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Year End">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row" style="padding-top: 10px; padding-bottom: 50px;">
			<div class="container">
				<form>
					<div class="container">
						<div class="col-md-12">
							<div class="form-group col-md-1 col-md-offset-11">
								<button type="submit" class="btn btn-danger">Submit</button>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>

	</div> <!-- /container -->

@stop