@extends('layouts.app')

@section('head')
<title>Relinky</title>
<link href="/css/dashboard/main.css" rel="stylesheet" type="text/css">
<script src='js/dashboard/custom/uikit_beforeready.js'></script>
<script src="/js/dashboard/dashboard.js"></script>
@endsection

@section('content')
<body class="login_page">
    <div class="login_page_wrapper">
        <div class="md-card" id="login_card">
            @include('shared.registration_form')
        </div>
    </div>
</body>
@endsection
