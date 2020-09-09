@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Sukurkime Projektą:</div>
               <div class="card-body">
                   <form action="{{ route('projektas.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>id: </label>
                           <input type="text" name="title" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Projektas: </label>
                           <input type="text" name="distance" class="form-control"> 
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection