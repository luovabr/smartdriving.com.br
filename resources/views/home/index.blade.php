@extends('layouts.app')


@section('content')
    <div class="section">
		<div class="container">
			<h1 class="ml-3 mt-3 sdl-h1 font-weight-normal">
				 <span class="text-secondary">Transformar dados em oportunidades. Custo em receita. Por meio do mundo de carros conectados e uma abordagem focada em </span><span class="text-dark">analytics<span class="text-secondary">, a Smart Driving busca proporcionar novos fluxos de receita e ferramentas de retenção de clientes. </span>
			</h1>
		</div>
    </div>
   <div class="section">
		<div class="container">
			<div class="d-flex justify-content-center pt-5">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/JFNHrUUE0Zs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
    </div>
	<!--newsroom-->
<div class="section mt-5">
	<div class="container">
		<div class="row ml-3">
			<h6 class="">NEWSROOM</h6>
		</div>
		<div class="row owl-carousel owl-theme ml-3">
			<div class="item shadow p-3 bg-white rounded-xlg box-newsroom bg-exame" data-toggle="modal" data-target="#Exame" style="">
				<span class="text-white text-weight-bold">Segurança no Rally: Condutores da frota da organização serão premiados em R$ 24 mil
</span>
			</div>
			<!--div class="item shadow p-3 bg-white rounded-xlg box-newsroom bg-app" data-toggle="modal" data-target="#appelement" >
				<span class="text-weight-bold">Disponível para iOS e Android</span></div-->
			<div class="item shadow p-3 bg-white rounded-xlg box-newsroom bg-estadao" data-toggle="modal" data-target="#estadao" >
				<span class="text-white text-weight-bold">As autotechs e a disrupção do setor automotivo</span>
			</div>
			<div class="item shadow p-3 bg-white rounded-xlg box-newsroom bg-fastcompany" data-toggle="modal" data-target="#fast">
				<span class="text-white text-weight-bold">Car as a service: o mundo do automóvel além da combustão</span>
			</div>
			<div class="item shadow p-3 bg-white rounded-xlg box-newsroom bg-uol" data-toggle="modal" data-target="#uol" >
				<span class="text-white text-weight-bold ">Como o carro sabe a forma que você dirige e até ensina a poupar combustível</span></div>
			<div class="item shadow p-3 bg-white rounded-xlg box-newsroom bg-folha" data-toggle="modal" data-target="#folha">
				<span class="text-white text-weight-bold">Monitoramento permanente do carro vai reduzir valor do seguro</span></div>
			
		</div>
		
	</div>
</div>
<div class="modal fade" id="Exame" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="Exame" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content bg-exame box-modal">
			<div class="modal-body">	
				<div class="row" >
					<div class="col-10 col-md-11">
						<h4 class="text-white" id="Exame">
						Segurança no Rally: Condutores da frota da organização serão premiados em R$ 24 mil
						</h4>
						<h4 class="mt-1">
							<a class="text-white" target="_blank" href="https://maisoffroad.com/seguranca-no-rally-condutores-da-frota-da-organizacao-serao-premiados-em-r-24-mil/"><p>Saber mais</p></a>
						</h4>
					</div>
					<div class="col-1">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="fas fa-times text-white"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--div class="modal fade " id="appelement" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="appelement" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content bg-app box-modal">
			<div class="modal-body">	
				<div class="row" >
					<div class="col-10 col-md-11">
						<h2  id="appelement">
							Element se encontra disponível para <span class="text-secondary">iOS</span> e <span class="text-secondary">Android</span>
						</h2>
					</div>
					<div class="col-1">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="fas fa-times "></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div-->
