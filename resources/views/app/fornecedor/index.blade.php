<h3>Fornecedor</h3>

@php 

    // if(){



    // }elseif(){



    // }else{



    // }
//@dd($fornecedores);

@endphp

@isset($fornecedores)

    @foreach($fornecedores as $indice => $fornecedor)
        Fornecedor: {{$fornecedor['nome']}}
        @php @endphp
        <br>
        Status:{{$fornecedor['status']}}
        <br>
        CNPJ: {{$fornecedor['cnpj'] ?? 'Dado não foi preenchido'}}
        <br>
        Telefone: ({{$fornecedor['ddd'] ?? 'Dado não foi preenchido'}})
        {{$fornecedor['telefone'] ?? 'Dado não foi preenchido'}}
            <hr>  
    @endforeach
@endisset
<br>
