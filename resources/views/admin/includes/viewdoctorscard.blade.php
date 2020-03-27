<div class="card">
    <div class="card-header bg-purple">Danirose FMC Doctors</div>
      <div class="card-body">
        <div class="row">
          @foreach ($doctors as $doctor)
            <div class="col-sm-12 col-md-4 mb-3">
                <div class="card p-2 doctor-card">
                    <img class="card-img-top rounded-circle" src="../avatars/{{$doctor->user->avatar_path}}">
                    <h5 class="mt-1 mb-0 text-center">Dr {{$doctor->user->firstname}} {{$doctor->user->lastname}}</h5>
                    <p class="text-center mb-1">{{$doctor->specialization}}</p>
                    <a href="#" class="text-main mx-auto font-weight-bold">View Profile</a>
                </div>
            </div>
          @endforeach
      </div>
    </div>
    <div class="card-footer">
      {{ $doctors->links() }}
    </div>
 </div>