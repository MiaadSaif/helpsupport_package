<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <!-- TITLE -->
    <title>{{ __('Help Support') }}</title>

    <!-- BOOTSTRAP CSS -->

    <link id="style" href="{{ asset('plugins/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/helpsupport/css/style.css') }}">
    <link href="{{ asset('vendor/helpsupport/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/helpsupport/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/helpsupport/css/skin-modes.css') }}" rel="stylesheet" />

    <!-- FONT-ICONS CSS -->
    <link href="{{ asset('vendor/helpsupport/css/icons.css') }}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('vendor/helpsupport/colors/color1.css') }}" />
</head>

<body class="app sidebar-mini ltr login-img">
    <!-- BACKGROUND-IMAGE -->
    <div>
        <!-- PAGE -->
        <!-- PAGE -->
        <div class="page">
            <div class="">
                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <a href="index.html"><img src="{{ asset('vendor/helpsupport/images/brand/logo-white.png') }}" class="header-brand-img" alt=""></a>
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form">
                            <span class="login100-form-title pb-5">
                                Tickets Details
                            </span>
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class="mx-0"><a href="#tab5" class="active" data-bs-toggle="tab">Ticket</a></li>
                                            <li class="mx-0"><a href="#tab6" data-bs-toggle="tab">Check the Ticket</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="card-body">
                                                <a class="btn btn-primary btn-block" href="{{ route('createNewTicket') }}" id="createSupportNewTicket"><i class="fa fa-file"></i>&nbsp;{{ __('Submit New Support Ticket') }} </a>
                                            </div>
                                            <div class="card-body">
                                                <a class="btn btn-primary btn-block" href="{{ route('MytTickets') }}" id="ShowTicket"><i class="fa fa-trello"></i>&nbsp;{{ __('Show My Tickets') }} </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab6">
                                            <form id="TiketTracking" name="TiketTracking" class="form-horizontal" action="{{ route('TicketTracking') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="complain_id" class="form-label">{{ __('Enter The Ticket Id') }}</label>
                                                    <input type="text" class="form-control" name="complain_id" id="complain_id" aria-describedby="complain_id" placeholder="{{ __('Ticket Number') }}" value="{{ old('complain_id') }}" required>
                                                    @if (session('error'))
                                                        <div class="alert alert-danger">
                                                            {{ session('error') }}
                                                        </div>
                                                    @endif

                                                </div>
                                                <div class="card-body">
                                                    <button class="btn btn-primary btn-block" id="CurrentTicket"><i class="icon icon-knowledge"></i>{{ __('Track Current Ticket') }} </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="{{ asset('vendor/helpsupport/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('vendor/helpsupport/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/helpsupport/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="{{ asset('vendor/helpsupport/js/show-password.min.js') }}"></script>

    <!-- GENERATE OTP JS -->
    <script src="{{ asset('vendor/helpsupport/js/generate-otp.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('vendor/helpsupport/plugins/p-scroll/perfect-scrollbar.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('vendor/helpsupport/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('vendor/helpsupport/js/custom.js') }}"></script>
</body>

</html>
