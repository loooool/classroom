@extends('layouts.main')
@section('header')
@stop
@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Хөтөлбөрүүд</h4>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Bodygram</a></li>
                            <li class="breadcrumb-item">Хөтөлбөрүүд</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach(\Illuminate\Support\Facades\Auth::user()->plans as $plan)
                    <?php $left_days = $plan->days;
                    foreach ($plan->days()->get() as $day) {
                        if ($day->watched()) {
                            $left_days = $left_days - 1;
                        }
                    } ?>
                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-9"><a href="{{route('plan', ['id'=>$plan->id])}}"><h3 class="text-primary">{{$plan->name}}</h3></a>Хүсэлтүвшин</div>
                                <div class="col-md-3 text-center">
                                    <h3>
                                       <span style="font_size: 5px">{{$left_days}}</span>/<b>{{$plan->days}}</b>
                                    </h3>
                                    <span>хоног</span>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="progress m-b-20">
                                        <div class="progress-bar" role="progressbar" style="width:
                                        <?php echo 100 - $left_days / $plan->days * 100 ;?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>





        </div>
        <!-- end container -->
    </div>
@stop
@section('footer')
@stop