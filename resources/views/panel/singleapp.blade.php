@extends('panel.index')

@section('appcontent')

  <div class="container">
    <h2 class="text-center font-montserrat"> Application user</h2>
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
              <a href="#" class="card-link">Change state</a>
            </div>
          </div>

  </div>



@endsection