

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Arklio informacija</div>

               <div class="card-body">
                 @foreach ($horses as $horse)
                <a href="{{route('horse.edit',$horse)}}">apie arklį: {{$horse->name}} {{$horse->runs}} {{$horse->wins}} {!!$horse->about!!}</a><br>
                <form method="POST" action="{{route('horse.destroy', $horse)}}">
                @csrf
                <button type="submit">Trinti</button>
                </form>
                <br>
                @endforeach
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
@section('title') Arklio informacija @endsection