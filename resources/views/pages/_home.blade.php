@extends('layouts.app')

@section('content')
    <div id="loadingMessage"></div>
    <div class="url-content content-qr flex flex-wrap items-center justify-center">
        <div class="content-canvas">
            <div class="content-canvas__b0"></div>
            <div class="content-canvas__b1"></div>
            <div class="content-canvas__b2"></div>
            <div class="content-canvas__b3"></div>
            <canvas id="canvas" hidden class="max-w-full max-h-full" style="opacity: 0"></canvas>
            <button class="content-qr__button" type="button" onclick="readQr();">
                {{ __('Escanea el código QR') }}
            </button>
        </div>
    </div>
    <div style="display: none">
        <div id="output" hidden>
            <div id="outputMessage">No QR code detected.</div>
            <div hidden><b>Data:</b> <span id="outputData"></span></div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jsqr@1.0.4/dist/jsQR.min.js"></script>
    <script>
        var video = document.createElement("video");
        var canvasElement = document.getElementById("canvas");
        var canvas = canvasElement.getContext("2d");
        var loadingMessage = document.getElementById("loadingMessage");
        var outputContainer = document.getElementById("output");
        var outputMessage = document.getElementById("outputMessage");
        var outputData = document.getElementById("outputData");

        function drawBox(begin, b, c, d, color) {
            canvas.beginPath();
            canvas.moveTo(begin.x, begin.y);
            canvas.lineTo(b.x, b.y);
            canvas.lineTo(c.x, c.y);
            canvas.lineTo(d.x, d.y);
            canvas.lineTo(begin.x, begin.y);
            canvas.lineWidth = 4;
            canvas.strokeStyle = color;
            canvas.stroke();
        }

        // Use facingMode: environment to attemt to get the front camera on phones
        navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } }).then(function(stream) {
            video.srcObject = stream;
            video.setAttribute("playsinline", true); // required to tell iOS safari we don't want fullscreen
            video.play();
            requestAnimationFrame(tick);
        });

        function tick() {
        loadingMessage.innerText = "⌛ Loading video...";
            if (video.readyState === video.HAVE_ENOUGH_DATA) {
                loadingMessage.hidden = true;
                canvasElement.hidden = false;
                outputContainer.hidden = false;

                canvasElement.height = video.videoHeight;
                canvasElement.width = video.videoWidth;
                canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);

                var imageData = canvas.getImageData(0, 0, canvasElement.width, canvasElement.height);

                var code = jsQR(imageData.data, imageData.width, imageData.height);

                    if (code) {
                        drawBox(
                            code.location.topLeftCorner,
                            code.location.topRightCorner,
                            code.location.bottomRightCorner,
                            code.location.bottomLeftCorner,
                            code.location.topLeftCorner,
                            "#FF3B58"
                        );
                        outputMessage.hidden = true;
                        outputData.parentElement.hidden = false;
                        outputData.innerText = code.data;
                        alert(code.data);
                    } else {
                        outputMessage.hidden = false;
                        outputData.parentElement.hidden = true;
                    }
            }
            requestAnimationFrame(tick);
        }

        function readQr () {
            document.getElementById('canvas').style.opacity = '100%';
        }
    </script>
@endsection
