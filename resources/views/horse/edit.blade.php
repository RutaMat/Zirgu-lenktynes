
@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Arklio duomenų taisymas</div>

               <div class="card-body">
                 <form method="POST" action="{{route('horse.update',$horse)}}">
                    <div class="form-group">
                        <label>Vardas:</label>    
                        <input type="text" name="horse_name"  class="form-control" value="{{old('horse_name',$horse->name)}}">
                        <small class="form-text text-muted">Knygos pavadinimas.</small>
                    </div>
                    <div class="form-group">
                        <label>  Laimėtų rungtynių skaičius: </label>
                        <input type="text" name="horse_runs"  class="form-control" value="{{old('horse_runs',$horse->runs)}}">
                        <small class="form-text text-muted">Arklio vardas</small>
                    </div>
                    <div class="form-group">
                        <label> Dalyvauta rungtynių skaičius:</label>
                        <input type="text" name="horse_wins"  class="form-control" value="{{old('horse_wins',$horse->wins)}}">
                        <small class="form-text text-muted">Arklio laimėtos rungtynės</small>
                    </div>
                    <div class="form-group">
                        <label> Aprašymas:</label>
                        <textarea name="horse_about"  class="form-control" id="summernote"></textarea>
                        <small class="form-text text-muted">Komentarai apie arklį</small>
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

@section('title') Arklio duomenų taisymas @endsection