@extends('panel.index')

@section('appcontent')

  <div class="container">
    <!-- lista de aplicaciones recividas-->
    <h2 class="text-center font-montserrat"> Applications received</h2>
    <hr>
    <!-- Todo : Necesito hacer que aparezcan if aplication->state == 2       2 = "on wait" -->


    <div class="list-group">
        @forelse ($appsReceived as $appReceived)

          <!-- aca iria el link a la app-->
          {{-- <a href="/panel/appreceived/{{$appReceived->user->id}}" class="list-group-item list-group-item-action flex-column align-items-start "> --}}
          <a href=" {{ route('appreceivedview', $appReceived->user->id ) }} " class="list-group-item list-group-item-action flex-column align-items-start ">
        
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">{{$appReceived->user->name}}</h5>
              <small>sended at : {{$appReceived->created_at}}</small>
            </div>


            <div class="d-flex flex-row bd-highlight -mb-3">
              {{-- <p class="mb-1">Whitout State</p> --}}
            {{-- <p class="mb-1">{{$appReceived->explanation}}</p> --}}
              {{-- <button class="btn btn-danger">Denied</button> --}}
            </div>
            <small>{{$appReceived->user->email}}.</small>
          </a>
        @empty  
          <small class="p-2 text-center font-montserrat"> There are no new applications. </small>
        @endforelse
      </div>



      @if (count ($appsReceived))
      <div class="mt-5 p-2 mx-auto">
          {{$appsReceived->links()}}
      </div>
      @endif
    </div> 
  </div>


@endsection