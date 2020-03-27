@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Qrcode
        </h1>
    </section>
    <div class="content">
        @include('flash::message')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('qrcodes.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection
