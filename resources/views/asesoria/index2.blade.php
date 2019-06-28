
 <!--version 1-->
 @extends('layouts.app')

 @section('content')
 
 
 <div id="app">
     <v-app id="inspire" style="background-color:#3498db;">
         <!--Section-->
         <v-container fluid grid-list-lg>
             <v-layout align-space-around justify-center column class="form-contenedor">
                     <h2>ESTADO DE RESULTADOS</h2>
                 <v-card style="padding: 10px; margin-bottom: 10px;">
                     <div class="content">
                         <h4>{{ $Categorias1->nombre}}</h4>
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">Concepto</th>
                                     <th scope="col">Centro de Resultados</th>
                                     <th scope="col">Acumulado</th>
                                 </tr>
                             </thead>
                             @foreach ($Categorias1->auditorias as $item)
                                 <tr>
                                     <td>{{ $item->concepto }}</td>
                                     <td>{{ $item->centro_resultado }}</td>
                                     <td>{{ $item->acumulado }}</td>
                                 </tr>
                             @endforeach
                         </table>
                         <h4>{{ $Categorias2->nombre}}</h4>
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">Concepto</th>
                                     <th scope="col">Centro de Resultados</th>
                                     <th scope="col">Acumulado</th>
                                 </tr>
                             </thead>
                             @foreach ($Categorias2->auditorias as $item)
                                 <tr>
                                     <td>{{ $item->concepto }}</td>
                                     <td>{{ $item->centro_resultado }}</td>
                                     <td>{{ $item->acumulado }}</td>
                                 </tr>
                             @endforeach
                         </table>
                         <v-divider></v-divider>
                         <h4 align="end">MARGEN DE EXPLOTACION: MUCHO XD</h4>
                     </div>
                 </v-card>
 
                 <v-card style="padding: 10px; margin-bottom: 10px;">
                     <div class="content">
                         <h4>{{ $Categorias3->nombre}}</h4>
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">Concepto</th>
                                     <th scope="col">Centro de Resultados</th>
                                     <th scope="col">Acumulado</th>
                                 </tr>
                             </thead>
                             @foreach ($Categorias3->auditorias as $item)
                                 <tr>
                                     <td>{{ $item->concepto }}</td>
                                     <td>{{ $item->centro_resultado }}</td>
                                     <td>{{ $item->acumulado }}</td>
                                 </tr>
                             @endforeach
                         </table>
                         <v-divider></v-divider>
                         <h4 align="end">RESULTADO OPERACIONAL: MUCHO XD</h4>
                     </div>
                 </v-card>
 
                 <v-card style="padding: 10px; margin-bottom: 10px; ">
                     <div class="content">
                         <h4>{{ $Categorias4->nombre}}</h4>
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">Concepto</th>
                                     <th scope="col">Centro de Resultados</th>
                                     <th scope="col">Acumulado</th>
                                 </tr>
                             </thead>
                             @foreach ($Categorias4->auditorias as $item)
                                 <tr>
                                     <td>{{ $item->concepto }}</td>
                                     <td>{{ $item->centro_resultado }}</td>
                                     <td>{{ $item->acumulado }}</td>
                                 </tr>
                             @endforeach
                         </table>
                         <h4>{{ $Categorias5->nombre}}</h4>
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">Concepto</th>
                                     <th scope="col">Centro de Resultados</th>
                                     <th scope="col">Acumulado</th>
                                 </tr>
                             </thead>
                             @foreach ($Categorias5->auditorias as $item)
                                 <tr>
                                     <td>{{ $item->concepto }}</td>
                                     <td>{{ $item->centro_resultado }}</td>
                                     <td>{{ $item->acumulado }}</td>
                                 </tr>
                             @endforeach
                         </table>
                         <h4>{{ $Categorias6->nombre}}</h4>
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">Concepto</th>
                                     <th scope="col">Centro de Resultados</th>
                                     <th scope="col">Acumulado</th>
                                 </tr>
                             </thead>
                             @foreach ($Categorias6->auditorias as $item)
                                 <tr>
                                     <td>{{ $item->concepto }}</td>
                                     <td>{{ $item->centro_resultado }}</td>
                                     <td>{{ $item->acumulado }}</td>
                                 </tr>
                             @endforeach
                         </table>
                         <h4>{{ $Categorias7->nombre}}</h4>
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">Concepto</th>
                                     <th scope="col">Centro de Resultados</th>
                                     <th scope="col">Acumulado</th>
                                 </tr>
                             </thead>
                             @foreach ($Categorias7->auditorias as $item)
                                 <tr>
                                     <td>{{ $item->concepto }}</td>
                                     <td>{{ $item->centro_resultado }}</td>
                                     <td>{{ $item->acumulado }}</td>
                                 </tr>
                             @endforeach
                         </table>
                         <h4>{{ $Categorias8->nombre}}</h4>
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">Concepto</th>
                                     <th scope="col">Centro de Resultados</th>
                                     <th scope="col">Acumulado</th>
                                 </tr>
                             </thead>
                             @foreach ($Categorias8->auditorias as $item)
                                 <tr>
                                     <td>{{ $item->concepto }}</td>
                                     <td>{{ $item->centro_resultado }}</td>
                                     <td>{{ $item->acumulado }}</td>
                                 </tr>
                             @endforeach
                         </table>
                         <h4>{{ $Categorias9->nombre}}</h4>
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">Concepto</th>
                                     <th scope="col">Centro de Resultados</th>
                                     <th scope="col">Acumulado</th>
                                 </tr>
                             </thead>
                             @foreach ($Categorias9->auditorias as $item)
                                 <tr>
                                     <td>{{ $item->concepto }}</td>
                                     <td>{{ $item->centro_resultado }}</td>
                                     <td>{{ $item->acumulado }}</td>
                                 </tr>
                             @endforeach
                         </table>
                         <v-divider></v-divider>
                         <h4 align="end">GASTOS FINANCIEROS: MUCHO XD</h4>
                         <v-divider></v-divider>
                         <h4>{{ $Categorias10->nombre}}</h4>
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">Concepto</th>
                                     <th scope="col">Centro de Resultados</th>
                                     <th scope="col">Acumulado</th>
                                 </tr>
                             </thead>
                             @foreach ($Categorias10->auditorias as $item)
                                 <tr>
                                     <td>{{ $item->concepto }}</td>
                                     <td>{{ $item->centro_resultado }}</td>
                                     <td>{{ $item->acumulado }}</td>
                                 </tr>
                             @endforeach
                         </table>
                         <h4>{{ $Categorias11->nombre}}</h4>
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">Concepto</th>
                                     <th scope="col">Centro de Resultados</th>
                                     <th scope="col">Acumulado</th>
                                 </tr>
                             </thead>
                             @foreach ($Categorias11->auditorias as $item)
                                 <tr>
                                     <td>{{ $item->concepto }}</td>
                                     <td>{{ $item->centro_resultado }}</td>
                                     <td>{{ $item->acumulado }}</td>
                                 </tr>
                             @endforeach
                         </table>
                         <v-divider></v-divider>
                         <h4 align="end">RESULTADO NO OPERACIONAL: MUCHO XD</h4>
                         <h4 align="end">RESULTADO ANTES IMPUESTO A LA RENTA: MUCHO XD</h4>
                     </div>
                 </v-card>
 
                 <v-card style="padding: 10px; margin-bottom: 10px;">
                     <div class="content">
                         <h4>{{ $Categorias12->nombre}}</h4>
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">Concepto</th>
                                     <th scope="col">Centro de Resultados</th>
                                     <th scope="col">Acumulado</th>
                                 </tr>
                             </thead>
                             @foreach ($Categorias12->auditorias as $item)
                                 <tr>
                                     <td>{{ $item->concepto }}</td>
                                     <td>{{ $item->centro_resultado }}</td>
                                     <td>{{ $item->acumulado }}</td>
                                 </tr>
                             @endforeach
                         </table>
                         <h4>{{ $Categorias13->nombre}}</h4>
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">Concepto</th>
                                     <th scope="col">Centro de Resultados</th>
                                     <th scope="col">Acumulado</th>
                                 </tr>
                             </thead>
                             @foreach ($Categorias13->auditorias as $item)
                                 <tr>
                                     <td>{{ $item->concepto }}</td>
                                     <td>{{ $item->centro_resultado }}</td>
                                     <td>{{ $item->acumulado }}</td>
                                 </tr>
                             @endforeach
                         </table>
                         <h4>{{ $Categorias14->nombre}}</h4>
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">Concepto</th>
                                     <th scope="col">Centro de Resultados</th>
                                     <th scope="col">Acumulado</th>
                                 </tr>
                             </thead>
                             @foreach ($Categorias14->auditorias as $item)
                                 <tr>
                                     <td>{{ $item->concepto }}</td>
                                     <td>{{ $item->centro_resultado }}</td>
                                     <td>{{ $item->acumulado }}</td>
                                 </tr>
                             @endforeach
                         </table>
                         <v-divider></v-divider>
                         <h4 align="end">UTILIDAD (PERDIDA) LIQUIDA: MUCHO XD</h4>
                     </div>
                 </v-card>
 
                 <v-card style="padding: 10px; margin-bottom: 10px;">
                     <div class="content">
                         <h4>{{ $Categorias15->nombre}}</h4>
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">Concepto</th>
                                     <th scope="col">Centro de Resultados</th>
                                     <th scope="col">Acumulado</th>
                                 </tr>
                             </thead>
                             @foreach ($Categorias15->auditorias as $item)
                                 <tr>
                                     <td>{{ $item->concepto }}</td>
                                     <td>{{ $item->centro_resultado }}</td>
                                     <td>{{ $item->acumulado }}</td>
                                 </tr>
                             @endforeach
                         </table>
                         <v-divider></v-divider>
                         <h4 align="end">UTILIDAD (PERDIDA) DEL EJERCICIO: MUCHO XD</h4>
                     </div>
                 </v-card>
 
             </v-layout>
         </v-container>
     </v-app>
 </div>
 <!--Scripts-->
 <script src="{{asset('js/app.js')}}"></script>
 @endsection
 



















 <!--version 2-->
