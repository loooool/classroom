
<!DOCTYPE html>
<html>
<head>
    @include('includes.header_start')
    @include('includes.header_end')
</head>
<body>
<br>
<br>

<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-box">

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <br>
                        <h2 style="margin-bottom: 20px"><b>Bodygram</b></h2>
                        <p style="margin-bottom: 30px">Бид таны дугаар руу мессежээр баталгуужуулах код илгээнэ</p>

                    </div>
                    <div class="col-md-1"></div>
                </div>


                <div class="">
                    <form method="POST" action="{{ route('verify') }}" >
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input type="text" class="form-control{{ session('error') ? ' is-invalid' : '' }}" name="verification_code" required placeholder="Баталгаажуулах код*">
                            </div>
                            <div class="col-md-1"></div>
                        </div>


                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-1">
                                <button type="submit" class="btn btn-md btn-primary btn-block">
                                    Баталгаажуулах
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



