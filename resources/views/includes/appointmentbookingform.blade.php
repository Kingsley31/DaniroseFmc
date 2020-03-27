<form method="POST" action="/appointment/home/book">
    @csrf
    <div class="card">
      <h4 class="text-center mt-4">Book A Specialist</h4>
      <div class="bg-purple underline-title ml-auto mr-auto mt-2"></div>
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
              <label class="sr-only" for="city">City</label>
              <select name="city" value="{{ old('city') }}" class="form-control @error('city') is-invalid @enderror" id="city">
                @isset($city)
                    <option value="{{$city}}">{{$city}}</option>
                @endisset
                <option value="0">Choose City</option>
                @foreach ($cities as $city)
                    <option value="{{$city->city_name}}">{{$city->city_name}}</option>
                @endforeach
              </select>
              @error('city')
                    <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label class="sr-only" for="specialization">Specialization</label>
                <select name="specialization" value="{{ old('specialization') }}" id="specialization" class="form-control @error('specialization') is-invalid @enderror">
                  @isset($specialization)
                    <option value="{{$specialization}}">{{$specialization}}</option>
                  @endisset
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
        <div class="form-row mt-0 mt-md-3">
            <div class="form-group col-sm-12 col-md-6">
              <label class="sr-only" for="date">Date</label>
              <input type="text" name="date" value="{{ old('date') }}" placeholder="Date example: 12/03/2020" class="form-control @error('date') is-invalid @enderror" id="date">
              @error('date')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group col-sm-12 col-md-6">
              <label class="sr-only" for="time">Time</label>
              <input type="text" name="time" value="{{ old('time') }}" placeholder="Time example: 11:00pm" class="form-control @error('time') is-invalid @enderror" id="time">
              @error('time')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
        </div>
        <div class="form-row mt-0 mt-md-3">
            <div class="col-12 form-group">
                <label for="complaint" class="sr-only">Complaint</label>
                <textarea name="complaint" id="complaint" cols="30" rows="5" class="form-control @error('complaint') is-invalid @enderror" placeholder="Complaint">{{ old('complaint') }}</textarea>
            </div>
        </div>
        
      </div>
      <div>
        <button type="submit" class="btn btn-primary d-block mr-auto ml-auto mb-4">Submit Booking</button>
      </div>
    </div>
</form>