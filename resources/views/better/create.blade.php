
@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Naujo lažybiniko įvedimas</div>

               <div class="card-body">
                 <form method="POST" action="{{route('better.store')}}">
                     <div class="form-group">
                           <label> Vardas: </label>
                           <input type="text" name="better_name" class="form-control" >
                           <small class="form-text text-muted">Lažybininko vardas</small>
                     </div>
                     <div class="form-group">
                           <label> Pavardė: </label>
                           <input type="text" name="better_surname" class="form-control" >
                           <small class="form-text text-muted">Lažybininko pavardė</small>
                     </div>
                     <div class="form-group">
                           <label>Statoma suma eur:</label>
                           <input type="text" name="better_bet" class="form-control" >
                           <small class="form-text text-muted">Lažybininko statoma suma</small>
                     </div>
                   
                     <div class="form-group"> 
                        <select name="horse_id">
                           @foreach ($horses as $horse)
                              <option value="{{$horse->id}}">{{$horse->name}} {{$horse->surname}} {{$horse->bet}}</option>
                           @endforeach
                        </select>
                     <small class="form-text text-muted">Pasirinkti arklį</small>
                     </div>
                     @csrf
                     <button type="submit">Pridėti</button>
                  </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

@section('title') Naujas lažybinikas @endsection

