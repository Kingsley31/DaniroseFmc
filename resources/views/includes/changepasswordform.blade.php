<form method="POST" action="/reset-password">
    @csrf
    <div class="card">
      <h4 class="text-center mt-4">Change Password</h4>
      <div class="bg-purple underline-title ml-auto mr-auto mt-2"></div>
      <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success w-75 mx-auto">{{session('status')}}</div>
        @endif
        <input type="hidden" name="email" value="{{$email}}">
        <input type="hidden" name="code" value="{{$code}}">
        <div class="form-row mt-0 mt-md-3">
            <div class="form-group col-sm-12 col-md-6">
              <label class="sr-only" for="firstname">Passsword</label>
              <input type="password" name="password" value="{{ old('password') }}" placeholder="Passsword" class="form-control @error('password') is-invalid @enderror" id="passsword">
              @error('password')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group col-sm-12 col-md-6">
              <label class="sr-only" for="lastname">Confirm Password</label>
              <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation">
              @error('password_confirmation')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
        </div> 
      </div>
      <div>
        <button type="submit" class="btn btn-primary d-block mr-auto ml-auto mb-4">Change Password</button>
      </div>
    </div>
</form>