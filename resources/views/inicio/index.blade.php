@extends('layouts.app')
@section('content')
<div class="container">

    @if ( app('request')->attributes->get('activateMessage') !== null )
    <div class = "row center">
    	<span class="help-block green-text text-centered" style="font-size: large;">
        	<strong>{{ app('request')->attributes->get('activateMessage') }}</strong>
    	</span>
    </div>
    @endif

	<div class="row">
		<form action="/publicacoes" method="GET">
			<div class="col-md-12 text-center">
				<div class="text-center bg-info transparent">
                    <img class="animated infinite pulse" src="{{ asset('img/prototipo4.png') }}" height="133" width="580"/>
                </div>
				<div class="input-group input-group-lg">
				  <input name="pesquisar" type="text" class="form-control" placeholder="Digite o que você procura aqui.." aria-describedby="sizing-addon1">
				  <span class="input-group-btn">
			      <input class="btn" type="submit" value="Pesquisar">
			      <input type="hidden" name="_token" value="{{ csrf_token() }}">
			      </span>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a style="margin-left:25%;width:100%;cursor:pointer;" href="#" onclick="javascript:alert('Funcionalidade em construção...');">Não encontrou o que procurava? Clique aqui e faça uma busca mais avançada...</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
						<p class="text-center" style="font-size: x-large;">Últimas publicações</p>
					  	<div class="carousel" style="position:relative;">
					    <!-- <a class="carousel-item" href="#one!"><img src="{{ asset('img/science.jpg') }}"></a> -->
					    <a class="carousel-item" href="#two!"><img src="{{ asset('img/F1.medium.gif') }}"></a>
					    <a class="carousel-item" href="#three!"><img src="{{ asset('/img/f7c285722864e80e2f49aa7851ecc2b5dcb60683.jpg') }}"></a>
					    <a class="carousel-item" href="#four!"><img src="{{ asset('img/dmanisi-science-cover1.jpg') }}"></a>
					    <!-- <a class="carousel-item" href="#five!"><img src="{{ asset('img/science_cover.jpg') }}"></a> -->
					  </div>
				</div>
			</div>
		</form>
	</div>

	<script type="text/javascript">
		   $(document).ready(function(){
      $('.carousel').carousel();
    });
	</script>
@stop