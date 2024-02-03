@extends('layout.layout')
  
@section('content')

   
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
      
        <div class="row mt-5">
        <div class="col-4">
        </div>
            <div class="col-4">
                <form id="register_form">
                <h2 class="mt-2">Register User</h2>
                    @csrf
                    <div class="mb-3 ">
                        <label for="name">Name</label>
                        <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" id="name" name="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3 ">
                        <label for="email">Email</label>
                        <input type="text" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" name="email">
                        @error('email')
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
                    <div class="mb-3 ">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control form-control-sm @error('cpassword') is-invalid @enderror" id="cpassword" name="cpassword">
                        @error('cpassword')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-outline-success btn-sm" id="register">Register</button>
                        
                    </div>
                    <a href="{{route('login')}}" style='font-size: 12px;'>Already Have Registered? Sign in</a>
                </form>
            </div>
            <div class="col-4">
            </div>
        </div>
                 
        <script>
          $( document ).ready(function() {
           
                $('#register').on('click',function(){
                    let form = $('#register_form');
                    console.log(form.serializeArray());
                   let url = "{{route('register_user')}}";
               
                $.ajax({
                    type: "POST",
                    url: url,
                    data:form.serializeArray(),
                    header:{
                        'X-CSRF-Token':"{{ csrf_token() }}"
                    },
                    success:function (response) {
                        if (response.success) {
                            alert('Register successful!');
                            window.location.href = '{{ route("login") }}';
                        } else {
                            alert('Something Went Wrong. ' + response.message);
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

@endsection