<div class="modal fade " id="estadao" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="estadao" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content bg-estadao box-modal">
			<div class="modal-body">	
				<div class="row" >
					<div class="col-10 col-md-11">
						<h2  id="estadao">
						    As autotech e a disrupção do setor automotivo
						</h2>
						<h4 class="mt-1">
							<a class="text-white" target="_blank" href="https://mobilidade.estadao.com.br/inovacao/as-autotechs-e-a-disrupcao-do-setor-automotivo/"><p>Saber mais</p></a>
						</h4>
					</div>
					<div class="col-1">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="fas fa-times "></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade " id="fast" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="fast" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content bg-fastcompany box-modal">
			<div class="modal-body">	
				<div class="row" >
					<div class="col-10 col-md-11">
						<h2 class="text-white" id="fast">
						Car as a service: o mundo do automóvel além da combustão
						</h2>
						<h2 class="mt-1">
							<a class="text-white" target="_blank" href="https://fastcompanybrasil.com/car-as-a-service-o-mundo-do-automovel-alem-da-combustao/"><p>Saber mais</p></a>
						</h2>
					</div>
					<div class="col-1">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="fas fa-times text-white"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade " id="uol" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="uol" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content bg-uol box-modal">
			<div class="modal-body">	
				<div class="row" >
					<div class="col-10 col-md-11">
						<h2 class="text-white" >
						Como o carro sabe a forma que você dirige e até ensina a poupar combustível
						</h2>
						<h2 class="mt-1">
							<a class="text-white" target="_blank" href="https://www.uol.com.br/carros/noticias/redacao/2020/12/17/como-o-carro-sabe-a-forma-que-voce-dirige-e-ate-ensina-a-poupar-combustivel.htm"><p>Saber mais</p></a>
						</h2>
					</div>
					<div class="col-1">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="fas fa-times text-dark"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade " id="folha" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="folha" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content bg-folha box-modal">
			<div class="modal-body">	
				<div class="row" >
					<div class="col-10 col-md-11">
						<h2 class="text-white" >
						Monitoramento permanente do carro vai reduzir valor do seguro
						</h2>
						<h2 class="mt-1">
							<a class="text-white" target="_blank" href="https://www1.folha.uol.com.br/colunas/eduardosodre/2020/11/monitoramento-permanente-do-carro-vai-reduzir-valor-do-seguro.shtml"><p>Saber mais</p></a>
						</h2>
					</div>
					<div class="col-1">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="fas fa-times text-white"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--lago-->
<div class="section bg-lago"> 
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-3"></div>
			<div class="col mx-3 text-center mt-4"><h4 class="text-light">transformando <span class="text-secondary">dados em oportunidade</span></h4></div>
			<div class="col-md-3"></div>
		</div>
		<div class="row m-5">
				<img src="images/lago-logo.png" class="img-fluid mx-auto d-block w-50">
		</div>
	</div>
	<div class="text-center mx-auto home-lago"><h5><a href="{{ url('analytics') }}">Conhe&ccedil;a a plataforma</a></h5></div>
	</div>
