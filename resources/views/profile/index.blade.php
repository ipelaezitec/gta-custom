@extends('layouts.app')

@section('appcontent')
    <h2 class="text-center font-montserrat"> Customization Panel</h2>
<hr>
<div class="container p-5 font-montserrat">

    <div class="row justify-content-center">
      <div class="col-md-12">
        {{-- <div class="custom-card-register"> --}}
          {{-- <div class="card-header">{{ __('Custom') }}</div> --}}
          @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
          @endif
            <div class="card-body">
              <form method="POST" action=" {{ route('store') }} " onsubmit="return confirm('Save changes?');"> 
                  @csrf
                  <div class="form-group row">
                      <label for="logo" class="col-md-2 col-form-label text-md-right">{{ __('Logo') }}</label>

                      <div class="col-md-8">
                          <input id="logo-input" type="url" class="form-control {{ $errors->has('logo') ? ' is-invalid' : '' }}" name="logo" value="{{ (isset($custom)? $custom->logourl : old('logo')) }}" placeholder="url logo" onchange="javascript:document.getElementById('logo-preview').src = document.getElementById('logo-input').value; document.getElementById('logo-preview').style.display = 'block';" required autofocus>
                          @if ($errors->has('logo'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('logo') }}</strong>
                              </span>
                          @endif
                      </div>
                    <div class="col-md-2 div-preview">
                        @if (isset($custom))
                            <img id="logo-preview" src="{{ $custom->logourl }}" class="img-fluid img-thumbnail" title="logo" alt="Error">
                        @else
                            <img id="logo-preview" src="" class="img-fluid img-thumbnail" title="logo" style="display: none;" alt="Error"> 
                        @endif
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="background" class="col-md-2 col-form-label text-md-right">{{ __('Background') }}</label>

                      <div class="col-md-8">
                          <input id="background-input" type="url" class="form-control{{ $errors->has('background') ? ' is-invalid' : '' }}" name="background" value="{{ (isset($custom)? $custom->backgroundurl : old('background')) }}" placeholder="url background" onchange="javascript:document.getElementById('background-preview').src = document.getElementById('background-input').value; document.getElementById('background-preview').style.display = 'block';" required autofocus>

                          @if ($errors->has('background'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('background') }}</strong>
                              </span>
                          @endif
                      </div>
                       <div class="col-md-2 div-preview">
                        @if (isset($custom))
                            <img id="background-preview" src="{{ $custom->backgroundurl }}" class="img-fluid img-thumbnail" title="background" alt="Error">
                        @else
                            <img id="background-preview" src="" class="img-fluid img-thumbnail" title="background" style="display: none;" alt="Error">
                        @endif
                    </div>
                  </div>
                
                <div class="form-group row mb-0 mt-5">
                        <div class="col-md-4 offset-md-4">
                            <button type="submit" class="mx-auto btn appli-button">
                                {{ __('Apply') }}
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