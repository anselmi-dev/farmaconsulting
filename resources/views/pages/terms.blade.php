@extends('layouts.app')

@section('breadcrumbs', 'Términos y condiciones')

@section('intro')
@endsection

@section('content')
    <div>
        <iframe class="url-content" src="https://www.farmaconsulting.es/terminos-uso/?pwa=true" title="Farmaconsulting"></iframe>
    </div>
@endsection

@section('nav-icon')
    <a href="{{ route('home') }}">
        <svg class="icon--logo" xmlns="http://www.w3.org/2000/svg" width="143.316" height="137.131"
            viewBox="0 0 143.316 137.131">
            <g transform="translate(-262.49 -495.702)">
                <path
                    d="M341.652,495.7h-50.7l9.4,22.693L277.64,507.179v49.495l21.9-10.68-5.808,13.293,4.635,3.091L311.289,534l-27.844,13.745V516.2L311.2,529.448l-11.777-28.206h33.1L318.055,529.5l28.194-13.35v6.825h5.789V507.192L330.482,517.56Z"
                    transform="translate(19.049)" fill="#fff"></path>
                <g transform="translate(262.49 522.183)">
                    <path
                        d="M400.513,556.786l-27.03-12.5,12.727,47.8H374.478l-3.093-8.589v-48.3l-22.6,10.948a14.76,14.76,0,0,0-3.205-13.264,16.11,16.11,0,0,0-10.041-5.16v-4.643l23.416,10.964,2.664-4.576s-6.208-5.357-1.8-12.567c0,0,3.172-5.709,10.619-3.885a9.59,9.59,0,0,1,7.09,9.68s.025,4.323-2.935,6.824l2.67,4.454,23.246-10.833Zm-81.573,18.65,2.014-.935-1.106,3.89Zm29.285-.126-.9,2.953-1.093-3.887Zm17.842,1.587-28.152-11.743,14.542,47.766H340.776l-3.826-11.194h-5.616l-3.219,11.194H315.121l14.079-47.8-27.276,12.305L301.89,543.8,325.058,554.7l2.661-4.723a11.332,11.332,0,0,1-2.824-5.156,10.06,10.06,0,0,1,1.871-8.251s2.257-3.878,8.226-3.878c0,0,7.745.526,8.874,9.366a9.608,9.608,0,0,1-3.508,8.264l2.589,4.422,23.12-11.239Zm-4.449,15.28H351.575l-1.307-4.948,2.948-10,11.355,4.711Zm-54.886,0-3.368-9.65,10.754-4.928,2.95,10.088-1.293,4.49Zm99.074-77.383-23.314,10.788s2.731-11.409-8.138-16.691A15.04,15.04,0,0,0,358.8,510.5a14.178,14.178,0,0,0-5.375,15.368l-23.181-11.16v13.508a14.96,14.96,0,0,0-8.345,6.248,15.16,15.16,0,0,0-2.472,10.384,12.355,12.355,0,0,0,.44,1.822l-23.174-11.093v46.933l-2.824,9.666H280.926l14.027-47.834-27.226,12.592V522.964l23.38,11.043,2.763-4.677A9.787,9.787,0,0,1,291,518.761a10.034,10.034,0,0,1,5.664-5.531V507.9a14.517,14.517,0,0,0-10.58,8.964s-1.946,4.955-.377,9.007L262.49,514.754v50.283L286.718,553.8l-12.774,43.5h23.933l2.294-7.851,2.628,7.858h11.463l-6.12,20.772h23.935l2.244-7.883,2.752,7.8H359.6l-6.388-20.651h12.425l2.316-8.009,2.666,7.969h22.452l-11.569-43.382L405.806,565Z"
                        transform="translate(-262.49 -507.433)" fill="#fff"></path>
                </g>
            </g>
        </svg>
    </a>
@endsection

@guest
    @push('styles')
        <style>
            #content {
                padding-bottom: 0px;
            }
            .url-content {
                height: calc(100vh - 60px);
            }
            @media (min-width: 1024px) {
                .url-content {
                    height: calc(100vh - 72px);
                }
            }
        </style>    
    @endpush
@endguest