@extends('layouts.master')
@section('content')
	<div class="card">
		<div class="card-header">
			<h5>Add Activities</h5>
		</div>	
	</div>

	<div class="card-body">
		<form action="/activities/store" method="POST">
			@csrf
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
					<label for="">Date</label>
					<input type="date" class="form-control" name="Date" required>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="form-group">
					<label for="">Activity</label>
					<input type="text" class="form-control" name="Activity" required>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="form-group">
					<label for="">Type of Activity</label>
					<input type="text" class="form-control" name="Type_of_Activity" required>
					</div>
				</div>
                </div>

				<div class="row">
					<div class="col-sm-12 d-flex justify-content-end">
						<button class="btn btn-primary">Submit</button>
					</div>
				</div>
		</form>
	</div>
@endsection