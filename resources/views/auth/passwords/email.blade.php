
<!DOCTYPE html>
<html>
<head>
    <title>سترجاع الرقم السري</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Tajawal&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/main.css')}}">
    <style>
        input[type="email"]::placeholder {

            /* Firefox, Chrome, Opera */
            text-align: right;
        }


    </style>


</head>

<body>

<div class="formpage">
    <div class="container-login">

        <div class="loginformpage">

            <div class="bckimg" style="background-image: url('{{ asset('dist/img/bg-02.jpg')}}');">
            </div>

                <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}" class="loginform validate-form">
                    @csrf
                <img src="{{ asset('dist/img/logo.png')}}" alt="logo" class="logo">

                <span class="login100-form-title">
						 استرجاع الرقم السري
					</span>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group row"  data-validate = "يرجى إدخال البريد الإلكتروني">

                        <div class="col-md-6">
                            <input placeholder="البريد الإلكتروني" style="height: 80px;width: 445px;border-radius: 40px; background-color: #f7f7f7;" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                    <button class="formbtn">
                        الدخول
                    </button>
                </div>
                <div class="footer">
                    <p class="footer-company-name" align="center"> 2020 &copy;
                        رانا معاك  </p>
                </div>

            </form>

        </div>

    </div>

</div>
</body>
</html>



<script>
    function myFunction() {
        var x = document.getElementById("mypassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<script src="{{ asset('dist/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('dist/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{ asset('dist/js/main.js')}}"></script>




