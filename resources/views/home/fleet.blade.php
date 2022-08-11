@extends('layouts.app')


@section('content')
<div class="section">
	<div class="container">
			<h1 class="ml-3 mt-3 sdl-h1 font-weight-normal text-black" style="line-height:3rem">
				<b>Frotista</b></br>
				<span>Conecte-se a sua Frota </span>
			</h1>
		</div>
	</div>
	<!--slider-->
	<div  class="mt-4 bg-fleet">
	</div>
</div>	

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h1 style="font-size:3.5rem" class="mt-5 sdl-h1 font-weight-normal text-dark">
					<span >
					Monitoramento
					</span>
					<span >
					 	<br>em Tempo Real
					</span>
				</h1>
			</div>
			<div class="col-md-7 mt-5 text-left "><h2 class="font-weight-light">Rastreamento da localização do veículo em tempo real via dispositivo móvel, registro de viagens, avaliação da qualidade de condução de cada motorista e identificação automática de incidentes no percurso.</h2></div>
		</div>

	</div>
</div>
<div class="section my-5 py-5">
	<div class="container">
		<img src="images/Atlas-desktop.png" class="img-fluid w100">
	</div>
</div>
<div class="section my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 px-5">
				<h1 class="mt-5 text-dark">Pontuação do Motorista</h1>
				<h2 class="mt-3 font-weight-light">Com base em nossa própria cartografia, plataforma de processamento de dados e dispositivos constantemente atualizados, criamos um modelo único de pontuação que nos permite quantificar o uso do carro e o estilo de condução.</h2>	
			</div>
			<div class="col-md-6">
				<img src="images/car-fleet-driver.png" class="img-fluid w100 rounded-xlg">
			</div>
		</div>
	</div>
</div>
<div class="section my-5 py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="images/car-road-score.png" class="img-fluid w100 rounded-xlg">
			</div>
			<div class="col-md-6 px-5">
				<h1 class="mt-5 text-dark">Diagnóstico Remoto</h1>

				<h2 class="mt-3 font-weight-light">Nossa plataforma é compatível com os principais fabricantes do mercado, coletando dados em tempo real.</h2>
			</div>
		</div>
	</div>
</div>
<div class="section my-5 py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 px-5">
				<h1 class="mt-5 text-dark">Detector de colisão</h1>
				<h2 class="mt-3 font-weight-light">Crash Ai é uma rede neural capaz de detectar, avaliar e medir incidentes com base em dados gerados pelos sensores presentes no dispositivo.</h2>	
			</div>
			<div class="col-md-6">
				<img src="images/cruzamento-fleet-crash.png" class="img-fluid w100 rounded-xlg">
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')

@endsection
