{{-- @extends('helpsupport::layouts.dashboard') --}}


@section('header')
    <title>{{ __('Help Support') }}</title>
    {{ Config::get('helpsupport.base_url') }}
@endsection

<!-- Page-Header -->
<div class="container">
    <div class='page-header'>
        <h1 class='page-title'>{{ __('Help Support') }}</h1>
        <div>
            <ol class='breadcrumb'>
                <li class='breadcrumb-item active' aria-current='page' href="{{ route('help') }}">{{ __('Help & Support') }}</li>

            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">{{ __('Ticket') }}</h3>
                                        </div>

                                        <div class="card-body">
                                            <a class="btn btn-primary btn-block" href="{{ route('createNewTicket') }}" id="createSupportNewTicket"><i class="fa fa-file"></i>&nbsp;{{ __('Submit New Support Ticket') }} </a>
                                        </div>
                                        <div class="card-body">
                                            <a class="btn btn-primary btn-block" href="{{ route('MytTickets') }}" id="ShowTicket"><i class="fa fa-trello"></i>&nbsp;{{ __('Show My Tickets') }} </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">{{ __('check the Ticket') }}</h3>
                                        </div>
                                        <div class="card-body">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




</div>

<div class="modal fade" id="ajaxModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="card">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="col-sm-offset-2 col-sm-12">
                            <a class="btn btn-primary btn-block" id="1" href="{{ route('createNewTicket', ['type' => 1]) }}">General Enquiries</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-sm-offset-2 col-sm-12">
                            <a class="btn btn-primary btn-block" id="2" href="{{ route('createNewTicket', ['type' => 2]) }}">Technical Support</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@section('scripts')
    <script type="text/javascript">
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#createSupportNewTicket').click(function() {
                $('#modelHeading').html('{{ __('Submit New Support Ticket') }}');
                $('#ajaxModel').modal('show');

            });


        });
    </script>
@endsection
