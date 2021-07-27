
@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Lažybinikai</div>

               <div class="card-body">
                  @foreach ($betters as $better)
                    <a href="{{route('better.edit',[$better])}}">{{$better->name}} {{$better->surname}} už arklį: {{$better->betterHorse->name}}  </a>
                    <form method="POST" action="{{route('better.destroy', [$better])}}">
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

@section('title') Lažybinikai @endsection