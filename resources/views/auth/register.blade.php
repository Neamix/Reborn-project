@extends('theme::layouts.auth', ['alias'=>'Register'])

@section('content')
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {{ __('auth/register.title') }}
                        </div>
                        <div class="card-body">
                            @if(config('siteSettings.registration_close'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ __('auth/register.closed') }}
                                </div>
                            @endif
                            @if(!config('siteSettings.registration_close'))
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    @endif
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                   class="form-control @error('name') is-invalid @enderror" name="name"
                                                   placeholder="Enter your name"
                                                   value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            <small id="nameHelp" class="form-text text-muted">
                                                {{ __('auth/register.form.name-help') }}
                                            </small>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input id="silkroad_id" type="text"
                                                   class="form-control @error('silkroad_id') is-invalid @enderror"
                                                   name="silkroad_id" value="{{ old('silkroad_id') }}" required
                                                   placeholder="Silkroad ID"
                                                   autocomplete="off">
                                            <small id="silkroad_idHelp" class="form-text text-muted">
                                                {{ __('auth/register.form.silkroad-id-help') }}
                                            </small>
                                            @error('silkroad_id')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email"
                                                   placeholder="Enter email address"
                                                   value="{{ old('email') }}" required autocomplete="email">
                                            <small id="emailHelp" class="form-text text-muted">
                                                {{ __('auth/register.form.email-help') }}
                                            </small>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row pt-4">
                                        <div class="col-md-6">
                                            <input id="web_password" type="password"
                                                   class="form-control @error('web_password') is-invalid @enderror"
                                                   name="web_password" required autocomplete="new-password" placeholder="Web password">
                                            <small id="referralHelp" class="form-text text-muted">
                                                {{ __('auth/register.form.web-password-help') }}
                                            </small>
                                            @error('web_password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input id="web_password-confirm" type="password" class="form-control"
                                                   name="web_password_confirmation" required
                                                   placeholder="Web password confirmation"
                                                   autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="form-group row pt-4">
                                        <div class="col-md-6">
                                            <input id="sro_password" type="password"
                                                   class="form-control @error('sro_password') is-invalid @enderror"
                                                   placeholder="Game password"
                                                   name="sro_password" required autocomplete="new-password-2">
                                            <small id="sro_passwordHelp" class="form-text text-muted">
                                                {{ __('auth/register.form.game-password-help') }}
                                            </small>
                                            @error('sro_password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input id="sro_password-confirm" type="password" class="form-control"
                                                   name="sro_password_confirmation" required
                                                   placeholder="Game password confirmation"
                                                   autocomplete="new-password-2">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row pt-4">
                                        <div class="col-md-12">
                                            <input id="referral" type="text"
                                                   class="form-control @error('referral') is-invalid @enderror"
                                                   name="referral"
                                                   placeholder="Referral link"
                                                   value="{{ old('referral') ?: app('request')->input('r') }}">
                                            <small id="referralHelp" class="form-text text-muted">
                                                {{ __('auth/register.form.referral-help') }}
                                            </small>
                                            @error('referral')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="custom-control custom-checkbox">
                                                <input
                                                    class="custom-control-input{{ $errors->has('rules') ? ' is-invalid' : '' }}"
                                                    type="checkbox" name="rules"
                                                    id="rules" {{ old('rules') ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="rules">
                                                    <a href="{{ route('rules-index') }}"
                                                       target="_blank">{{ __('auth/register.form.rules') }}</a>
                                                </label>
                                                @if ($errors->has('rules'))
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('rules') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @if(!config('siteSettings.registration_close'))
                                        <div class="form-group row mb-0">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btn-primary-custom">
                                                    {{ __('auth/register.form.submit') }}
                                                </button>
                                            </div>
                                        </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection