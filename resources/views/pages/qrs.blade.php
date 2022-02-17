@extends('layouts.app')

@section('breadcrumbs', 'QRs')

@section('content')
    <div x-data="{expanded: false}">
        <div class="wrapper--larger">
            <div class="main__container">
                <div>
                    <div class="flow-root my-10">
                        <ul role="list" class="-my-5 divide-y divide-gray-200">
                            @foreach ($qrs as $key => $qr)
                                <li class="py-4">
                                    <div class="flex  space-x-4">
                                        <div class="flex-shrink-0 text-primary">
                                            <svg class="h-8 w-8 fill-current" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8,21H4a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H8a1,1,0,0,0,0-2Zm14-6a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H16a1,1,0,0,0,0,2h4a3,3,0,0,0,3-3V16A1,1,0,0,0,22,15ZM20,1H16a1,1,0,0,0,0,2h4a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V4A3,3,0,0,0,20,1ZM2,9A1,1,0,0,0,3,8V4A1,1,0,0,1,4,3H8A1,1,0,0,0,8,1H4A3,3,0,0,0,1,4V8A1,1,0,0,0,2,9Zm8-4H6A1,1,0,0,0,5,6v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V6A1,1,0,0,0,10,5ZM9,9H7V7H9Zm5,2h4a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H14a1,1,0,0,0-1,1v4A1,1,0,0,0,14,11Zm1-4h2V9H15Zm-5,6H6a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,17H7V15H9Zm5-1a1,1,0,0,0,1-1,1,1,0,0,0,0-2H14a1,1,0,0,0-1,1v1A1,1,0,0,0,14,16Zm4-3a1,1,0,0,0-1,1v3a1,1,0,0,0,0,2h1a1,1,0,0,0,1-1V14A1,1,0,0,0,18,13Zm-4,4a1,1,0,1,0,1,1A1,1,0,0,0,14,17Z"/></svg>
                                        </div>
                                        <a href="{{ route('landing', ['landing' => $qr['landing']]) }}" class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-gray-900">
                                                {{ $qr['text'] }}
                                            </p>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between gap-2">
                                        <div class="text-gray-400">
                                            {{ $key }}
                                        </div>
                                        <a href="{{ route('landing', ['landing' => $qr['landing']]) }}"
                                            class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 rounded-full text-gray-700 bg-white hover:bg-gray-50">
                                            Ver página
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
