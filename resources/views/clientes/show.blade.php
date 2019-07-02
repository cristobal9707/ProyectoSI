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
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Clientes->relacionEstadoDeResultado as $item)
                            <tr class="table-info">
                                <th scope="row">{{ $item->fecha }}</th>
                                <td>{{ $item->nombre }}</td>
                                <td><form action="/registros/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="/registros/{{ $item->id }}/edit" class="btn btn-success" role="button" aria-pressed="true">Editar</a>
                                    <a href="/registros/{{ $item->id }}" class="btn btn-info" role="button" aria-pressed="true">Informacion</a>
                                    <a href="/export/{{$item->id}}" class="btn btn-primary" role="button" aria-pressed="true">Exportar</a>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
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
