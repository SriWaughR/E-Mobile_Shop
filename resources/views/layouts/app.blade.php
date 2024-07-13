<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Laravel CURD</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        />
        <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
    </head>
    <body>
        <div class="container"> 
        <nav class="navbar navbar-expand bg-secondary ">
            <div class="navbar-brand text-light col-8">
                &nbsp;&nbsp;Welcome to <sub class="sub">PLASA</sub> Mobile
            </div>    
        </nav>
    </div>
        <div class="container mt-4">
            <div class="row">
                @if($message=Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <strong>Success</strong> {{$message}}
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>
                </div>
                @endif
                @if($message=Session::get('errors'))
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Error</strong> {{$message}}
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>
                </div>
                @endif 
                @yield('main')
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
