<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ trans('messages.Login') }}</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('assets/js/scripts/scripts.js') }}"></script>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>

<body>

    <div class="container">
        <a href="{{ url('/')}}" class="back-arrow">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 98.86" style="enable-background:new 0 0 122.88 98.86" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M0,49.43l48.93,49.43V74.23c30.94-6.41,55.39,0.66,73.95,24.19c-3.22-48.4-36.29-71.76-73.95-73.31V0L0,49.43 L0,49.43L0,49.43z"/></g></svg>
        </a>
    </div>

    <div class="wrapper">
        <label class="title mb-4">{{ trans('messages.Login') }}</label>
        <div id="formContent">
            <form>
                <input type="text" id="email" class="mt-4" name="email" placeholder="{{ trans('messages.Email') }}" required>
                <input type="text" id="password" class="password" name="password" placeholder="{{ trans('messages.Password') }}" required>
                <input type="submit" id="submit" class="mt-4" value="{{ trans('messages.Login') }}">
            </form>
            <div id="formFooter">
                <a class="underlineHover" href="{{ route('register') }}">{{ trans('messages.Register') }}</a>
            </div>
        </div>
    </div>

    <script>
        $('#submit').click(function(e) {
            e.preventDefault();

            let formData = {
                email: $('#email').val(),
                password: $('#password').val(),
                _token: '{{ csrf_token() }}'
            };

            $.ajax({
                url: 'api/auth/login',
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response.success) {
                        if (response.access_token) {
                            localStorage.setItem('auth_token', response.access_token);
                            window.location.href = '/panel';
                        } else {
                            showAlert("success", response.message);
                        }
                    } else {
                        showAlert("error", response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Erro na requisição AJAX:', error);
                    showAlert("error", "{{ __('An error has occurred. Please try again later.') }}");
                }
            });
        });
    </script>

</body>

</html>
