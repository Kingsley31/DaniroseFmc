<form method="POST" action="/register-user">
    @csrf
    <div class="card">
      <h4 class="text-center mt-4">Register</h4>
      <div class="bg-purple underline-title ml-auto mr-auto mt-2"></div>
      <div class="card-body">
        @if (session('error'))
            <div class="alert alert-danger w-75 mx-auto">{{session('error')}}</div>
        @endif
        <div class="form-row mt-0 mt-md-3">
            <div class="form-group col-sm-12 col-md-6 mb-4">
                <label class="sr-only" for="firstname">Firstname</label>
                <input type="text" name="firstname" value="{{ old('firstname') }}" placeholder="Firstname" class="form-control @error('firstname') is-invalid @enderror" id="firstname">
                @error('firstname')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-sm-12 col-md-6 mb-4">
                <label class="sr-only" for="lastname">Lastname</label>
                <input type="text" name="lastname" value="{{ old('lastname') }}" placeholder="Lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname">
                @error('lastname')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-sm-12 col-md-6 mb-4">
              <label class="sr-only" for="email">Email</label>
              <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control @error('email') is-invalid @enderror" id="email">
              @error('email')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group col-sm-12 col-md-6 mb-4">
                <label class="sr-only" for="phone">Phone</label>
                <input type="number" name="phone" value="{{ old('phone') }}" placeholder="Phone" class="form-control @error('phone') is-invalid @enderror" id="phone">
                @error('phone')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group col-sm-12 col-md-6">
              <label class="sr-only" for="password">Password</label>
              <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" id="password">
              @error('password')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label class="sr-only" for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation">
                @error('password_confirmation')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
        </div> 
      </div>
      <p class="ml-4">Already a member? <a href="/login">Login</a></p>
      
      <div>
        <button type="submit" class="btn login-btn btn-primary d-block mr-auto ml-auto mb-4">Register</button>
      </div>
    </div>
</form>