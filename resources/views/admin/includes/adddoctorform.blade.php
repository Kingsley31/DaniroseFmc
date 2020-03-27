<form method="POST" action="/adddoctor" enctype="multipart/form-data">
    @csrf
    <div class="card">
      <div class="card-header bg-purple">Add Doctor</div>
      <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success w-75 mx-auto">{{session('status')}}</div>
        @endif
        <div class="form-row mt-0 mt-md-3">
            <div class="form-group col-sm-12 col-md-6">
              <label class="sr-only" for="firstname">Firstname</label>
              <input type="text" name="firstname" value="{{ old('firstname') }}" placeholder="Firstname" class="form-control @error('firstname') is-invalid @enderror" id="firstname">
              @error('firstname')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group col-sm-12 col-md-6">
              <label class="sr-only" for="lastname">Lastname</label>
              <input type="text" name="lastname" value="{{ old('lastname') }}" placeholder="Lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname">
              @error('lastname')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
        </div>
        <div class="form-row mt-0 mt-md-3">
            <div class="form-group col-sm-12 col-md-6">
              <label class="sr-only" for="phone">Phone</label>
              <input type="number" name="phone" value="{{ old('phone') }}" placeholder="Phone" class="form-control @error('phone') is-invalid @enderror" id="phone">
              @error('phone')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group col-sm-12 col-md-6">
              <label class="sr-only" for="email">Email</label>
              <input type="text" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control @error('email') is-invalid @enderror" id="email">
              @error('email')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
        </div>
        <div class="form-row mt-0 mt-md-3">
            <div class="form-group col-sm-12 col-md-6">
              <div class="custom-file">
                <input type="file" name="avatar" value="{{ old('avatar') }}" class="custom-file-input @error('avatar') is-invalid @enderror" id="customFile">
                <label class="custom-file-label" for="customFile">Choose Image</label>
                @error('avatar')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>
            </div>
            <div class="form-group col-sm-12 col-md-6">
              <label class="sr-only" for="city">City</label>
              <select name="city" value="{{ old('city') }}" class="form-control @error('city') is-invalid @enderror" id="city">
                <option value="0">Choose City</option>
                @foreach ($cities as $city)
                    <option value="{{$city->city_name}}">{{$city->city_name}}</option>
                @endforeach
              </select>
              @error('city')
                    <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
        </div>
        <div class="form-row mt-0 mt-md-3">
            <div class="form-group col-sm-12 col-md-6">
              <label class="sr-only" for="specialization">Specialization</label>
              <select name="specialization" value="{{ old('specialization') }}" id="specialization" class="form-control @error('specialization') is-invalid @enderror">
                <option value="0">Choose Specilization</option>
                @foreach ($specializations as $specialization)
                    <option value="{{$specialization->name}}">{{$specialization->name}}</option>
                @endforeach
              </select>
              @error('specialization')
                    <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary pull-right">Add Doctor</button>
      </div>
    </div>
</form>