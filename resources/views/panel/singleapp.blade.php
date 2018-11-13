@extends('panel.index')

@section('appcontent')

  <div class="container">
    <h2 class="text-center font-montserrat"> Application received from user.</h2>
        <hr>
        <div class="card" >
            {{-- <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="Card image cap"> --}}
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">{{$user->name}}</h4>
                <small class="mt-1">created at {{$user->created_at}}</small>
              </div>
              <small>{{$user->email}}</small>
              <hr>
              <p class="card-text">  @include('panel.stateswitch')</p>
              <hr>
              
              @isset($answers)

                @include('panel.applicomponent')

              @endisset
            </div>


            <div class="card-body">
            <a href="/panel/user/delete/{{$user->id}}" class="card-link">Delete User</a>
            

            {{-- form --}}

            <form  method="POST" action=" {{ route('changestate') }}  " >
                @csrf
                <!-- fields -->
                <div class="form-group">
                    <label for="explanation">
                      <b>
                        
                      </b>
                    </label>
                    <hr>
                    <textarea class="form-control" id="explanation"  name="explanation" rows="3" placeholder="Let a message to your user!" maxlenght="50">{{old('explanation')}}</textarea>
                    @if ($errors->has('explanation'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('explanation') }}</strong>
                    </span>
                   @endif
                  </div>

                <input name="application" type="hidden" value="{{$user->application->id}}">
                <div class="d-flex justify-content-between">
                  <button class="btn btn-danger p-2" type="submit" name="action" value="2">Denied</button>
                  <button class="btn btn-success p-2" type="submit" name="action" value="1">Accept</button>

                </div>
            </form>
                {{-- <textarea class="form-control" id="answer1" name="" rows="3" required></textarea> --}}
            </div>

            
            </div>
          </div>

  </div>



@endsection