@extends('layouts.main')
@section('header')
    <link href="{{asset('')}}plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('')}}plugins/morris/morris.css">
@stop
@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{$day->plan->name}}</h4>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Bodygram</a></li>
                            <li class="breadcrumb-item">{{$day->plan->name}}</li>
                            <li class="breadcrumb-item active">Өдөр {{$day->day}}</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>



            <?php echo $day->content;
            ?>



        </div>
        <!-- end container -->
    </div>
@stop
@section('footer')
@stop