@extends('templates/header')



    @section('content')

        @foreach($demands as $demand)

            <h4 style="color:white;">Crop in Demand: {{$demand->crop_type}}</h4>
            <h4 style="color:white;">Due Date: {{$demand->end_date_of_order}}</h4>
            <a name="view" href="/Buyers/{{$demand->id}}" class="btn btn-success">View</a>
              <!-- <a href="Bids/{{$demand->id}}/create" class="btn btn-primary">Bid</a> <hr> -->
            <form class="" action="/Bids/{{$demand->id}}/create/" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              {!! csrf_field() !!}
                <input type="submit" name="bid" value="Bid" class="btn btn-danger">
            </form>

        @endforeach
        {{$demands->links()}}

    @endsection
