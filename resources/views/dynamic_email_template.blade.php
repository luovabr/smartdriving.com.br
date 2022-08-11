<h1>Novo contato via site da Smart Driving labs</h1>
<p> Olá, eu sou {{$data['nome']}}</p>
<p> Gostaria de: {{$data['mensagem']}}</p>
<p>Meu e-mail é: {{$data['email']}}</p>
<p> Meu telefone é:{{$data['telefone']}}</p>
@if (!empty($data['empresa']))
<p> Sou da empresa: {{$data['empresa']}}</p>
@endif
