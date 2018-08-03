@extends('adminlte::page')
@section('htmlheader_title')
    Import Daily
@endsection
@section('contentheader_title')
    ADMIN MENU @endsection
@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">

            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">test box</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove">
                            <i class="fa fa-times"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="container">
                        <h2 class="text-center">
                            Import Export File Excel
                        </h2>

                        @if ( Session::has('success') )
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>{{ Session::get('success') }}</strong>
                        </div>
                        @endif @if ( Session::has('error') )
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>{{ Session::get('error') }}</strong>
                        </div>
                        @endif @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <div>
                                @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <form action="{{ route('admin') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }} Choose your xls/csv File :
                            <input type="file" name="file" style="width: 60%" accept=".xls,.xlsx"  class="form-control">
                            <input type="submit" class="btn btn-primary btn-lg" style="margin-top: 1%">
                        </form>

                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</div>
@endsection
