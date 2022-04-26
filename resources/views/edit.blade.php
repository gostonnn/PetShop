
@extends( "layouts.layout")

@section( "content" )

<div class="row mt-3">
    <div class="col-lg-4 offset-lg-4">

      <form class="form-control" action="/update" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$pets->id}}">
          <label for="pet">Név</label>
          <input class="form-control" value="{{$pets->pet}}" type="text" name="pet">

          <label for="type">Típus</label>
          <input class="form-control" value="{{$pets->type}}" type="text" name="type">

          <label for="price">Ár</label>
          <input class="form-control" value="{{$pets->price}}" type="text" name="price">


          <button class="btn btn-outline btn-primary mt-3" type="submit">Küldés</button>
      </form>

    </div>
        
</div>

@endsection