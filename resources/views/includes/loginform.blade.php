<form method="POST" action="/login-user">
    @csrf
    <div class="card">
      <h4 class="text-center mt-4">Login</h4>
      <div class="bg-purple underline-title ml-auto mr-auto mt-2"></div>
      <div class="card-body">
        @if (session('error'))
            <div class="alert alert-danger w-75 mx-auto">{{session('error')}}</div>
        @endif
        <div class="form-row mt-0 mt-md-3">
            <div class="form-group col-sm-12 mb-4">
              <label class="sr-only" for="email">Email</label>
              <input type="email" name="email" value="{{ old('email') }}" placeholder="Username" class="form-control @error('email') is-invalid @enderror" id="email">
              @error('email')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group col-sm-12">
              <label class="sr-only" for="password">Password</label>
              <input type="password" name="password" value="{{ old('password') }}" placeholder="Password" class="form-control @error('password') is-invalid @enderror" id="password">
              @error('password')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
        </div> 
      </div>
      <p class="ml-4">{{("Don't")}} have account? <a href="/register">Register</a></p>
      <p class="text-right ml-4 mr-4 mb-5"><i><a href="/forgot-password">Forgot Password</a></i></p>
      <div>
        <button type="submit" class="btn login-btn btn-primary d-block mr-auto ml-auto mb-4">Login</button>
      </div>
    </div>
</form>