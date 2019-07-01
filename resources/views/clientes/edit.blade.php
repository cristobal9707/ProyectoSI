@extends('layouts.app')

@section('content')
<div id="app">
    <v-app id="inspire" style="background-color:#3498db;">
        <v-container grid-list-lg>
                <v-layout align-space-around justify-center column class="form-contenedor">
                        <v-card style="padding: 10px;">
                            <h1>Editar Cliente: N° {{ $Clientes->id }}</h1>
                            <v-divider></v-divider>
                            <h3>Datos del Cliente</h3>
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="/clientes/{{ $Clientes->id }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <v-layout>
                                        <v-flex xs6>
                                            <v-text-field type="text" id="nombre" name="nombre" label="Nombre"
                                                value="{{old('nombre')}}" :counter="30">
                                            </v-text-field>
                                        </v-flex>
                                        <v-flex xs6>
                                            <v-text-field type="text" id="email" name="email" label="Email"
                                                value="{{old('email')}}" :counter="40">
                                            </v-text-field>
                                        </v-flex>
                                    </v-layout>
                                    
                                </div>
                                <v-btn color="success" type="submit">Editar</v-btn>
                                <v-btn color="error" href="/clientes"> Cancelar </v-btn>
                            </form>
                        </v-card>
                    </v-layout>
        </v-container>
    </v-app>
</div>
@endsection
