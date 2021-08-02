
@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Lažybinikų sąrašas</div>

               <form action="{{route('better.index')}}" method="get" class="sort-form">
                  <fieldset>
                    <legend>Pasirinkti arklį:</legend>
                    <div class="form-group">
                        <div class="form-group_content">
                            <select name="horse_id"  class="form-control">
                                @foreach ($horses as $horse)
                                    <option value="{{$horse->id}}" class="name-selector"@if ($defaultHorse == $horse->id) selected
                                    @endif>{{$horse->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <small class="form-text text-muted">Pasirinkti arklį</small> --}}
                    </div>
                        <div class="form-group_button">
                            <button type="submit" class="mygtukas">Pasirinkti</button>
                            <a href="{{route('better.index')}}" class="mygtukas">
                                <button type="submit" class="mygtukas">Išvalyti</button>
                            </a>
                        </div>
                  </fieldset>

               </form>


        


               <div class="card-body">
               <ul class="list-group">
              
                  @foreach ($betters as $better)
                    <li class="list-group-item">
                       <div class="list-container">
                           <div class="list-container__content">
                                <div class="list-container__content_horse">
                                <span style="font-weight: bold">{{$better->bet}}</span> Eur už arklį <span style="font-weight: bold">{{$better->betterHorse->name}} </span> 
                                </div>
                                <div class="list-container__content_better">
                                    {{$better->name}} {{$better->surname}}
                                </div>
                            </div>
                           <div class="list-container__button">
                                <a href="{{route('better.edit',[$better])}}" class="mygtukas">Pataisyti</a>
                                <form method="POST" action="{{route('better.destroy', [$better])}}">
                                @csrf
                                <button type="submit" class="mygtukas">Ištrinti</button>
                                </form>
                                <br>
                          </div>
                       </div>
                   </li>
                  @endforeach
             
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

@section('title') Lažybinikai @endsection