@extends('layouts.app')
@section('content')
 <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
    	    <select>
		      <option value="" disabled selected>Selecione uma opção</option>
		      <option value="1"></option>
		      <option value="2"></option>
		      <option value="3"></option>
		    </select>
		    <label>Autor</label>
        </div>
        <div class="input-field col s6">
    	    <select>
		      <option value="" disabled selected>Selecione uma opção</option>
		      <option value="1"></option>
		      <option value="2"></option>
		      <option value="3"></option>
		    </select>
		    <label>Qualis</label>
        </div>
      </div>
        <div class="input-field col s6">
    	    <select>
		      <option value="" disabled selected>Selecione uma opção</option>
		      <option value="1"></option>
		      <option value="2"></option>
		      <option value="3"></option>
		    </select>
		    <label>Área</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          This is an inline input field:
          <div class="input-field inline">
            <input id="email" type="email" class="validate">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
      </div>
        <div class="input-field col s12">

  </div>
    </form>
  </div>
  <script type="text/javascript">
  	
  $(document).ready(function() {
    $('select').material_select();
  });
     
  </script>
 @stop 