</div>
<!--lago-->
<!--element-->
<div class="section py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col mx-3 text-center"><h4>reinventando <span class="text-secondary">a maneira de dirigir</span></h4></div>
			<div class="col-md-3"></div>
		</div>
		<div class="row mt-4">
			<div class="col-md-3"></div>
			<div class="col mx-4">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0.06630325317382812 0.72869873046875 280.8875732421875 31.423765182495117" version="1.1" preserveAspectRatio="xMidYMid meet">
					<!-- Generator: Sketch 57.1 (83088) - https://sketch.com -->
						
					<desc>Created with Sketch.</desc>
					<g id="dda29961-342c-4fa8-a708-3c8d7ad80460" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<g id="5696d03a-e655-43e9-bb4f-69a29b90b5f4" transform="translate(-52.000000, -89.000000)" fill="#000000">
							<g id="cb6824ca-80d0-4628-a22e-d57e0327b654" transform="translate(52.000000, 89.500000)">
								<g id="24e91d2d-c113-4834-8365-66081e46aa71" fill-rule="nonzero">
									<path d="M230.930058,30.4591513 L219.536742,10.0736932 C219.403579,9.83581541 219.152385,9.6881254 218.879401,9.6881254 L218.83582,9.6881254 C218.419988,9.6881254 218.082843,10.0252702 218.082843,10.4411023 L218.082843,29.8617332 C218.082843,30.5378386 217.535058,31.0862286 216.858348,31.0862286 L213.85794,31.0862286 C213.181835,31.0862286 212.633445,30.5378386 212.633445,29.8617332 L212.633445,1.7237601 C212.633445,1.04765462 213.181835,0.499264666 213.85794,0.499264666 L219.635404,0.499264666 C220.078474,0.499264666 220.487648,0.738958286 220.703735,1.12634191 L232.098262,21.5118001 C232.23082,21.7496779 232.482014,21.8973679 232.754998,21.8973679 L232.799789,21.8973679 C233.215016,21.8973679 233.552161,21.560223 233.552161,21.1443909 L233.552161,1.7237601 C233.552161,1.04765462 234.100551,0.499264666 234.776656,0.499264666 L237.777064,0.499264666 C238.453169,0.499264666 239.000954,1.04765462 239.000954,1.7237601 L239.000954,29.8617332 C239.000954,30.5378386 238.453169,31.0862286 237.777064,31.0862286 L231.9996,31.0862286 C231.555319,31.0862286 231.146145,30.846535 230.930058,30.4591513 Z M265.284812,29.8618542 L265.284812,6.9559813 C265.284812,6.27987581 264.737027,5.73148586 264.060922,5.73148586 L256.85377,5.73148586 C256.177665,5.73148586 255.62988,5.18309591 255.62988,4.50699042 L255.62988,1.72388116 C255.62988,1.04777567 256.177665,0.499385723 256.85377,0.499385723 L279.729379,0.499385723 C280.405484,0.499385723 280.953874,1.04777567 280.953874,1.72388116 L280.953874,4.50699042 C280.953874,5.18309591 280.405484,5.73148586 279.729379,5.73148586 L272.524649,5.73148586 C271.848543,5.73148586 271.300153,6.27987581 271.300153,6.9559813 L271.300153,29.8618542 C271.300153,30.5379597 270.751763,31.0857444 270.075658,31.0857444 L266.509307,31.0857444 C265.833202,31.0857444 265.284812,30.5379597 265.284812,29.8618542 Z M86.3805806,24.9013463 C86.3805806,25.5774518 86.9283653,26.1258418 87.6044708,26.1258418 L101.234322,26.1258418 C101.910427,26.1258418 102.458212,26.6742317 102.458212,27.3503372 L102.458212,30.3646661 C102.458212,31.0413768 101.910427,31.5891615 101.234322,31.5891615 L81.4838094,31.5891615 C80.807704,31.5891615 80.259314,31.0413768 80.259314,30.3646661 L80.259314,14.2392172 C80.259314,13.5631117 80.807704,13.0147218 81.4838094,13.0147218 L99.9741143,13.0147218 C100.65022,13.0147218 101.19861,13.5631117 101.19861,14.2392172 L101.19861,16.9484815 C101.19861,17.624587 100.65022,18.1729769 99.9741143,18.1729769 L87.6044708,18.1729769 C86.9283653,18.1729769 86.3805806,18.7207616 86.3805806,19.3968671 L86.3805806,24.9013463 Z M101.709593,4.41910276 C101.709593,5.09520825 101.161203,5.64299291 100.485098,5.64299291 L81.4839305,5.64299291 C80.807825,5.64299291 80.2594351,5.09520825 80.2594351,4.41910276 L80.2594351,1.45319685 C80.2594351,0.776486075 80.807825,0.228701412 81.4839305,0.228701412 L100.485098,0.228701412 C101.161203,0.228701412 101.709593,0.776486075 101.709593,1.45319685 L101.709593,4.41910276 Z M6.18714559,24.9013463 C6.18714559,25.5774518 6.73553553,26.1258418 7.41164102,26.1258418 L21.0408866,26.1258418 C21.7169921,26.1258418 22.265382,26.6742317 22.265382,27.3503372 L22.265382,30.3646661 C22.265382,31.0413768 21.7169921,31.5891615 21.0408866,31.5891615 L1.2903744,31.5891615 C0.614268913,31.5891615 0.0664842499,31.0413768 0.0664842499,30.3646661 L0.0664842499,14.2392172 C0.0664842499,13.5631117 0.614268913,13.0147218 1.2903744,13.0147218 L19.7806792,13.0147218 C20.45739,13.0147218 21.0051747,13.5631117 21.0051747,14.2392172 L21.0051747,16.9484815 C21.0051747,17.624587 20.45739,18.1729769 19.7806792,18.1729769 L7.41164102,18.1729769 C6.73553553,18.1729769 6.18714559,18.7207616 6.18714559,19.3968671 L6.18714559,24.9013463 Z M21.5164605,4.41910276 C21.5164605,5.09520825 20.9680706,5.64299291 20.2919651,5.64299291 L1.29019282,5.64299291 C0.614087326,5.64299291 0.0663026638,5.09520825 0.0663026638,4.41910276 L0.0663026638,1.45319685 C0.0663026638,0.776486075 0.614087326,0.228701412 1.29019282,0.228701412 L20.2919651,0.228701412 C20.9680706,0.228701412 21.5164605,0.776486075 21.5164605,1.45319685 L21.5164605,4.41910276 Z M177.893002,24.9013463 C177.893002,25.5774518 178.441392,26.1258418 179.117498,26.1258418 L192.746743,26.1258418 C193.422849,26.1258418 193.970633,26.6742317 193.970633,27.3503372 L193.970633,30.3646661 C193.970633,31.0413768 193.422849,31.5891615 192.746743,31.5891615 L172.996231,31.5891615 C172.320125,31.5891615 171.771736,31.0413768 171.771736,30.3646661 L171.771736,14.2392172 C171.771736,13.5631117 172.320125,13.0147218 172.996231,13.0147218 L191.486536,13.0147218 C192.162641,13.0147218 192.711031,13.5631117 192.711031,14.2392172 L192.711031,16.9484815 C192.711031,17.624587 192.162641,18.1729769 191.486536,18.1729769 L179.117498,18.1729769 C178.441392,18.1729769 177.893002,18.7207616 177.893002,19.3968671 L177.893002,24.9013463 Z M193.222014,4.41910276 C193.222014,5.09520825 192.67423,5.64299291 191.998124,5.64299291 L172.996352,5.64299291 C172.320247,5.64299291 171.771857,5.09520825 171.771857,4.41910276 L171.771857,1.45319685 C171.771857,0.776486075 172.320247,0.228701412 172.996352,0.228701412 L191.998124,0.228701412 C192.67423,0.228701412 193.222014,0.776486075 193.222014,1.45319685 L193.222014,4.41910276 Z M47.509781,24.9515851 C47.509781,25.6276906 48.0575656,26.1760806 48.7336711,26.1760806 L60.5930577,26.1760806 C61.2691632,26.1760806 61.8175532,26.7244705 61.8175532,27.400576 L61.8175532,30.2345294 C61.8175532,30.9106349 61.2691632,31.4584195 60.5930577,31.4584195 L42.7013817,31.4584195 C42.0252762,31.4584195 41.4774915,30.9106349 41.4774915,30.2345294 L41.4774915,26.1760806 L41.4950448,26.1760806 L41.4950448,1.72369958 C41.4950448,1.04759409 42.0434348,0.499204137 42.7195403,0.499204137 L46.2852855,0.499204137 C46.961391,0.499204137 47.509781,1.04759409 47.509781,1.72369958 L47.509781,24.9515851 Z" id="1bf1abc3-78de-4403-8886-b76f77a1b771"></path>
								</g>
								<rect id="491f0ea4-503e-4325-b75b-fa98b6ec8709" x="121" y="0.34753418" width="5.97164613" height="31.3049316" rx="1.2"></rect>
								<rect id="8f79e9d5-6e15-4747-ab4a-7585f2debe23" x="148.003292" y="0.34753418" width="5.97164613" height="31.3049316" rx="1.2"></rect>
								<rect id="01391e01-d50a-41ec-a7d8-a7c539b38c52" x="134.501646" y="10.5091553" width="5.97164613" height="7.87890625" rx="1.2"></rect>
							</g>
						</g>
					</g>
				</svg>
			</div>
      
			<div class="col-md-3"></div>
			
		</div>
	</div>
