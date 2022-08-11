@extends('layouts.app')


@section('content')
<div class="section">
	<div class="container">
			<h1 class="ml-3 mt-3 sdl-h1 font-weight-normal text-black" style="line-height:3rem">
			<b>SDL Lago</b> </br>
			<span>Gestão de dados automotivos</span>
			</h1>
	</div>
</div>
	<!--slider-->
	<div  class="mt-4 bg-analytics-road">
	</div>
</div>

<div class="section my-5">
	<div class="container">
			<div class="row driver-description"><div class="col-md-5 text-center"><h1>Análise de Dados</h1></div> <div class="col-md-7 text-secondary"><h3>SDL transforma dados conectados não estruturados combinados com outras fontes de dados em percepções valiosas permitindo que nossos clientes maximizem sua capacidade de monetizar seus dados</h3></div></div>
	</div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Fonte de Dados</h2>
	    </br>
            <h3 class="btn btn-lg btn-block" id="orange" role="button">Montadora</h3>
            <h3 class="btn btn-lg btn-block" id="orange" role="button">Telemetria</h3>
            <h3 class="btn btn-lg btn-block" id="orange" role="button">Makertplace de carro conectado</h3>
            <h3 class="btn btn-lg btn-block" id="orange" role="button">Aplicativo móvel</h3>
            <h3 class="btn btn-lg btn-block" id="orange" role="button">Parceiro de carro conectado</h3>
	    <h3 class="btn btn-lg btn-block" id="orange" role="button">Element</h3>
          </div>
          <div class="col-md-4">
            <img src="images/analytics-lago.png" class="img-fluid mx-auto d-block">
          </div>
          <div class="col-md-4">
            <h2>Marketplaces</h2></br>
            <h3 class="btn btn-lg btn-block" id="orange" role="button">Mobilidade Urbana</h3>
            <h3 class="btn btn-lg btn-block" id="orange" role="button">Seguradora</h3>
            <h3 class="btn btn-lg btn-block" id="orange" role="button">Financeira</h3>
            <h3 class="btn btn-lg btn-block" id="orange" role="button">Concessionária</h3>
	    <h3 class="btn btn-lg btn-block" id="orange" role="button">Frotista</h3>
	    <h3 class="btn btn-lg btn-block" id="orange" role="button">Montadora</h3>

          </div>
        </div>
      </div>
  </div>
</div>
<div class="section my-4">
<div class="container px-4">
    <h1>Monetização de vidas conectadas</h1>
    <hr>
    <div class="row g-4 py-3 row-cols-1 row-cols-lg-3">
      <div class="feature col">
	<div class="container">
	<div class="row">
        <img class="rounded float-left mx-auto" alt="200x200" src="images/analytics-vehicles.jpg" data-holder-rendered="true" style="height: 200px;">
        </div>
	<div class="row mt-3">
        <h2>Veículos</h2>
        <p class="font-weight-light">Os veículos conectados geram valiosos dados associados à localização, funcionamento, comportamento e integridade geral do veículo. Os dados conectados oferecem percepções e oportunidades profundas para conhecer o consumidor.</p>
	</div>
	</div>
     </div>
        <div class="feature col">
	<div class="container">	
	<div class="row">
	<img class="rounded float-left mx-auto" src="images/analytics-people.jpg" data-holder-rendered="true" style=" height: 200px;">
	</div>
	<div class="row mt-3">
        <h2>Pessoas</h2>
        <p class="font-weight-light">Os smartphones através dos aplicativos móveis permitem aumentar a capacidade de entender as preferências, comportamento e de interagir com os consumidores de forma mais relevante.</p>
      	</div>
	</div>
	</div>
      <div class="feature col">
	<div class="container">
	<div class="row">
	<img class="rounded float-left mx-auto" alt="Analytics - City" src="images/analytics-city.jpg" data-holder-rendered="true" style="height: 200px;">
	</div>
	<div class="row mt-3">
        <h2>Locais</h2>
        <p class="font-weight-light">A “Internet das Coisas” (IoT) está mudando a maneira como consumidores interagem com as marcas e as atividades diárias em suas vidas. Isso fornece uma rica fonte de dados para envolver e compreender ainda mais o consumidor,  suas preferências e estilo de vida.</p>
	</div>
	</div>
      </div>
    </div>
</div>
</div>

<div class="section">
	<div class="container">
		<h1>Casos de uso </h1>
		<hr>
		<div class="row">
			<div class="col-md-6 px-5">
				<h2 class="mt-3" style="color:black">Localização em tempo real</h2>
				<h4 class="mt-3 font-weight-light">Capacidade de fornecer notificações push de marketing com base na localização geográfica e no perfil do cliente</h4>
				<h4 class="mt-3 font-weight-light">Experiências personalizadas quando um cliente entra em seu estabelecimento</h4>
				<h4 class="mt-3 font-weight-light">Geração de receita adicional (monetização de dados) através da venda de insight de dados gerados, fruto do cruzamento dos dados gerados pelo veículo, sua geolocalizacao e outras fontes de dados</h4>
        			<h4 class="mt-3 font-weight-light">Geração de relatórios gerenciais em tempo real da efetividade de uma campanha de marketing, com o cruzamento de dados por região, com dados de vendas realizadas – criação de campanhas internas de incentivo de vendas entre as concessionárias</h4>
			</div>
			<div class="col-md-6 py-5">
				<img class="img-fluid w100 rounded-xlg" src="images/analytics-geomarketing.jpg">
			</div>
		</div>
	</div>
