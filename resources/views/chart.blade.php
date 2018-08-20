@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
		<div class="row">
			<div class="col-md-7 col-md-offset-5">

				<div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <center><h3 class="box-title">OS</h3></center>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
										<!-- script chart 1-->
										<html lang="en">
										<head>
												<title>OS</title>

												{!! Charts::styles() !!}

										</head>
										<body>
												<!-- Main Application (Can be VueJS or other JS framework) -->
												<div class="app">
														<div class="col-md-12">
						 								{!! $chart->html() !!}
												</div>

					 							</div>
											</div>
												<!-- End Of Main Application -->
												{!! Charts::scripts() !!}
												{!! $chart->script() !!}
										</body>
										</html>

                    </div>
                </div>
								<!-- done  -->
								</div>
					<!-- done chart pertama -->

					<!-- membuat chart ke 2 -->

@endsection
