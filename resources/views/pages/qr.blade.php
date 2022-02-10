@extends('layouts.app')

@section('breadcrumbs')
    <a href="{{ route('home') }}" >Escanear</a>
@endsection

@section('content')
    <div class="url-content flex items-center justify-center bg-base">
        <qrv-barcode></qrv-barcode>
    </div>
@endsection

@push('scripts-head')
    <script>
        let router_register_event = "{{ route('register-event') }}";
    </script>
@endpush