</div>
<div class="section my-3 py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="images/analytics-insurance.jpg" class="img-fluid w100 rounded-xlg">
			</div>
		<div class="col-md-6 px-5">
			<h2 style="color:black">Seguro inteligente</h2>
                    <h4 class="mt-3 font-weight-light">Notificações baseadas na localização ou perfil</h4>
                    <h4 class="mt-3 font-weight-light">Use os dados do carro conectado para oferecer produtos inovadores de seguro com base no uso (UBI – usage based insurance), incluindo produtos como o pay as you drive (PAYD) e pay on how you drive (PHYD)</h4>
                    <h4 class="mt-3 font-weight-light">Capacidade de recriar eventuais acidentes com base nos sensores, incluindo gráfico de desaceleração em função do tempo, com o intuito de evitar fraudes</h4>
                    <h4 class="mt-3 font-weight-light">Monitore os hábitos de direção, como velocidade, frenagem, direção e aceleração, complementando a análise de risco durante a vigência do contrato e na renovação do seguro</h4>
                    <h4 class="mt-3 font-weight-light">Dados de localização precisos para avaliar o risco potencial com base na residência real, estacionamento e rotas de viagem</h4>
            </div>
       </div>
    </div>
  </div>
</div>
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 px-5">
				<h2 style="color:black">Segurança veicular</h2>
				<h4 class="mt-3 font-weight-light">Modelos preditivos para reduzir alertas falsos</h4>
				<h4 class="mt-3 font-weight-light">Localização do veículo em tempo real, otimizando o potencial de recuperação</h4>
				<h4 class="mt-3 font-weight-light">Notificação proativa sobre possível roubo ou arrombamento de carro</h4>
        			<h4 class="mt-3 font-weight-light">Controle do veículo por meio da rede CAN do veículo</h4>
                		<h4 class="mt-3 font-weight-light">Assistência rodoviária ou suporte por telefone ao cliente</h4>
			</div>
			<div class="col-md-6 py-5">
				<img class="img-fluid w100 rounded-xlg" src="images/analytics-security.jpg">
			</div>
		</div>
	</div>
</div>
<div class="section">
	<div class="container">
	<h1> Nossos parceiros </h1>
	<hr>
	<div class="row">
	<div class="partners"> 
	<ul class="partners__list">
	      <li class="partners__list-item mx-4">
            <a class="partners__list-link" href="" target="_blank">
            <img class="b-lazy b-loaded" src="/images/analytics-tomtom.png" alt=""></a>
            </li>
	     <li class="partners__list-item mx-4">
            <a class="partners__list-link" href="" target="_blank">
            <img class="b-lazy b-loaded" src="/images/analytics-amazon.png" alt=""></a>
            </li>
	    <li class="partners__list-item mx-4">
		<a class="partners__list-link" href="" target="_bank">
		<img class="b-lazy b-loaded" src="/images/analytics-maua.png" alt=""></a>
	   </li>
        </ul>
	
        </div>
		<div class="container" style="background-color: rgb(29, 114, 249); border-color: rgb(255, 255, 255); border-radius: 10px; border-style: solid;">
			<form method="post" action="https://www.smartdriving.com.br/sendemail/send" class="p-3 mb-3"><input type="hidden" name="_token" value="9E1q7Iu4nBN84FtmR7zTjJt5CEzXvyUX30Ona2So"> <div class="form-group"><p style="font-size: 41px; line-height: 51px; white-space: inherit; color: white; font-weight: 300; font-style: normal;">Formulário de Contato</p></div> <div class="app-form-group"><input type="text" name="nome" id="InputName" placeholder="Nome" class="app-form-control"></div> <div class="app-form-group"><input type="email" name="email" id="InputEmail" placeholder="Email" class="app-form-control"></div> <div class="app-form-group"><input type="text" name="telefone" id="InputPhone" placeholder="Número de Telefone" class="app-form-control"></div> <div class="app-form-group"><input type="text" name="empresa" id="InputCompany" placeholder="Empresa (opcional)" class="app-form-control"></div> <div class="app-form-group"><textarea name="mensagem" id="InputMessage" rows="3" placeholder="Sua mensagem" class="app-form-control message"></textarea></div> <div class="app-form-group"><input type="submit" name="send" value="Enviar" class="btn-contact  btn-lg btn-block" style="border-radius: 50px;"></div></form></div>
	</div>
	</div>
</div>
@endsection

@section('scripts')

@endsection
