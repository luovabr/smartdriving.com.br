@extends('layouts.app')


@section('content')
<div class="section">
	<div class="container">
		<div class="row mx-4">
			<h1 style="font-size:3.5rem" class="mt-5 sdl-h1 font-weight-normal text-black">
				<span>
				Perguntas mais frequentes
				</span>
			</h1>
		</div>
		<div class="row mx-4 mt-4">
			<div class="accordion w-100" id="accordionExample">
				<div class="alert alert-secondary btn p-4 w-100 btn-block text-left" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					<span class="text-fluid font-weight-bold text-left">Posso acessar o serviço de carro conectado sem o aplicativo móvel?</span> <button type="button" class="close text-black" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-plus " style="color:#007bff"></i></button>
				</div>	
				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="alert alert-light">
						O aplicativo móvel permitirá que você use todos os recursos do nosso sistema. Primeiro, essas são as funções de coletar e analisar informações sobre como dirigir seu carro com recomendações para melhorar o seu estilo de condução.
						Além disso, usando o aplicativo móvel, você pode trancar/destrancar portas, dar partida do motor remotamente e monitorar as condições técnicas do veículo. No entanto, também é possível utilizar a página web, acessando todas as funcionalidades oferecidas pelo aplicativo móvel, além da criação de cercas eletrônicas.
					</div>
				</div>
				<div class="alert alert-secondary btn p-4 w-100 btn-block text-left" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
					<span class="text-fluid font-weight-bold text-left">O que devo fazer se mudar de carro?</span> <button type="button" class="close text-black" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-plus " style="color:#007bff"></i></button>
				</div>	
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					<div class="alert alert-light">
						Para continuar usando o Element em um novo carro, você precisa entrar em contato com nossa central de serviço ao cliente pelo e-mail contato@smartdriving.com.br.
					</div>
				</div>
				<div class="alert alert-secondary btn p-4 w-100 btn-block text-left" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
					<span class="text-fluid font-weight-bold text-left">Posso conectar vários veículos à mesma conta?</span> <button type="button" class="close text-black" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-plus " style="color:#007bff"></i></button>
				</div>	
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					<div class="alert alert-light">
						Sim, você pode concetar quantos veículos quiser à sua conta.
					</div>
				</div>
				<div class="alert alert-secondary btn p-4 w-100 btn-block text-left" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
					<span class="text-fluid font-weight-bold text-left">Como melhorar meu estilo de condução e aumentar minha nota usando o aplicativo móvel?</span> <button type="button" class="close text-black" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-plus " style="color:#007bff"></i></button>
				</div>	
				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
					<div class="alert alert-light">
						O aplicativo móvel analisa seu estilo de condução e fornece recomendações sobre como melhorá-lo. 
						Você pode visualizar tais informações na tela inicial do aplicativo, incluindo eventos como velocidades excedidas, curvas, acelerações e freadas bruscas.
					</div>
				</div>
				<div class="alert alert-secondary btn p-4 w-100 btn-block text-left" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
					<span class="text-fluid font-weight-bold text-left">O que está incluso na taxa anual de assinatura?</span> <button type="button" class="close text-black" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-plus " style="color:#007bff"></i></button>
				</div>	
				<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
					<div class="alert alert-light">
						A taxa anual inclui o acesso ao aplicativo móvel e o serviço Element pelo período de um ano.
					</div>
				</div>
				<div class="alert alert-secondary btn p-4 w-100 btn-block text-left" id="headingSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseOne">
					<span class="text-fluid font-weight-bold text-left">Por que o dispositivo está emitindo sons?</span> <button type="button" class="close text-black" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-plus " style="color:#007bff"></i></button>
				</div>	
				<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
					<div class="alert alert-light">
						É normal o dispositivo emitir bipes de confirmação durante o processo de atualização e configuração.
					</div>
				</div>
			</div>
		
		</div>
	</div>
</div>
@endsection

@section('scripts')

@endsection
