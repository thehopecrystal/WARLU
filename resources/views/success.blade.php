<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Success</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets/admin/css/success-failed.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<header class="site-header" id="header">
<img src="{{getFile(config('location.logoIcon.path').'logo.png')}}" alt="logo" style="width: 120px; margin-top:-230px;">
    <h1 class="site-header__title" data-lead-id="site-header-title">{{trans('THANK YOU!')}}</h1>
</header>

<div class="main-content">
    <i class="fa fa-check main-content__checkmark" id="checkmark"></i>
    <p class="main-content__body" data-lead-id="main-content-body">
        @lang("Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being with us.")
    </p>
</div>

<footer class="site-footer" id="footer">
    <a href="{{ url('/') }}">@lang("Go back to Home")</a>
    <p class="site-footer__fineprint" id="fineprint">{{trans('Copyright')}} ©{{ date('Y') }}  {{trans('All Rights Reserved')}} <a href="{{ url('/') }}" class="site_title">{{ $basic->site_title ?? 'PayEscrow' }}</a></p>
</footer>
</body>
</html>
