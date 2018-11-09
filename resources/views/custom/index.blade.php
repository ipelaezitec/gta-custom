@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="custom-card-register">
          <div class="card-header">{{ __('Custom') }}</div>
            <div class="card-body">
              <form method="POST" action=" {{ route('store') }} "> 
                  @csrf
                  <div class="form-group row">
                      <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>

                      <div class="col-md-6">
                          <input id="logo" type="url" class="form-control{{ $errors->has('logo') ? ' is-invalid' : '' }}" name="logo" value="{{ (isset($custom)? $custom->logourl : old('logo')) }}" placeholder="url logo" required autofocus>

                          @if ($errors->has('logo'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('logo') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="background" class="col-md-4 col-form-label text-md-right">{{ __('Background') }}</label>

                      <div class="col-md-6">
                          <input id="background" type="url" class="form-control{{ $errors->has('background') ? ' is-invalid' : '' }}" name="background" value="{{ (isset($custom)? $custom->backgroundurl : old('background')) }}" placeholder="url background" required autofocus>

                          @if ($errors->has('background'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('background') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="video" class="col-md-4 col-form-label text-md-right">{{ __('Video') }}</label>

                      <div class="col-md-6">
                          <input id="video" type="url" class="form-control{{ $errors->has('video') ? ' is-invalid' : '' }}" name="video" value="{{ (isset($custom)? $custom->videourl : old('video')) }}" placeholder="url video" required autofocus>

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
                          <input id="color" type="color" class="col-6" name="color" value="{{ old('color') }}" onchange="javascript:document.getElementById('chosen-color').value = document.getElementById('color').value;">
                          <input id="chosen-color" type="text" class="col-5 form-control{{$errors->has('chosen-color') ? ' is-invalid' : '' }}" name="chosen-color" value="{{ (isset($custom)? $custom->color : old('chosen-color')) }}" onchange="javascript:document.getElementById('color').value = document.getElementById('chosen-color').value;" required autofocus>
                          
                          @if ($errors->has('chosen-color'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('chosen-color') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <label for="image1" class="col-md-8 col-form-label text-md-right">{{ __('Carousel images') }}</label>
                  <div class="form-group row">
                      <label for="image1" class="col-md-4 col-form-label text-md-right">{{ __('Image1') }}</label>

                      <div class="col-md-6">
                          <input id="image1" type="url" class="form-control{{ $errors->has('image1') ? ' is-invalid' : '' }}" name="image1" value="{{ (isset($images)? $images->url : old('imagen1')) }}" placeholder="url image1" required autofocus>
                          @if ($errors->has('image1'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('image1') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="image2" class="col-md-4 col-form-label text-md-right">{{ __('Image2') }}</label>

                      <div class="col-md-6">
                          <input id="image2" type="url" class="form-control{{ $errors->has('image2') ? ' is-invalid' : '' }}" name="image2" value="{{ old('image2') }}" placeholder="url image2"  autofocus>
                          @if ($errors->has('image2'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('image2') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="image3" class="col-md-4 col-form-label text-md-right">{{ __('Image3') }}</label>

                      <div class="col-md-6">
                          <input id="image3" type="url" class="form-control{{ $errors->has('image3') ? ' is-invalid' : '' }}" name="image3" value="{{ old('image3') }}" placeholder="url image3"  autofocus>
                          @if ($errors->has('image3'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('image3') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="image4" class="col-md-4 col-form-label text-md-right">{{ __('Image4') }}</label>

                      <div class="col-md-6">
                          <input id="image4" type="url" class="form-control{{ $errors->has('image4') ? ' is-invalid' : '' }}" name="image4" value="{{ old('image4') }}" placeholder="url image4"   autofocus>
                          @if ($errors->has('image4'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('image4') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="image5" class="col-md-4 col-form-label text-md-right">{{ __('Image5') }}</label>

                      <div class="col-md-6">
                          <input id="image5" type="url" class="form-control{{ $errors->has('image5') ? ' is-invalid' : '' }}" name="image5" value="{{ old('image5') }}" placeholder="url image5"  autofocus>
                          @if ($errors->has('image5'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('image5') }}</strong>
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