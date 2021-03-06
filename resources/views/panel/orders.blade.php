@extends('templates.institucional')
@section('content')

    <link rel="stylesheet" href="/css/panel.css">
    
    <section id="panel">

                <div class="main-nav">
                    <nav>
                        <ul>
                            <li><a href="/panel">PAINEL</a></li>
                            <li class="active"><a href="/panel/orders">PEDIDOS</a></li>
                            <li><a href="/panel/address">ENDEREÇOS</a></li>
                            <li><a href="/panel/account/edit">CONTA</a></li>
                            <li id="logout"><a href="/logout">SAIR</a></li>
                        </ul>
                    </nav>
                </div>
{{--  @dd($pedidos)  --}}
                <div class="main-container">

                @if (count($pedidos) === 0)

                    <div id="empty">
                        <p class="info">Você ainda não possuí pedidos!</p>
                    </div>

                @else

                

                    <table class="table-mobile">
                        <thead>
                            <tr>
                                <td>Pedido</td>
                                <td>Data</td>
                                <td>Status</td>
                                <td>Total</td>
                                <td>Ações</td>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($pedidos as $item)
                                    <tr>
                                        <td> <span>Pedido<br></span> #{{$item->orders_id}}</td>
                                        <td> <span>Data<br></span> {{ \Carbon\Carbon::parse($item->date)->format('d/m/Y')}} - {{ \Carbon\Carbon::parse($item->date)->format('H:i:s')}}</td>
                                        <td> <span>Status<br></span> {{$item->state}}</td>
                                        <td> <span>Total<br></span> R$ {{number_format($item->total_price, 2, ',', '.')}}</td>
                                        <td> <span>Ações<br></span> <a href="/panel/orders/{{$item->orders_id}}">Visualizar</a></td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>        
    </section>

@endsection