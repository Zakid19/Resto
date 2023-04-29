<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Overview - SB Admin Pro</title>
        <link href="/admin/css/styles.css" rel="stylesheet" />
        <link href="/admin/cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="/admin/assets/img/favicon.png" />
        <script data-search-pseudo-elements="" defer="" src="/admin/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="/admin/cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="nav-fixed">
        @include('layouts.partials.navbar')
        <div id="layoutSidenav">
            @include('layouts.partials.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                                            Dashboard
                                        </h1>
                                        <div class="page-header-subtitle">Example dashboard overview and content summary</div>
                                    </div>
                                    {{-- <div class="col-12 col-xl-auto mt-4">
                                        <div class="input-group input-group-joined border-0" style="width: 16.5rem">
                                            <span class="input-group-text"><i class="text-primary" data-feather="calendar"></i></span>
                                            <input class="form-control ps-0 pointer" id="litepickerRangePlugin" placeholder="Select date range..." />
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    @yield('content')
                </main>
                <footer class="footer-admin mt-auto footer-light">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-md-6 small">Copyright © Your Website 2021</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                ·
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script data-cfasync="false" src="/admin/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/admin/cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/admin/js/scripts.js"></script>

        <script src="/admin/assets.startbootstrap.com/js/sb-customizer.js"></script>
        <sb-customizer project="sb-admin-pro"></sb-customizer>
        <script>(function(){var js = "window['__CF$cv$params']={r:'7babd325686b4488',m:'sXlUNfCBT3FM6KipJiClZxYDRyVixrtFbrfNEijjBx4-1681977324-0-AWWU56BYENiMwQpDI+hJo8ZIw5iZLUGjCRbv5EfKN7Kx',u:'/cdn-cgi/challenge-platform/h/g'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/g/scripts/jsd/70d5f7ce/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.nonce = '';_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7babd325686b4488","version":"2023.3.0","b":1,"token":"6e2c2575ac8f44ed824cef7899ba8463","si":100}' crossorigin="anonymous">
        </script>
</body>

<!-- Mirrored from sb-admin-pro.startbootstrap.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Apr 2023 08:00:04 GMT -->
</html>
