<!DOCTYPE html>
<html>
<head>
    @include('includes.header_start')
    <link href="plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../plugins/morris/morris.css">
    @include('includes.header_end')
</head>
<body>
<br>
<br>
{{--@if ($errors->any())--}}
    {{--<div class="alert alert-danger">--}}
        {{--<ul>--}}
            {{--@foreach ($errors->all() as $error)--}}
                {{--<li>{{ $error }}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--@endif--}}
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-box">
                    <ul class="nav nav-tabs tabs-bordered nav-justified">
                    <li class="nav-item">
                        <a href="{{url('login')}}" data-toggle="tab" aria-expanded="true" class="nav-link active">
                            Нэвтрэх
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('register')}}" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Бүртгүүлэх
                        </a>
                    </li>

                </ul>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <br>
                        <h2 style="margin-bottom: 20px"><b>Bodygram</b></h2>
                        <p style="margin-bottom: 30px">Энэхүү мэдээлэл дээр үндэслэн бид танд урамшуулал болон эрүүл мэндийн үзүүлэлт харуулах болно.</p>

                    </div>
                    <div class="col-md-1"></div>
                </div>


                <div class="">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf



                        <div class="form-group row">

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Цахим хаяг*">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  required placeholder="Нууц үг*">

                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-1"></div>
                        </div>


                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-1">
                                <button type="submit" class="btn btn-md btn-primary btn-block">
                                    Нэвтрэх
                                </button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>




