<!DOCTYPE html>
<html lang="EN">

<head>
    {{--'tu je hlava stranky'--}}
    @include('layout.head')
</head>

<body>
{{-- tu icludujeme navbar--}}
@include('_template.nav')
<div class="container py-4">
    {{-- tu bude obsah --}}
    @yield('content')
</div>
{{--'tu je footer'--}}
@include('layout.footer')
</body>

</html>