</div>
<div class="section h-element-home" >
	<div class="h-element-home" style="left:-240px;margin-top:50px;">
		<div class="bg-wave"></div>
		<img class="img-fluid mx-auto d-block sdl-app-car-hand" src="images/app-car-hand.png" alt="Aplicativo Element" >
		<!--img class="img-fluid  mx-auto d-block sdl-app-hand-remote" src="images/app-hand-remote-control.png" alt="Aplicativo com funcionalidade de controle remoto" -->
		
	</div>
	<div class="text-center mx-auto home-element px-1"><h5>Mais prote&ccedil;&atilde;o e seguran&ccedil;a para seu ve&iacute;culo</h5></div>
		<div  class="text-center mx-auto home-element" ><h5><a href="{{ url('motorista') }}">Conhe&ccedil;a o sistema</a></h5></div>

</div>
	<!--ecossistema-->
	<div class="section">
		<div class="">
			<div class="bg-car-red">
				<div class="container">
					<div class="row py-3"></div>
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col mx-3 text-center"><h4><span class="text-white">reinventando</span> <span class="text-secondary">a maneira de dirigir</span></h4></div>
						<div class="col-md-3"></div>
					</div>
					<div class="row">
						<div class="col text-center pt-3 pb-4"><span style="font-size:3.5rem" class="text-white">Nosso ecossistema</span></h1></div>
						
					</div>
					<div class="row pt-2 px-1">
						<div class="col-0 col-md-1"></div>
						<div class="col-lg-2 col-md-3 col-sm-5 col-6 bg-light rounded-xlg  pt-3 border border-dark">
							<img src="images/icon-car-fleet.png" class="img-fluid px-4" alt="Smart Driving Frotas">
							<a class="text-body text-center" href="{{url('frota')}}">
								<p class="font-weight-bold mb-2">Frotas</p>
								<p class="mb-0">Gestão de frota, avaliação de condução e acidentes</p>
							</a>
						</div>
						<div class="col-0 col-sm d-none d-sm-block"></div>
						<div class="col-lg-2 col-md-3 col-sm-5 col-6 bg-light rounded-xlg  pt-3 border border-dark">
							<img src="images/icon-insurance.png" class="img-fluid px-4" alt="Smart Driving Seguradoras">
							<a class="text-body text-center" href="{{url('seguradora')}}">
								<p class="  mb-1 font-weight-bold">Seguradora</p>
								<p >Pontuação de condução, novos programas de seguro e análise de colisões</p>
							</a>
						</div>
						<div class="col-0 col-md-1"></div>
					</div>
					<div class="row d-none d-md-block">
						<div style="height:120px"></div>
					</div>
					<div class="row d-sm-block d-none">
						<div style="height:50px"></div>
					</div>
					<div class="row d-xs-block d-sm-none">
						<div style="height:30px"></div>
					</div>
					<div class="row px-1">
						<div class="col-0 col-md-1"></div>
						<div class="col-lg-2 col-md-3 col-sm-5 col-6 bg-light rounded-xlg  pt-3 border border-dark">
							<img src="images/icon-carmaker.png" class="img-fluid px-4" alt="Smart Driving Montadoras">
							<a class="text-body text-center" href="{{url('montadora')}}">
								<p class="font-weight-bold mb-1">Montadoras</p>
								<p>Carros concectados, soluções em segurança, marketplace e insights de dados</p>
							</a>
						</div>
						<div class="col-sm d-none d-sm-block"></div>
						<div class="col-lg-2 col-md-3 col-sm-5 col-6 bg-light rounded-xlg  pt-3 border border-dark">
							<img src="images/icon-dealer.png" class="img-fluid px-4" alt="Smart Driving Concessionárias">
							<a class="text-body text-center" href="{{url('concessionaria')}}">
								<p class="  mb-1 font-weight-bold">Concessionária</p>
								<p>Aumento de vendas, diminuição da evasão e fidelização do cliente</p>
							</a>
						</div>
						<div class="col-0 col-md-1"></div>
					</div>
					
				</div>
			</div>
			<!--div class="container">teste</div-->
		</div>
	</div>
@endsection

@section('scripts')

@endsection
