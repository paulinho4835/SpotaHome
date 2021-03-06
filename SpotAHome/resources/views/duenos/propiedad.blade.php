@extends('layouts.app_duenos')

@section('title', 'Propiedades')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <section class="content">
                <div class="col-md-12 col-md-offset-0">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <a href="{{action('PropiedadDuenoController@create')}}" class="btn btn-success btn-block">Agregar Propiedad</a>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <a href="{{ route('dueno.mapageneral', $user->id_dueno) }}" class="btn btn-info btn-block" >Ver Mapa</a>
                                </div>

                            </div>
                            <div class="pull-left"><h1>Listado de Propiedades</h1></div>
                            <div class="col-sm-4">
                            </div>
                            <div class="table-container">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th width="250px">Direccion</th>
                                        <th width="150px">Ciudad</th>
                                        <th width="80px">Zona</th>
                                        <th width="80px">Costo</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($propiedades as $propiedad)
                                        <tr>
                                            <td>{{$propiedad->direccion}}</td>
                                            <td>
                                                <strong>
                                                    {{$propiedad->ciudad}}
                                                </strong>
                                            </td>
                                            <td>
                                                <strong>
                                                    {{$propiedad->zona}}
                                                </strong>
                                            </td>

                                            <td>{{$propiedad->costo}}</td>
                                            <td>
                                                <a href="{{action('PropiedadDuenoController@show', $propiedad->id_propiedad)}}" class="btn btn-link">Ver</a>
                                            </td>
                                            <td>
                                                <a href="{{action('MapaDuenoController@location', $propiedad->id_propiedad)}}" class="btn btn-link">Ubicacion</a>
                                            </td>
                                            <td>
                                                <a href="{{action('PropiedadDuenoController@edit', $propiedad->id_propiedad)}}" class="btn btn-link">Editar</a>
                                            </td>
                                            <td>
                                                <a href="{{action('PropiedadFechasController@edit', $propiedad->id_propiedad)}}" class="btn btn-link">Editar fechas</a>
                                            </td>
                                            <td>
                                            <td>
                                                <a href="{{action('PropiedadFotoController@edit',$propiedad->id_propiedad )}}" class="btn btn-link">Editar Multimedia</a>
                                            </td>
                                            <td>
                                                <form action="{{action('PropiedadDuenoController@destroy', $propiedad->id_propiedad)}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-link">Borrar</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {!! $propiedades->render() !!}
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>


@endsection
