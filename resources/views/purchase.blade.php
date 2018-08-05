@extends('layouts.main')
@section('header')
@stop
@section('content')
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Хамрагдах {{$plan->name}}</h4>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Bodygram</a></li>
                            <li class="breadcrumb-item">{{$plan->name}}</li>
                            <li class="breadcrumb-item active">Хамрагдах</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 card-box">
                    <h2 class="text-center"><b>Нэхэмжлэх</b></h2>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-8"><b>- {{$plan->name}} хөтөлбөр {{$plan->days}} хоног</b></div>
                                <div class="col-md-4 text-right"><b>{{$plan->price}}₮</b></div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-12"><p>@if(session('not_enough'))*Та <b>Голомт банкны 16327796137 дансанд</b> гүйлгээний утга дээр нь <b>бүртгэлтэй утасны дугаараа</b> оруулна шилжүүлж дансаа цэнгэлнэ үү!@else *Авсан хөтөлбөрийг буцааж болохгүй тул та шийдвэрээ зөв гарган уу@endif</p></div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{route('proceed_purchase')}}"><button class="btn btn-block btn-primary">Хамрагдах</button></a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('cancel_purchase')}}">
                                        <button class="btn btn-block">Цуцлах</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <br>
                </div>
                <div class="col-md-3"></div>
            </div>






        </div>
        <!-- end container -->
    </div>
@stop
@section('footer')
@stop