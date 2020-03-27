<div class="card">
    <div class="card-header bg-purple">Appointments</div>
    <div class="card-body table-responsive">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Phone</th>
                <th scope="col">Specialization</th>
                <th scope="col">Complaint</th>
                <th scope="col">Appointment Date</th>
                <th scope="col">Appointment Time</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                @empty($appointments)
                    <div>No available appointments</div>
                @endempty

                @foreach ($appointments as $appointment)
                  <tr>
                    <th scope="row">{{$appointment->id}}</th>
                    <td>{{$appointment->user->firstname}}</td>
                    <td>{{$appointment->user->lastname}}</td>
                    <td>{{$appointment->user->phone}}</td>
                    <td>{{$appointment->specialization}}</td>
                    <td>{{$appointment->complaint}}</td>
                    <td>{{$appointment->date}}</td>
                    <td>{{$appointment->time}}</td>
                    <td>
                    @if ($appointment->status == 1)
                        <span class="text-success">completed</span>
                    @elseif($appointment->status == 0)
                        <span class="text-danger">pending</span>
                    @endif
                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @isset($appointments->links)
      <div class="card-footer">{{$appointments->links}}</div>
    @endisset
    
</div>