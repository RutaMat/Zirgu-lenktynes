
@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Lažybinikai</div>

               <form action="{{route('better.index')}}" method="get" class="sort-form">
                  <fieldset>
                    <legend>Pasirinkti arklį:</legend>
                    <div class="form-group">
                        <select name="horse_id"  class="form-control">
                            @foreach ($horses as $horse)
                                <option value="{{$horse->id}}"@if ($defaultHorse == $horse->id) selected
                                 @endif>{{$horse->name}}</option>
                            @endforeach
                        </select>
                        <small class="form-text text-muted">Pasirinkti arklį</small>
                    </div>
                  </fieldset>
                  <button type="submit" class="">Pasirinkti arklį</button>
                  <a href="{{route('better.index')}}" class="">Clear</a>
               </form>


        


               <div class="card-body">
                  @foreach ($betters as $better)
                    <a href="{{route('better.edit',[$better])}}">{{$better->name}} {{$better->surname}} už arklį: {{$better->betterHorse->name}} {{$better->bet}}  </a>
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