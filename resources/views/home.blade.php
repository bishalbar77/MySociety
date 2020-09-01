
{{-- Extends layout --}}
@extends('layout.default')
@section('content')

<div class="row">

        <!--weekly new-->
         <div class="col-lg-6 col-xxl-4 order-1 order-xxl-1">
         @include('pages.widgets._widget-2', ['class' => 'card-stretch gutter-b'])
        </div>

        <div class="col-xxl-8 order-2 order-xxl-1">
            @include('pages.widgets._widget-6', ['class' => 'card-stretch gutter-b'])
        </div>                         
</div>
@endsection
{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection