@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="custom-card-register">
          <div class="card-header">{{ __('Custom') }}</div>
            <div class="card-body">
              <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="form-group row">
                      <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>

                      <div class="col-md-6">
                          <input id="logo" type="url" class="form-control{{ $errors->has('logo') ? ' is-invalid' : '' }}" name="logo" value="{{ old('logo') }}" placeholder="url logo" required autofocus>

                          @if ($errors->has('logo'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('logo') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="video" class="col-md-4 col-form-label text-md-right">{{ __('Video') }}</label>

                      <div class="col-md-6">
                          <input id="video" type="url" class="form-control{{ $errors->has('video') ? ' is-invalid' : '' }}" name="video" value="{{ old('video') }}" placeholder="url video" required autofocus>

                          @if ($errors->has('video'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('video') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="color" class="col-md-4 col-form-label text-md-right">{{ __('Color') }}</label>

                      <div class="col-md-6">
                          <input id="color" type="color" class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" value="{{ old('color') }}" required autofocus>
                          @if ($errors->has('color'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('color') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <label for="image" class="col-md-8 col-form-label text-md-right">{{ __('Carousel images') }}</label>
                  <div class="form-group row">
                      <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image1') }}</label>

                      <div class="col-md-6">
                          <input id="image1" type="url" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image1" value="{{ old('image') }}" placeholder="url image1" required autofocus>
                          @if ($errors->has('image'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('image') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image2') }}</label>

                      <div class="col-md-6">
                          <input id="image2" type="url" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image2" value="{{ old('image') }}" placeholder="url image2" required autofocus>
                          @if ($errors->has('image'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('image') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image3') }}</label>

                      <div class="col-md-6">
                          <input id="image3" type="url" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image3" value="{{ old('image') }}" placeholder="url image3" required autofocus>
                          @if ($errors->has('image'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('image') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image4') }}</label>

                      <div class="col-md-6">
                          <input id="image4" type="url" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image4" value="{{ old('image') }}" placeholder="url image3" required autofocus>
                          @if ($errors->has('image'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('image') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image5') }}</label>

                      <div class="col-md-6">
                          <input id="image5" type="url" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image5" value="{{ old('image') }}" placeholder="url image3" required autofocus>
                          @if ($errors->has('image'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('image') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="mx-auto btn appli-button">
                                    {{ __('Apply') }}
                                </button>
                            </div>
                        </div>
                    </form>
              </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection