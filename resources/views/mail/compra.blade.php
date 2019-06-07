<!DOCTYPE html>
<html>
<body>
<h2>DISTREN</h2>

    <h3>Pedido</h3>
    <p>Enviado desde la web</p>
    <br>
<h3>Datos Personales</h3>
<ul>
    <li><strong>Nombre:</strong> {{$datos["nombre"]}} {{$datos["apellido"]}}</li>
    @if(!empty($datos["telefono"]))
        <li><strong>Télefono:</strong> {{$datos["telefono"]}}</li>
    @endif
    <li><strong>Domicilio:</strong> {{$datos["domicilio"] }}</li>
    <li><strong>Provincia:</strong> {{$datos["provincia"]}}</li>
    <li><strong>Localidad:</strong> {{$datos["localidad"]}}</li>
    <li><strong>Email:</strong> <a href="mailto:{{$datos['email']}}">{{$datos['email']}}</a></li>
</ul>
<br>
<h4>Productos:</h4>
<table style="width:100%">
    <thead>
    <th style="background: #dedede; text-align:left; padding: 5px;">Categoria</th>
    <th style="background: #dedede; text-align:left; padding: 5px;">Producto</th>
    <th style="background: #dedede; text-align:left; padding: 5px;">ml/cm2</th>
    <th style="background: #dedede; text-align:left; padding: 5px;">Precio</th>
    <th style="background: #dedede; text-align:left; padding: 5px;">Cant. Envases / Potes</th>
    <th style="background: #dedede; text-align:left; padding: 5px;">Subtotal</th>
    <th style="background: #dedede; text-align:left; padding: 5px;">Terminación</th>
    <th style="background: #dedede; text-align:left; padding: 5px;">Precio</th>
    <th style="background: #dedede; text-align:left; padding: 5px;">Cierre</th>
    <th style="background: #dedede; text-align:left; padding: 5px;">Cant. Cierres</th>
    <th style="background: #dedede; text-align:left; padding: 5px;">Precio</th>
    <th style="background: #dedede; text-align:left; padding: 5px;">Subtotal</th>
    <th style="background: #dedede; text-align:left; padding: 5px;">Subtotal Productos</th>
    </thead>
    <tbody>
    @foreach($pedido as $p)
        <tr>
            <td style="border-bottom: 1px solid; padding: 5px;">{{ $p['categoria'] }}</td>
            <td style="border-bottom: 1px solid; padding: 5px;">{{ $p['producto'] }}</td>
            <td style="border-bottom: 1px solid; padding: 5px;">{{ $p['cc'] }}</td>
            <td style="border-bottom: 1px solid; padding: 5px;">{{ $p['precio_cc'] }}</td>
            <td style="border-bottom: 1px solid; padding: 5px;">{{ $p['cantidad_cc'] }}</td>
            <td style="border-bottom: 1px solid; padding: 5px;">{{ $p['cantidad_cc']*$p['precio_cc'] }}</td>
            <td style="border-bottom: 1px solid; padding: 5px;">{{ $p['tipo_terminacion']['title'] }}</td>
            <td style="border-bottom: 1px solid; padding: 5px;">{{ $p['tipo_terminacion']['price'] }}</td>
            <td style="border-bottom: 1px solid; padding: 5px;">{{ $p['tipo_cierre']['title'] }}</td>
            <td style="border-bottom: 1px solid; padding: 5px;">{{ $p['cantidad_cierre'] }}</td>
            <td style="border-bottom: 1px solid; padding: 5px;">{{ $p['tipo_cierre']['price'] }}</td>
            <td style="border-bottom: 1px solid; padding: 5px;">{{ $p['cantidad_cierre']*$p['tipo_cierre']['price'] }}</td>
            <td style="border-bottom: 1px solid; padding: 5px;">{{ ($p['cantidad_cc']*$p['precio_cc'])+($p['cantidad_cc']*$p['tipo_terminacion']['price'])+($p['cantidad_cierre']*$p['tipo_cierre']['price']) }}</td>
            {{--<td style="border-bottom: 1px solid; padding: 5px;">{{$p->producto["producto"]}}</td>--}}
            {{--<td style="border-bottom: 1px solid; padding: 5px;">{{$p->producto->familia["cc"]}}</td>--}}
            {{--<td style="border-bottom: 1px solid; padding: 5px;">{{$p->cantidad}}</td>--}}
            {{--<td style="border-bottom: 1px solid; padding: 5px;">$ {{number_format($p["precio"],2,",",".")}}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>
{{--<h3 style="text-align:right;padding: 5px">Total: $ {{number_format($transaccion["total"],2,",",".")}}</h3>--}}
</body>
</html>