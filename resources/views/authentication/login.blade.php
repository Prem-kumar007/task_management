
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
</head>

<body>
    <div id="auth">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

@if ($errors->any())
    <div class="alert alert-danger">
        There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Log in.</h1>
            <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

            <form id="login_form">
                <h2 class="mt-2">Login User</h2>
                    @csrf
                    <div class="mb-3 ">
                        <label for="username">Email</label>
                        <input type="text" class="form-control form-control-sm @error('username') is-invalid @enderror" id="username" name="email">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 ">
                        <label for="password">Password</label>
                        <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-outline-success btn-sm" id="login">Login</button>
                        
                    </div>
                    <a href="{{route('register')}}" id="register" style='font-size: 12px;'>Don't Have an Account? Sign Up</a>
                </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">Don't have an account? <a href="auth-register.html" class="font-bold">Sign
                        up</a>.</p>
                <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>
    </div>
    @include('layout.script')
    <script>
          $( document ).ready(function() {
           
                $('#login').on('click',function(){
                    let form = $('#login_form');
                    console.log(form.serializeArray());
                   let url = "{{route('login_post')}}";
                $.ajax({
                    type: "POST",
                    url: url,
                    data:form.serializeArray(),
                    header:{
                        'X-CSRF-Token':"{{ csrf_token() }}"
                    },
                    success:function (response) {
                        if (response.success) {
                            alert('Login successful!');
                            window.location.href = '{{ route("dashboard") }}';
                        } else {
                            alert('Login failed. ' + response.message);
                        }
                    },
                    error:function (xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                        alert(err.message);
                    }
                });
                });
        });
        </script>
</body>

</html>


