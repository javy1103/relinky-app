@extends('layouts.app')

@section('head')
<title>Relinky</title>
<link href="/css/dashboard/main.css" rel="stylesheet" type="text/css">
<script src='js/dashboard/custom/uikit_beforeready.js'></script>
<script src="/js/dashboard/dashboard.js"></script>


<!-- altair login page functions -->
<script src="/js/dashboard/pages/login.js"></script>
@endsection

@section('content')
<body class="login_page">
    <div class="login_page_wrapper">
        <div class="md-card" id="login_card">
            @include('shared.login_form')
            <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
                <h2 class="heading_b uk-text-success">Can't log in?</h2>
                <p>Here’s the info to get you back in to your account as quickly as possible.</p>
                <p>First, try the easiest thing: if you remember your password but it isn’t working, make sure that Caps Lock is turned off, and that your username is spelled correctly, and then try again.</p>
                <p>If your password still isn’t working, it’s time to <a href="#" id="password_reset_show">reset your password</a>.</p>
            </div>
            <div class="md-card-content large-padding" id="login_password_reset" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
                <h2 class="heading_a uk-margin-large-bottom">Reset password</h2>
                <form>
                    <div class="uk-form-row">
                        <label for="login_email_reset">Your email address</label>
                        <input class="md-input" type="text" id="login_email_reset" name="login_email_reset" />
                    </div>
                    <div class="uk-margin-medium-top">
                        <a href="index.html" class="md-btn md-btn-primary md-btn-block">Reset password</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="uk-margin-top uk-text-center">
            <a href="{{ url('/register') }}">Create an account</a>
        </div>
    </div>
</body>
@endsection
