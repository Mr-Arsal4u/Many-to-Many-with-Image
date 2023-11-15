    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    </head>

    <body>
        <nav></nav><br><br>
        <h2 class="text-center">Registration Form</h2>
        <div id="app">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Register') }}</div>

                            <div class="card-body">
                                {{-- <form method="POST" action="{{ route('makeRegister') }}"> --}}
<form id="registrationForm">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>

                                            <div id="message"></div>

                                        </div>
                                    </div>
                                </form>

                                <!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    $('#registrationForm').on('submit', function(e) {
      e.preventDefault();

      const formData = $(this).serialize();

      $.ajax({
        type: 'POST',
        url: "{{route('makeRegister')}}",
        data: formData,
        dataType: 'json',
        success: function(response) {
          if (response.success) {
           
          }
        },
        error: function(error) {
        }
      });
    });
  });
</script>
                                @if (Route::has('login'))
                                    <button class="btn btn-outline-success me-2" id="btn-login">Log in</button>


                                  <script>
                                        $(document).ready(function() {
                                            $("#btn-login").click(function(event) {
                                                event.preventDefault();
                                                loadLoginPage();
                                            });

                                            function loadLoginPage() {
                                                $.ajax({
                                                    type: "GET",
                                                    url: "{{ route('login') }}",
                                                    headers: {
                                                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                                                    },
                                                    dataType: 'html',
                                                    success: function(response) {

                                                        document.open();
                                                        document.write(response);
                                                        document.close();
                                                    },
                                                    error: function(error) {
                                                        alert("Failed to load the Blade file.");
                                                    }
                                                });
                                            }
                                        });
                                    </script>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
