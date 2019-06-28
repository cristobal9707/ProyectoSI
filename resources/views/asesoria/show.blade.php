@extends('layouts.app')

@section('content')
<div id="app">
    <v-app id="inspire" style="background-color:#3498db;">
        <v-container grid-list-lg>
            <v-layout align-space-around justify-center column class="form-contenedor">
                <v-card style="padding: 10px;">
                    <h1>Registro</h1>
                    <v-btn color="info" href="{{ url('/asesoria') }}">Volver</v-btn>
                    <v-divider></v-divider>
                    <h3>Información del registro<h3>
                    <h5>Categorias: {{ $Asesorias->categorias->nombre }}</h5>
                    <h5>Concepto: {{ $Asesorias->concepto }}</h5>
                    <h5>Centro de Resultado: {{ $Asesorias->centro_resultado }}</h5>
                    <h5>Acumulado: {{ $Asesorias->acumulado }}</h5>
                    <v-divider></v-divider>
                    <h3>Fechas</h3>
                    <h5>Fecha de creacion: {{ $Asesorias->created_at }}</h5>
                    <h5>Fecha de modificacion: {{ $Asesorias->updated_at }}</h5>
                </v-card>
            </v-layout>
        </v-container>
    </v-app>
</div>
@endsection
