@extends('layouts.app')

@section('content')
    <div id="container" class="url-content flex items-center justify-center bg-primary">
        <div class="p-4 border border-gray-500 bg-white opacity-80">
            <canvas hidden="" id="qr-canvas" style="max-width: 100%; max-height: 100%"></canvas>
            <a href="javascript:void(0);" id="btn-scan-qr">
                <img src="https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2017/07/1499401426qr_icon.svg" style="max-height: 40vh; max-width: 100%; width: 300px;" class="mx-auto"/>
            </a>
        </div>


        <div id="qr-result" hidden="">
            <span id="outputData"></span>
        </div>
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
                window.location = res;
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
    </script>
@endpush
