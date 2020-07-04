@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Crear maniobra</h3>
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

            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12">

                        <div id="add-listing">
                            <form method="POST" action="{{ route('maniobras.save')}}" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="row">
                                    <!-- left column -->
                                    <div class="col-md-12">
                                        <!-- general form elements -->
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Creacion de maniobra</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <!-- form start -->
                                            <form method="POST" action="{{ route('maniobras.save')}}"
                                                enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="nombreManiobra">Nombre Maniobra</label>
                                                        <input type="text" class="form-control" name="nombreManiobra"
                                                            id="nombreManiobra" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nombreManiobra">estatus</label>
                                                        <input type="text" class="form-control" name="estatus"
                                                            id="estatus" required>
                                                    </div>
                                                    <div class="form-group">
                                                    </div>
                                                    <label for="nombreManiobra">Observaciones</label>
                                                    <br>
                                                    <textarea class="form-control" name="observaciones"
                                                        id="observaciones" cols="30" rows="10"></textarea required>
                                                    <br>
                                                    <br>
                                                    <div class="col-md-12">
                                                        <table id="pricing-list-container">
                                                            <tr class="pricing-list-item pattern">
                                                                <td>
                                                                    <div class="fm-move"><i
                                                                            class="sl sl-icon-cursor-move"></i>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <div class="fm-input pricing-name"><input
                                                                                    type="text" class="form-control"
                                                                                    name="tramos[]" placeholder="Tramos"
                                                                                    required />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="fm-input pricing-price"><input
                                                                                    type="text" class="form-control"
                                                                                    name="metros[]" placeholder="Tramos"
                                                                                    required /></div>
                                                                            <div class="fm-close"><a class="delete"
                                                                                    href="#"><i
                                                                                        class="fa fa-remove">Delete</i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="fm-input pricing-price"><input
                                                                                    type="text" class="form-control"
                                                                                    name="total[]" readonly placeholder="0.00"
                                                                                    required /></div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <a href="#" class="button add-pricing-list-item">Crear</a>
                                                    </div>
                                                </div>
                                                <!-- Section / End -->

                                                <div class="col-sm-2">

                                                </div>

                                                <div class="col-sm-10">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">File input</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input"
                                                                    id="exampleInputFile">
                                                                <label class="custom-file-label"
                                                                    for="exampleInputFile">Choose file</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="">Upload</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                            </form>
                        </div>
                        <!-- /.card -->



                    </div>
                    <!--/.col (left) -->

                </div>
            </div>
        </div>
    </div>

</div>


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
<script src="https://maps.google.com/maps/api/js?key=AIzaSyAioR39TAyFp6nIBvQGDdcl0Q10TaoMXjw&libraries=places"
    type="text/javascript"></script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script src="/js/custom.js"></script>
@stop
