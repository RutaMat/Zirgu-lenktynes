

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Lažybiniko duomenų taisymas</div>

               <div class="card-body">
                 <form method="POST" action="{{route('better.update',[$better])}}">
                     <div class="form-group">
                        <label>Vardas:</label>
                        <input type="text" name="better_name" class="form-control" value="{{$better->name}}">
                        <small class="form-text text-muted">Lažybininko vardas</small>
                     </div>
                        <div class="form-group">
                        <label>Pavardė:</label>
                        <input type="text" name="better_surname" class="form-control" value="{{$better->surname}}">
                        <small class="form-text text-muted">Lažybininko pavardė</small>
                     </div>
                        <div class="form-group">
                        <label> Statoma suma eur:</label>
                           <input type="text" name="better_bet" class="form-control" value="{{$better->bet}}">
                        <small class="form-text text-muted">Lažybininko statoma suma</small>
                     </div>
                  
                  <div class="form-group">
                     <select name="horse_id">
                        @foreach ($horses as $horse)
                              <option value="{{$horse->id}}" @if($horse->id == $better->horse_id) selected @endif>
                                 {{$horse->name}} {{$horse->surname}} {{$horse->bet}}
                              </option>
                        @endforeach
                     </select>
                  <small class="form-text text-muted">Pasirinkti arklį</small>
                  </div>
                     @csrf
                     <button type="submit">Taisyti</button>
                  </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
@section('title') Lažybiniko duomenų taisymas @endsection
