@extends('layouts.master');
@section('content')
<div class="card">
        <div class="card-header">
            <h5>Activities</h5>
        </div>
        <div class="card-body">
            <a href="/activities/create" class="btn btn-primary">Add Activities</a>
            <br><br>
            <table class="table table-bordered">
                <thead>
                     <tr>
                        <th>Date</th>
                        <th>Activity</th>
                        <th>Type of Activity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($activities as $activity)
                   <tr>
                        <td>{{ $activity->Date }}</td>
                        <td>{{ $activity->Activity }}</td>
                        <td>{{ $activity->Type_of_Activity }}</td>
                        <td>
                        <a href = '/activity/{{ $activity->id }}/edit' class="btn btn-primary">Edit Activity</a>
						<a href = '/activity/{{ $activity->id }}/delete' class="btn btn-primary">Delete Activity</a>
                        </td>
                   </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection