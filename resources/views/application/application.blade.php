@extends('layouts.app')

@section('content')
  <div class="container font-montserrat">
      <p class="text-center text-light"> Please use as much detail as possible when applying! </p>

      <form  method="POST" action='/post/create'>
        @csrf
            <div class="form-square p-3 mb-5">
                <div class="form-group">
                    <label for="question1"><b>What is your age?</b></label>
                    <textarea class="form-control" id="question1" rows="3"></textarea>
                  </div>
            </div>

            <div class="form-square p-3 mb-5">
                <div class="form-group">
                    <label for="title" class="col-md-4 col-form-label text-md-right">What is your age?</label>
        
                    
                        <input id="title" type="text" class="form-control w-25{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}"  autofocus>
        
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    
                </div>  
            </div>

            
            <div class="form-square p-3 mb-5">
              <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Send application!') }}
                          </button>
                      </div>
              </div>
            </div>
    
    
    
          {{-- <button class="btn m-2" type="submit">enviar</button> --}}
      </form>

  
  </div>

@endsection
