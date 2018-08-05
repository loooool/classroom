@extends('plan.layouts.main')
@section('header')
@endsection
@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{$plan->name}}</h4>
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





    </div>
@endsection
@section('footer')

@endsection