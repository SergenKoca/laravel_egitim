<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel CMS | </title>

    <!-- Bootstrap -->
    <link href="{{asset('CMS/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('CMS/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('CMS/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('CMS/vendors/animate.css/animate.min.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('CMS/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div id="register" class="animate form login_form">
            <section class="login_content">
                <!-- normalde php'de formadan veri gönderirken <form method="POST" action="/view_adı"> yapardık ama
                laravel ile bunun kısa yolu var. (sp: süslü parantez): spspForm::open(array('route'=>'register')) spsp
                ile direkt bu formun post formu olduğunu ve tekar bu ekrana yönlendirmesi gerektiğini belirtmiş olduk
                dikkat edersek web.php'de register adında bir route yok. peki bu nereye gitti? laravelin bize sağladığı güzelliklerden biri.Auth gibi temel işlevleri bizim için
                hallediyor. normalde route'a  gidip route'ta bir controller'a yönlendirir ama biz temel auth işlevi için uğraşmıyoruz laravel bizim yerimize yapıyor.-->
                {{Form::open(array('route'=>'register'))}}
                    <h1>Create Account</h1>
                    <div>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input id="email" name="email" type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input id="password" name="password" type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <input name="password_confirmation"  id="password_confirmation" type="password" class="form-control" placeholder="Password Confirmation" required="" />
                    </div>
                    <div>
                        {{Form::submit('Zorla Kayıt Ol',array('class' =>'btn btn-default submit'))}}
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="{{route('login')}}" class="to_register"> Log in </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />
                    </div>
                {{Form::close()}}
            </section>
        </div>
    </div>
</div>
</body>
</html>
