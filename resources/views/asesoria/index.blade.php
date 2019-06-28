<!--version 2-->
@extends('layouts.app')

@section('content')


<div id="app">
    <v-app id="inspire" style="background-color:#3498db;">
        <!--Section-->
        <v-container grid-list-lg>
            <v-layout align-space-around justify-center column class="form-contenedor">
                <v-card max-width="345px" style="padding: 10px; margin-bottom: 10px;">
                    <h2>ESTADO DE RESULTADOS</h2>
                    <v-divider></v-divider>
                    <v-btn color="success" href="/asesoria/create" >Agregar</v-btn>
                    <v-btn color="info">Exportar</v-btn>
                </v-card>




                <v-card style="padding: 10px; margin-bottom: 10px;">
                    <div class="content">
                        <h4>Explotacion</h4>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Concepto</th>
                                    <th scope="col">Centro de Resultados</th>
                                    <th scope="col">Acumulado</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            @foreach ($Categorias as $item)
                            @foreach ($item->asesorias as $items)
                            <tr>
                                <td>{{ $items->concepto }}</td>
                                <td>{{ $items->centro_resultado }}</td>
                                <td>{{ $items->acumulado }}</td>
                                <td>
                                    <form action="/asesoria/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <v-btn color="success" href="/asesoria/{{ $item->id }}/edit">Editar</v-btn>
                                        <v-btn color="info" href="/asesoria/{{ $item->id }}">Info</v-btn>
                                        <v-btn color="error" type="submit">Eliminar</v-btn>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                        </table>
                    </div>
                </v-card>
            </v-layout>
        </v-container>
    </v-app>
</div>
@endsection
