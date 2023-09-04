<h1>{{$Titulo}}</h1>

<h1>Essa é uma mensagem</h1>
<p>Texto qualquer</p>
{{--Isso é um comentário--}}    

{{-- isset($nome) ? 'existe' : 'não existe'--}}

{{--$teste ?? 'Padrao'--}}

{{--Estrutura de controle--}}

@foreach ($frutas as $fruta)
    {{$fruta}} <br>
@endforeach
 