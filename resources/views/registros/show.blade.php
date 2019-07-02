@extends('layouts.app')

@section('content')
<div id="app">
    <v-app id="inspire" style="background-color:#3498db;">
        <v-container grid-list-lg>
            <v-layout align-space-around justify-center column class="form-contenedor">
                <v-card style="padding: 10px; margin-bottom: 10px;">
                <h2 align="center">Estados de Resultados ID:{{$Registro->id}}</h2>
                <a href="/items/create/{{$Registro->id}}" class="btn btn-success btn-lg" role="button" aria-pressed="true">Nuevo item</a>
                </v-card>
                @foreach ($Categorias as $item)
                <v-card style="padding: 10px; margin-bottom: 10px;">
                    <h4>({{ $item->simbolo }}) {{ $item->nombre }}</h4>
                    <v-divider></v-divider>
                    <table class="table" style="margin-top: 10px;">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Concepto</th>
                                <th scope="col">Sucursal</th>
                                <th scope="col">Monto</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($item->relacionItem as $item2)
                            @if($item2->estado_de_resultados_id == $Registro->id)
                                <h6></h6>
                                <tr class="table-info">
                                    <th scope="row">{{ $item2->concepto }}</th>
                                    <td>{{ $item2->sucursal }}</td>
                                    <td>{{ $item2->total }}</td>
                                    <td></td>
                                </tr>
                            
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    <!-- 
                    <H4 align="end">TOTAL FINAL: </H4>
                    -->
                </v-card>
                @endforeach
            </v-layout>
        </v-container>
    </v-app>
</div>
@endsection
