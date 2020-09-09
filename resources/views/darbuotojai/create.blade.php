@extends('layouts.app')
@section('content')

   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Naujas darbuotojas:</div>
               <div class="card-body">
                   <form action="{{ route('darbuotojas.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>ID: </label>
                           <input type="text" name="id" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Darbuotojas: </label>
                           <input type="number" name="darbuotojai" class="form-control"> 
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection