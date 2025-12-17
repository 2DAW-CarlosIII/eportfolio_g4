@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Añadir evidencia
         </div>
         <div class="card-body" style="padding:30px">

            <form action="{{ action([App\Http\Controllers\EvidenciasController::class, 'postCreate']) }}"
                        method="POST">
	            @csrf

	            <div class="form-group">
	               <label for="descripcion">Descripcion</label>
	               <input type="text" name="descripcion" id="descripcion" class="form-control">
	            </div>

	            <div class="form-group">
	            	<label for="url">Url</label>
	               <input type="text" name="url" id="url" class="form-control">
	            </div>

	            <div class="form-group text-center">
	               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
	                   Añadir evidencia
	               </button>
	            </div>

            </form>

         </div>
      </div>
   </div>
</div>

@endsection