@extends('layouts.app')

@section('content')


<div id="app">
    <v-app id="inspire" style="background-color:#3498db;">
        <!--Section-->
        <v-container fluid grid-list-lg>
            <v-layout align-space-around justify-center column class="form-contenedor">
                <v-card max-width="345px" style="padding: 10px; margin-bottom: 10px;">
                    <h2>ESTADO DE RESULTADOS</h2>
                    <v-btn color="success">Agregar</v-btn>
                    <v-btn color="info">Exportar</v-btn>
                </v-card>
                <v-card style="padding: 10px; margin-bottom: 10px;">
                    <div class="content">
                        <h4>Explotacion</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Concepto</th>
                                    <th scope="col">Centro de Resultados</th>
                                    <th scope="col">Acumulado</th>
                                </tr>
                            </thead>
                            @foreach ($Categorias1->auditorias as $item)
                            <tr>
                                <td>{{ $item->categorias->nombre }}</td>
                                <td>{{ $item->concepto }}</td>
                                <td>{{ $item->centro_resultado }}</td>
                                <td>{{ $item->acumulado }}</td>
                            </tr>
                            @endforeach
                            @foreach ($Categorias2->auditorias as $item)
                            <tr>
                                <td>{{ $item->categorias->nombre }}</td>
                                <td>{{ $item->concepto }}</td>
                                <td>{{ $item->centro_resultado }}</td>
                                <td>{{ $item->acumulado }}</td>
                            </tr>
                            @endforeach
                        </table>

                        <h4 align="end">MARGEN DE EXPLOTACION: MUCHO XD</h4>
                    </div>
                </v-card>

                <v-card style="padding: 10px; margin-bottom: 10px;">
                    <div class="content">
                        <h4>{{ $Categorias3->nombre}}</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Concepto</th>
                                    <th scope="col">Centro de Resultados</th>
                                    <th scope="col">Acumulado</th>
                                </tr>
                            </thead>
                            @foreach ($Categorias3->auditorias as $item)
                            <tr>
                                <td>{{ $item->concepto }}</td>
                                <td>{{ $item->centro_resultado }}</td>
                                <td>{{ $item->acumulado }}</td>
                            </tr>
                            @endforeach
                        </table>

                        <h4 align="end">RESULTADO OPERACIONAL: MUCHO XD</h4>
                    </div>
                </v-card>

                <v-card style="padding: 10px; margin-bottom: 10px; ">
                    <div class="content">
                        <h4>Gastos Financieros</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Concepto</th>
                                    <th scope="col">Centro de Resultados</th>
                                    <th scope="col">Acumulado</th>
                                </tr>
                            </thead>
                            @foreach ($Categorias4->auditorias as $item)
                            <tr>
                                <td>{{ $item->categorias->nombre }}</td>
                                <td>{{ $item->concepto }}</td>
                                <td>{{ $item->centro_resultado }}</td>
                                <td>{{ $item->acumulado }}</td>
                            </tr>
                            @endforeach
                            @foreach ($Categorias5->auditorias as $item)
                            <tr>
                                <td>{{ $item->categorias->nombre }}</td>
                                <td>{{ $item->concepto }}</td>
                                <td>{{ $item->centro_resultado }}</td>
                                <td>{{ $item->acumulado }}</td>
                            </tr>
                            @endforeach
                            @foreach ($Categorias6->auditorias as $item)
                            <tr>
                                <td>{{ $item->categorias->nombre }}</td>
                                <td>{{ $item->concepto }}</td>
                                <td>{{ $item->centro_resultado }}</td>
                                <td>{{ $item->acumulado }}</td>
                            </tr>
                            @endforeach
                            @foreach ($Categorias7->auditorias as $item)
                            <tr>
                                <td>{{ $item->categorias->nombre }}</td>
                                <td>{{ $item->concepto }}</td>
                                <td>{{ $item->centro_resultado }}</td>
                                <td>{{ $item->acumulado }}</td>
                            </tr>
                            @endforeach
                            @foreach ($Categorias8->auditorias as $item)
                            <tr>
                                <td>{{ $item->categorias->nombre }}</td>
                                <td>{{ $item->concepto }}</td>
                                <td>{{ $item->centro_resultado }}</td>
                                <td>{{ $item->acumulado }}</td>
                            </tr>
                            @endforeach
                            @foreach ($Categorias9->auditorias as $item)
                            <tr>
                                <td>{{ $item->categorias->nombre }}</td>
                                <td>{{ $item->concepto }}</td>
                                <td>{{ $item->centro_resultado }}</td>
                                <td>{{ $item->acumulado }}</td>
                            </tr>
                            @endforeach
                        </table>

                        <h4 align="end">GASTOS FINANCIEROS: MUCHO XD</h4>
                        <v-divider></v-divider>
                        <h4>{{ $Categorias10->nombre}}</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Concepto</th>
                                    <th scope="col">Centro de Resultados</th>
                                    <th scope="col">Acumulado</th>
                                </tr>
                            </thead>
                            @foreach ($Categorias10->auditorias as $item)
                            <tr>
                                <td>{{ $item->concepto }}</td>
                                <td>{{ $item->centro_resultado }}</td>
                                <td>{{ $item->acumulado }}</td>
                            </tr>
                            @endforeach
                        </table>
                        <h4>{{ $Categorias11->nombre}}</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Concepto</th>
                                    <th scope="col">Centro de Resultados</th>
                                    <th scope="col">Acumulado</th>
                                </tr>
                            </thead>
                            @foreach ($Categorias11->auditorias as $item)
                            <tr>
                                <td>{{ $item->concepto }}</td>
                                <td>{{ $item->centro_resultado }}</td>
                                <td>{{ $item->acumulado }}</td>
                            </tr>
                            @endforeach
                        </table>

                        <h4 align="end">RESULTADO NO OPERACIONAL: MUCHO XD</h4>
                        <h4 align="end">RESULTADO ANTES IMPUESTO A LA RENTA: MUCHO XD</h4>
                    </div>
                </v-card>

                <v-card style="padding: 10px; margin-bottom: 10px;">
                    <div class="content">
                        <h4>Perdida Liquida</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Concepto</th>
                                    <th scope="col">Centro de Resultados</th>
                                    <th scope="col">Acumulado</th>
                                </tr>
                            </thead>
                            @foreach ($Categorias12->auditorias as $item)
                            <tr>
                                <td>{{ $item->categorias->nombre }}</td>
                                <td>{{ $item->concepto }}</td>
                                <td>{{ $item->centro_resultado }}</td>
                                <td>{{ $item->acumulado }}</td>
                            </tr>
                            @endforeach
                            @foreach ($Categorias13->auditorias as $item)
                            <tr>
                                <td>{{ $item->categorias->nombre }}</td>
                                <td>{{ $item->concepto }}</td>
                                <td>{{ $item->centro_resultado }}</td>
                                <td>{{ $item->acumulado }}</td>
                            </tr>
                            @endforeach
                            @foreach ($Categorias14->auditorias as $item)
                            <tr>
                                <td>{{ $item->categorias->nombre }}</td>
                                <td>{{ $item->concepto }}</td>
                                <td>{{ $item->centro_resultado }}</td>
                                <td>{{ $item->acumulado }}</td>
                            </tr>
                            @endforeach
                        </table>
                        <h4 align="end">UTILIDAD (PERDIDA) LIQUIDA: MUCHO XD</h4>
                    </div>
                </v-card>

                <v-card style="padding: 10px; margin-bottom: 10px;">
                    <div class="content">
                        <h4>{{ $Categorias15->nombre}}</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Concepto</th>
                                    <th scope="col">Centro de Resultados</th>
                                    <th scope="col">Acumulado</th>
                                </tr>
                            </thead>
                            @foreach ($Categorias15->auditorias as $item)
                            <tr>
                                <td>{{ $item->concepto }}</td>
                                <td>{{ $item->centro_resultado }}</td>
                                <td>{{ $item->acumulado }}</td>
                            </tr>
                            @endforeach
                        </table>
                        <h4 align="end">UTILIDAD (PERDIDA) DEL EJERCICIO: MUCHO XD</h4>
                    </div>
                </v-card>
            </v-layout>
        </v-container>
    </v-app>
</div>

@endsection
