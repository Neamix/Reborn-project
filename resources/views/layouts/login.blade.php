@guest
<div class="card">
    <div class="card-header">
        <p class="font-weight-light pt-2 pb-2 font-weight-bold">Login</p>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <div class="w-100 mb-4">
                    <input id="email" type="email"
                           class="form-control w-100 @error('email') is-invalid @enderror"
                           placeholder="Enter email address"
                           name="email"
                           value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div>
                <div class="w-100">
                    <input id="password" type="password"
                           class="form-control w-100 @error('password') is-invalid @enderror"
                           placeholder="Enter Password"
                           name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="w-100">
                    <div class="form-check m-3">
                        <input class="form-check-input" type="checkbox" name="remember"
                               id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                        <label class="form-check-label" for="remember">
                            {{ __('auth/login.form.remember') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-primary-custom">
                        {{ __('auth/login.form.submit') }}
                    </button>
                </div>
            </div>
        </form>   
        
    </div>
</div>   
@endguest