@extends('layouts.app')

@section('breadcrumbs')
    <a href="{{ route('home') }}" >Escanear</a>
@endsection

@section('content')
    <div id="container" class="url-content flex items-center justify-center bg-base">
        <div>
            <canvas hidden="" id="qr-canvas" style="max-width: 100%; max-height: 100%"></canvas>
            <div id="btn-scan-qr" class="text-center mx-auto">
                <svg class="mx-auto" style="width: 140px;position: relative;display: block;height: 140px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198.5 197.5"><defs><style>.cls-1{fill:#a2bd2f;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><polygon class="cls-1" points="32.14 0 32.14 12.86 12.86 12.86 12.86 32.14 0 32.14 0 0 32.14 0"/><polygon class="cls-1" points="0 165.36 12.86 165.36 12.86 184.64 32.14 184.64 32.14 197.5 0 197.5 0 165.36"/><polygon class="cls-1" points="166.36 197.5 166.36 184.64 185.64 184.64 185.64 165.36 198.5 165.36 198.5 197.5 166.36 197.5"/><polygon class="cls-1" points="198.5 32.14 185.64 32.14 185.64 12.86 166.36 12.86 166.36 0 198.5 0 198.5 32.14"/></g></g></svg>
                <button class="mt-4 bg-gray-500 px-4 py-2 text-center text-white font-light">Escanea el código QR</button>
            </div>
        </div>

        <div id="qr-result" hidden="">
            <span id="outputData"></span>
        </div>
    </div>
    <div id="container-iframe" style="display: none">
        <nav class="nav">
            <div class="nav__content">
                <div>
                    <svg onclick="toggleDivQr(false)" class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="25.414" height="20.828" viewBox="0 0 25.414 20.828">
                        <g transform="translate(1.414 1.414)">
                          <g transform="translate(-240.5 -387.5)" style="isolation: isolate">
                            <g>
                              <line x1="9" y1="9" transform="translate(240.5 396.5)" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                              <line x1="9" y2="9" transform="translate(240.5 387.5)" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                            <line x1="23" transform="translate(240.5 396.5)" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                          </g>
                        </g>
                    </svg>
                </div>
                <div>
                    <p class="typography--white nav-top__title">
                        <span class="text-primary">Escanear</span>
                    </p>
                </div>
            </div>
        </nav>
        <iframe class="url-content" src=""></iframe>
    </div>
@endsection

@push('scripts')
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
    <script type="text/javascript">
        const _qrcode = window.qrcode;
        const video = document.createElement("video");
        const canvasElement = document.getElementById("qr-canvas");
        const canvas = canvasElement.getContext("2d");
        const qrResult = document.getElementById("qr-result");
        const outputData = document.getElementById("outputData");
        const btnScanQR = document.getElementById("btn-scan-qr");
        let scanning = false;
        _qrcode.callback = res => {
            if (res) {
                let url_event = "{{ route('landing.event', ['landing' => 'XXREPLACEXX']) }}";
                if (res.includes("http") || res.includes("HTTP") || res.includes("/")) {
                    window.location = res;
                    document.getElementById('container-iframe').querySelector('iframe').src = res;
                    toggleDivQr();
                } else {
                    window.location = url_event.replace("XXREPLACEXX", res);
                }
                    
                scanning = false;
                video.srcObject.getTracks().forEach(track => {
                    track.stop();
                });

                qrResult.hidden = false;
                canvasElement.hidden = true;
                btnScanQR.hidden = false;
            }
        };

        btnScanQR.onclick = () => {
            navigator.mediaDevices
                .getUserMedia({ video: { facingMode: "environment" } })
                .then(function(stream) {
                scanning = true;
                qrResult.hidden = true;
                btnScanQR.hidden = true;
                canvasElement.hidden = false;
                video.setAttribute("playsinline", true); // required to tell iOS safari we don't want fullscreen
                video.srcObject = stream;
                video.play();
                tick();
                scan();
            });
        };

        function toggleDivQr (iframe = true) {
            if (iframe) {
                document.getElementById('container-iframe').style.display = 'block';
                document.getElementById('container').style.display = 'none';
            } else {
                document.getElementById('container').style.display = '';
                document.getElementById('container-iframe').querySelector('iframe').src = '';
                document.getElementById('container-iframe').style.display = 'none';
            }
        }
        function tick() {
            canvasElement.height = video.videoHeight;
            canvasElement.width = video.videoWidth;
            canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);
            scanning && requestAnimationFrame(tick);
        }

        function scan() {
            try {
                _qrcode.decode();
            } catch (e) {
                setTimeout(scan, 300);
            }
        }
        
        navigator.mediaDevices
            .getUserMedia({ video: { facingMode: "environment" } })
            .then(function(stream) {
            scanning = true;
            qrResult.hidden = true;
            btnScanQR.hidden = true;
            canvasElement.hidden = false;
            video.setAttribute("playsinline", true); // required to tell iOS safari we don't want fullscreen
            video.srcObject = stream;
            video.play();
            tick();
            scan();
        });
    </script>
@endpush
