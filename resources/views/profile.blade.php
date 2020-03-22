@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Benutzer</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateUser') }}">
                        @csrf

                        <input name="id" value="{{ Auth::user()->id }}" hidden/>
                        <div class="form-group row">
                            <label for="industry" class="col-md-4 col-form-label text-md-right">{{ __('Branche *') }}</label>

                            <div class="col-md-6">
                                <input id="industry" type="text" class="form-control @error('industry') is-invalid @enderror" name="industry" value="{{ Auth::user()->industry }}" required autocomplete="industry" autofocus>

                                @error('industry')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name *') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Straße, Nummer *') }}</label>

                            <div class="col-md-6">
                                <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ Auth::user()->street }}" required autocomplete="street" autofocus>

                                @error('street')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zip-code" class="col-md-4 col-form-label text-md-right">{{ __('Postleitzahl *') }}</label>

                            <div class="col-md-6">
                                <input id="zip-code" type="text" class="form-control @error('zip-code') is-invalid @enderror" name="zip-code" value="{{ Auth::user()->zip_code }}" required autocomplete="zip-code" autofocus>

                                @error('zip-code')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Ort *') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ Auth::user()->city }}" required autocomplete="city" autofocus>

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Land *') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ Auth::user()->country  }}" required autocomplete="country">

                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tax-id" class="col-md-4 col-form-label text-md-right">{{ __('Steuer-ID *') }}</label>

                            <div class="col-md-6">
                                <input id="tax-id" type="text" class="form-control @error('tax-id') is-invalid @enderror" name="tax-id" value="{{ Auth::user()->tax_id }}" required autocomplete="tax-id" autofocus>

                                @error('tax-id')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vat-id" class="col-md-4 col-form-label text-md-right">{{ __('Umsatzsteuer-ID') }}</label>

                            <div class="col-md-6">
                                <input id="vat-id" type="text" class="form-control @error('vat-id') is-invalid @enderror" name="vat-id" value="{{ Auth::user()->vat_id }}" autocomplete="vat-id">

                                @error('vat-id')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="reg-id" class="col-md-4 col-form-label text-md-right">{{ __('Handelsregister-Nr.') }}</label>

                            <div class="col-md-6">
                                <input id="reg-id" type="text" class="form-control @error('reg-id') is-invalid @enderror" name="reg-id" value="{{ Auth::user()->reg_id }}" autocomplete="reg-id">

                                @error('reg-id')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="iban" class="col-md-4 col-form-label text-md-right">{{ __('IBAN *') }}</label>

                            <div class="col-md-6">
                                <input id="iban" type="text" class="form-control @error('iban') is-invalid @enderror" name="iban" value="{{ Auth::user()->iban }}" required autocomplete="iban">

                                @error('iban')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Absenden') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><br/>
        </div>
        <div class="col-md-6">
          <div class="card">
              <div class="card-header">Angaben zum letzten Jahr</div>

              <div class="card-body">
                  <form method="POST" action="{{ route('addRevLast') }}" enctype="multipart/form-data">
                      @csrf

                      <input name="id" value="{{ Auth::user()->id }}" hidden/>

                      <div class="form-group row">
                          <label for="rev-last" class="col-md-4 col-form-label text-md-right">{{ __('Umsatz 2019 *') }}</label>

                          <div class="col-md-6">
                              <input id="rev-last" type="text" class="form-control @error('rev-last') is-invalid @enderror" name="rev-last" required autocomplete="rev-last">

                              @error('rev-last')
                              <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="tax-ret" class="col-md-4 col-form-label text-md-right">{{ __('Steuererklärung / EÜR 2019 *') }}</label>

                          <div class="col-md-6">
                              <input id="tax-ret" type="file" class="form-control @error('tax-ret') is-invalid @enderror" name="tax-ret" required autocomplete="tax-ret" accept=".pdf">

                              @error('tax-ret')
                              <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Absenden') }}
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div><br/>
          <div class="card">
              <div class="card-header">Angaben zum aktuellen Jahr</div>

              <div class="card-body">
                  <form method="POST" action="{{ route('addRevCurrent') }}">
                      @csrf

                      <input name="id" value="{{ Auth::user()->id }}" hidden/>

                      <div class="form-group row">
                          <label for="rev-real" class="col-md-4 col-form-label text-md-right">{{ __('Bisheriger Umsatz 2020 *') }}</label>

                          <div class="col-md-6">
                              <input id="rev-real" type="text" class="form-control @error('rev-real') is-invalid @enderror" name="rev-real" required autocomplete="rev-real">

                              @error('rev-real')
                              <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="start-date" class="col-md-4 col-form-label text-md-right">{{ __('Startdatum *') }}</label>

                          <div class="col-md-6">
                              <input id="start-date" type="date" class="form-control @error('start-date') is-invalid @enderror" name="start-date" required autocomplete="start-date">

                              @error('start-date')
                              <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="end-date" class="col-md-4 col-form-label text-md-right">{{ __('Enddatum *') }}</label>

                          <div class="col-md-6">
                              <input id="end-date" type="date" class="form-control @error('end-date') is-invalid @enderror" name="end-date" required autocomplete="end-date">

                              @error('end-date')
                              <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="rev-exp" class="col-md-4 col-form-label text-md-right">{{ __('Bisheriger erwarteter Umsatz 2020 *') }}</label>

                          <div class="col-md-6">
                              <input id="rev-exp" type="text" class="form-control @error('rev-exp') is-invalid @enderror" name="rev-exp" required autocomplete="rev-exp">

                              @error('rev-exp')
                              <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Absenden') }}
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
