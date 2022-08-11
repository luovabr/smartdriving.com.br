@extends('layouts.app')


@section('content')

<div class="section">
	<div class="container">
			<h1 class="ml-3 mt-3 sdl-h1 font-weight-normal text-black" style="line-height:3rem">
			<b>Concessionária</b></br>
			Conecte-se com seu cliente
			</h1>
	</div>
	<div class="mt-4 bg-dealer">
	</div>
</div>	
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h1 style="font-size:3.5rem" class="mt-5 sdl-h1 font-weight-normal text-dark">
					<span >
					Análise de
					</span>
					<span >
					 	<br>Test Drive
					</span>
				</h1>
			</div>
			<div class="col-md-7 mt-5 text-left "><h2 class="font-weight-light">Desenvolvemos visualizações interativas sobre o uso de veículos em programas de test drive, assim é possível monitorar o uso indevido do carro, o tempo de inatividade, porcentagem de uso, entre outros. Com a coleta desses dados, geramos ações personalizadas junto às concessionárias visando o crescimento das vendas.</h2></div>
		</div>
		
	</div>
</div>
<div class="section my-5 py-5">
	<div class="container">
		<img src="{{asset('images/tela-bi-testdrive.png')}}" class="img-fluid w100">
	</div>
</div>
<div class="section my-5 py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="{{ asset('images/car-dealer-driver.png')}}" class="img-fluid w100 rounded-xlg">
			</div>
			<div class="col-md-6 px-5">
				<h1 class="mt-5 text-dark">Retorno para Revisão</h1>

				<h2 class="mt-3 font-weight-light">O pós-venda é muito importante na fidelização do consumidor. Ao utilizar a plataforma SDL você oferece exatamente o que o cliente precisa e no momento correto.</h2>
			</div>
		</div>
	</div>
</div>
<div class="section my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 px-5">
				<h1 class="mt-5 text-dark">Perfil do Cliente</h1>
				<h2 class="mt-3 font-weight-light">Ofereça produtos e serviços adicionais baseados nos hábitos de condução dos clientes conectados graças a plataforma SDL Telematics.</h2>	
			</div>
			<div class="col-md-6">
				<img src="{{asset('images/dealer-street-driver.png')}}" class="img-fluid w100 rounded-xlg">
			</div>
		</div>
	</div>
</div>
<div class="section my-5 py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="{{asset('images/dealer-smartphone-user.png')}}" class="img-fluid w100 rounded-xlg">
			</div>
			<div class="col-md-6  px-5">
				<h1 class="mt-5 text-dark">Notificações via Push</h1>

				<h2 class="mt-3 font-weight-light">Aumente a comunicação com seu cliente, com uma comunicação personalizada, baseada na idade, marca, modelo do veículo e muito mais. Reduzindo os custos para atingir o seu público-alvo. </h2>
			</div>
		</div>
	</div>
</div>
<div class="section my-5 py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 px-5">
				<h1 class="mt-5">Crash AI</h1>
				<h2 class="mt-3 font-weight-light ">Crash Ai é uma rede neural capaz de detectar, avaliar e medir incidentes com base em dados geradas pelos sensores presentes no dispositivo</h2>	
			</div>
			<div class="col-md-6">
				<img src="{{asset('images/notebook_crashai.png')}}" class="img-fluid w100">
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')

@endsection
