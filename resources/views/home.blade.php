@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Maniobra</h3>
        <div class="card-tools">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="badge badge-primary"></span>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">

                <div class="box-tools pull-right">
                    <a href="{{route('maniobras.create')}}" class="btn btn-s btn-primary pull-right"><i
                            class="fa fa-plus" style=" color: white; "> Registrar
                            nueva Maniobra</i></a>
                </div>
                <br><br>
            </div>
            <div class="box-body">
                <table id="posts-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Fecha de ingreso</th>
                            <th>Nombre maniobra </th>

                            <th>Metros Total</th>

                            <th>Opciones</th>
                        </tr>
                        @foreach ($maniobras as $maniobra)
                        <tr>

                            <td>
                                {{$maniobra->created_at}}
                            </td>
                            <td>
                                {{$maniobra->nombreManiobra}}
                            </td>

                            <td>
                                {{$maniobra->metros}}
                            </td>

                            <td>
                                <a href="{{route('maniobras.edit',$maniobra)}}" class="btn btn-s btn-info"><i
                                        class="fa fa-pencil-alt"></i></a>
                                <a href="{{route('maniobras.destroy',$maniobra)}}" class="btn btn-s btn-danger"
                                    onclick="return confirm('Esta seguro que desea eliminar este registro');"><i
                                        class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        @endforeach

                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
    <script>
        console.log('Hi!');
    </script>
    @stop
