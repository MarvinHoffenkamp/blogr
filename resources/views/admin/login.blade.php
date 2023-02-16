<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.base.head')
    <style>
        html,
        body {
        height: 100%;
        }

        body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        }

        .form-signin {
        max-width: 330px;
        padding: 15px;
        }

        .form-signin .form-floating:focus-within {
        z-index: 2;
        }

        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }
    </style>
</head>
<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form action="{{route('authenticate')}}" method='POST'>
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach
            @endif
            <div class="form-floating">
                <input type="email" name='email' class="form-control" id="floatingInput" @if ($errors->any()) value="{{old('email')}}" @endif>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name='password' class="form-control" id="floatingPassword">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </main>
</html>
