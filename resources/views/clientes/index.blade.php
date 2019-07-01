@extends('layouts.app')

@section('content')
<div id="app">
    <v-app id="inspire" style="background-color:#3498db;">
        <v-container grid-list-lg>
            <v-layout align-space-around justify-center column class="form-contenedor">
                <v-card style="padding: 10px; margin-bottom: 10px;">
                    <h2>Clientes Registrados</h2>
                    <v-divider></v-divider>
                    <a href="/clientes/create" class="btn btn-success btn-lg" role="button" aria-pressed="true">Nuevo Cliente</a>

                    
                        <table class="table" style="margin-top: 10px;">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Clientes</th>
                                    <th scope="col">Email</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Clientes as $item)
                                <tr class="table-info">
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <form action="/clientes/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="/clientes/{{ $item->id }}/edit" class="btn btn-success" role="button" aria-pressed="true">Editar</a>
                                            <a href="/clientes/{{ $item->id }}" class="btn btn-primary" role="button" aria-pressed="true">Registros</a>
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
