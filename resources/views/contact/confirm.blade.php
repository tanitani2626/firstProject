<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Port Folio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href= "{{ asset('assets/favicon.ico')  }}" >
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css')  }}" rel="stylesheet">
        <link href="{{ asset('css/confirm.css')  }}" rel="stylesheet">
    </head>
    <body id="page-top">
         <!-- Navigation-->
         <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="http://localhost:8080/#page-top">Port Folio</a>
            </div>
        </nav>
        <div class="padding_top_main row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <p>●名前</p>
                        <p>{{ $inputs['name'] }}</p>
                        <input name="name" value="{{ $inputs['name'] }}" type="hidden">
                    </div>
                    <div class="form-floating mb-3">
                        <p>●メールアドレス</p>
                        <p>{{ $inputs['email'] }}</p>
                        <input name="email" value="{{ $inputs['email'] }}" type="hidden">
                    </div>
                    <div class="form-floating mb-3">
                        <p>●電話番号</p>
                        <p>{{ $inputs['phone_number'] }}</p>
                        <input name="phone_number" value="{{ $inputs['phone_number'] }}" type="hidden">
                    </div>
                    <div class="form-floating mb-3">
                        <p>●タイトル</p>
                        <p>{{ $inputs['title'] }}</p>
                        <input name="title" value="{{ $inputs['title'] }}" type="hidden">
                    </div>
                    <div class="form-floating mb-3">
                        <p>●お問い合わせ内容</p>
                        <p>{{ $inputs['body'] }}</p>
                        <input name="body" value="{{ $inputs['body'] }}" type="hidden">
                    </div>
                    <button type="submit" name="action" value="back">入力内容修正</button>
                    <button type="submit" name="action" value="submit">送信する</button>
                </form>
            </div>
        </div>
        <!-- Footer-->
        <footer>
            <div class="row">
                <!-- Copyright Section-->
                <div class="copyright py-4 text-center text-white">
                    <div class="container"><small>Copyright &copy; daijiro,s Website 2023</small></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js')  }}"></script>
    </body>
</html>



