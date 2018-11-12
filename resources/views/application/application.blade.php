@extends('layouts.app')

@section('content')
  <div class="container font-montserrat">
      <p class="text-center text-light"> Please use as much detail as possible when applying! </p>

      <form  method="POST" action=" {{ route('appcreate') }} " >
          @csrf
            <div class="form-square p-3 mb-5">

                <div class="form-group">
                    <label for="question1">
                      <b>
                        What is your name?
                      </b>
                    </label>
                    
                    <input id="question1" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="question1"  value="{{ old('question1') }}" required maxlenght="100" autofocus>

                    @if ($errors->has('question1'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('question1') }}</strong>
                      </span>
                     @endif
                    {{-- value="{{ (isset($custom)? $custom->logourl : old('name')) }}" --}}
                </div>
                
                <hr>
                <div class="form-group">
                    <label for="age">
                      <b>
                        What is your age?
                      </b>
                    </label>
                    <input type="number" value="{{old('age')}}" name="age" min="1" max="99" required>

                    @if ($errors->has('age'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('age') }}</strong>
                      </span>
                     @endif
                    {{-- <textarea class="form-control" id="question1" name="" rows="3" required></textarea> --}}
                </div>
            </div>


            <div class="form-square p-3 mb-5">
                <div class="form-group">
                    <label for="question2">
                      <b>
                        What is your discord name and #?
                      </b>
                    </label>
                    <hr>
                    <textarea class="form-control" id="question2"  name="question2" rows="3" required placeholder="example#1234" maxlenght="50">{{old('question2')}}</textarea>
                    @if ($errors->has('question2'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('question2') }}</strong>
                    </span>
                   @endif
                  </div>
            </div>
            <div class="form-square p-3 mb-5">
                <div class="form-group">
                    <label for="departament">
                      <b>
                        Select what departament you´re applying for.
                      </b>
                    </label>
                    <hr>
                    <select class="form-control" id="departament" name="departament" >
                        <option value="San Andreas Fire & Rescue" @if(old('departament')=='San Andreas Fire & Rescue') selected="selected" @endif>San Andres Fire & Rescue</option>
                        <option value="San Andreas State Patrol" @if(old('departament')=='San Andreas State Patrol')selected="selected" @endif >San Andreas State Patrol</option>
                        <option value="Los Santos County Sheriff´s Office" @if(old('departament')=='Los Santos County Sheriff´s Office')selected="selected" @endif>Los Santos County Sheriff´s Office</option>
                        <option value="Civilian" @if(old('departament')=='Civilian')selected="selected" @endif>Civilian</option>
                        <option value="Communications" @if(old('departament')=='Communications')selected="selected" @endif>Communications</option>
                      </select>
                      
                      <hr>
                </div>

                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="legalcheck" id="legalcheck"
                    {{ (! empty(old('legalcheck')) ? 'checked' : '') }}>
                    <label class="form-check-label" for="legalcheck">
                      Legal copy of GTA 5?
                    </label>    
                  </div>

                  @if ($errors->has('legalcheck'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('legalcheck') }}</strong>
                  </span>
                 @endif
                </div>
                    {{-- <textarea class="form-control" id="question1" name="" rows="3" required></textarea> --}}
            </div>
            <div class="form-square p-3 mb-5">
                <div class="form-group">
                    <label for="question3">
                      <b>
                        Do you have any prior experience in this departament?
                      </b>
                    </label>
                    <hr>
                    <textarea class="form-control {{ $errors->has('question3') ? ' is-invalid' : '' }}" id="question3" name="question3" rows="3" required maxlenght="3999" >{{old('question3')}}</textarea>
                    @if ($errors->has('question3'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('question3') }}</strong>
                    </span>
                   @endif
                  </div>
            </div>

            <div class="form-square p-3 mb-5">
                <div class="form-group">
                    <label for="question4">
                      <b>
                        In your own words, describe what this departament does.
                      </b>
                    </label>
                    <hr>
                    <textarea class="form-control {{ $errors->has('question4') ? ' is-invalid' : '' }}" id="question4" name="question4" rows="3" required maxlenght="3999">{{old('question4')}}</textarea>
                    @if ($errors->has('question4'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('question4') }}</strong>
                    </span>
                   @endif
                  </div>
            </div>

            <div class="form-square p-3 mb-5">
                <div class="form-group">
                    <label for="question5">
                      <b>
                        Why should we pick you instead of another application?
                      </b>
                    </label>
                    <hr>
                    <textarea class="form-control {{ $errors->has('question5') ? ' is-invalid' : '' }}" id="question5" name="question5" rows="3" required maxlenght="3999">{{old('question5')}}</textarea>
                    @if ($errors->has('question5'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('question5') }}</strong>
                    </span>
                   @endif
                  </div>
            </div>
            <div class="form-square p-3 mb-5">
                <div class="form-group">
                    <label for="question6">
                      <b>
                        Put down any past roleplay servers and what role you played within them
                      </b>
                    </label>
                    <hr>
                    <textarea class="form-control{{ $errors->has('question6') ? ' is-invalid' : '' }}" id="question6" name="question6" rows="3" required>{{old('question6')}}</textarea>
                    @if ($errors->has('question6'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('question6') }}</strong>
                    </span>
                   @endif
                  </div>
            </div>
            <div class="form-square p-3 mb-5">
                <div class="form-group">
                    <label for="question7">
                      <b>
                        Put down anything else that you would think will further influence your app or general knowledge we should know about.
                      </b>
                    </label>
                    <hr>
                    <textarea class="form-control {{ $errors->has('question7') ? ' is-invalid' : '' }}" id="question7" name="question7" rows="3" required>{{old('question7')}}</textarea>
                    @if ($errors->has('question7'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('question7') }}</strong>
                    </span>
                   @endif
                  </div>
            </div>


            {{-- <div class="form-square p-3 mb-5">
                <div class="form-group">
                    <label for="title" class="col-md-4 col-form-label text-md-right">What is your age?</label>
        
                    
                        <input id="title" type="text" class="form-control w-25{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}"  autofocus>
        
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    
                </div>  
            </div> --}}

            
  
              <div class="form-group row mb-0">
                      <div class="col-md-10">
                      </div>
                      <div class="col-md-2">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Send application!') }}
                          </button>
                      </div>
              </div>

    
    
    
          {{-- <button class="btn m-2" type="submit">enviar</button> --}}
      </form>

  
  </div>

@endsection
