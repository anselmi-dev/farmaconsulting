@extends('layouts.app')

@section('breadcrumbs')
    <a href="{{ route('home') }}" >Escanear</a>
@endsection

@section('content')
    <div id="app" class="relative">
        <div aria-live="assertive"
            x-cloak
            x-data="{showNotificationQr: false}"
            x-show="showNotificationQr"
            x-init="setTimeout(() => showNotificationQr = true, 4000)"
            class="z-10 absolute inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start">
            <div class="w-full flex flex-col items-center space-y-4 sm:items-end">
                <div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="p-4">
                        <div class="flex">
                            <div class="w-0 flex-1 flex justify-between">
                                <p class="w-0 flex-1 text-sm font-medium text-gray-900">
                                    Algún problema con la lectura del código QR?
                                    <a href="{{ route('qrs') }}" class="flex-shrink-0 bg-white rounded-md text-sm font-medium text-primary hover:text-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                                        Pincha aquí.
                                    </a>
                                </p>
                            </div>
                            <div class="ml-4 flex-shrink-0 flex">
                                <div class="" x-on:click="showNotificationQr = false">
                                    <button
                                        type="button"
                                        class="bg-gray-200 rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <span class="sr-only">Close</span>
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="url-content flex items-center justify-center bg-base">
            <qrv></qrv>
        </div>
    </div>
@endsection

@push('scripts-head')
    <script>
        let router_register_event = "{{ route('register-event') }}";
    </script>
@endpush
