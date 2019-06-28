@extends('layouts.app')

@section('content')
<div id="app">
    <v-app id="inspire" style="background-color:#3498db;">
    <v-container grid-list-lg>
        <v-layout align-space-around justify-center column class="form-contenedor">
            <v-card style="padding: 10px;">
                <h1>Editar registro</h1>
                <v-divider></v-divider>
                <h3>Datos del Registro</h3>
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="/asesoria/{{ $Asesorias->id}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <v-layout>
                            <v-flex xs4>
                                <v-text-field type="text" id="concepto" name="concepto" label="Concepto"
                                    value="{{old('concepto')}}" :counter="30">
                                </v-text-field>
                            </v-flex>
                            <v-flex xs4>
                                <v-text-field type="text" id="centro_resultado" name="centro_resultado" label="Centro de resultado"
                                    value="{{old('centro_resultado')}}" :counter="10">
                                </v-text-field>
                            </v-flex>
                            <v-flex xs4>
                                <v-text-field type="text" id="acumulado" name="acumulado" label="Acumulado"
                                    value="{{old('acumulado')}}" :counter="10">
                                </v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout>
                            <v-flex xs4>
                                <h5>Categoria</h5>
                            </v-flex>
                        </v-layout>
                        <v-layout>
                            <v-flex xs4>
                                <select class="form-control btn-lg" type="text" id="categoria_id"
                                    name="categoria_id" label="Categoria_id">
                                    @foreach ($Categorias as $item)
                                    <option value="{{ $item->id}}"> {{ $item->id}} - {{ $item->nombre }}
                                    </option>
                                    @endforeach
                                </select>
                            </v-flex>
                        </v-layout>
                    </div>
                    <v-btn color="success" type="submit">Editar</v-btn>
                    <v-btn color="error" href="/asesoria"> Cancelar </v-btn>
                </form>
            </v-card>
        </v-layout>
    </v-container>
    </v-app>
</div>
@endsection
