@extends('layouts.app')

@section('content')
<div id="app">
    <v-app id="inspire" style="background-color:#3498db;">
        <v-container grid-list-lg>
            <v-layout align-space-around justify-center column class="form-contenedor">
                <v-card style="padding: 10px; margin-bottom: 10px;">
                    <h2>Registros - {{$Clientes->nombre}}</h2>
                    <v-divider></v-divider>
                    <a href="/clientes" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Volver</a>
                    <table class="table" style="margin-top: 10px;">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Total</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Clientes->relacionEstadoDeResultado as $item)
                            <tr class="table-info">
                                <th scope="row">{{ $item->fecha }}</th>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </v-card>
            </v-layout>
        </v-container>
    </v-app>
</div>
@endsection
