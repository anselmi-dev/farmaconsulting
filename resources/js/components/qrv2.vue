<template>
    <div class="relative">
        <div class="loading-qr" v-if="loading">
            <rotate-square3></rotate-square3>
        </div>
        <StreamBarcodeReader
            @decode="onDecode"
            @loaded="onLoaded"
        ></StreamBarcodeReader>
        <!-- <div class="button-image-barcode-reader" v-if="!loading">
            <label for="image">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="#a2bd30" d="M19,13a1,1,0,0,0-1,1v.38L16.52,12.9a2.79,2.79,0,0,0-3.93,0l-.7.7L9.41,11.12a2.85,2.85,0,0,0-3.93,0L4,12.6V7A1,1,0,0,1,5,6h7a1,1,0,0,0,0-2H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V14A1,1,0,0,0,19,13ZM5,20a1,1,0,0,1-1-1V15.43l2.9-2.9a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L15.46,20Zm13-1a.89.89,0,0,1-.18.53L13.31,15l.7-.7a.77.77,0,0,1,1.1,0L18,17.21ZM22.71,4.29l-3-3a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-3,3a1,1,0,0,0,1.42,1.42L18,4.41V10a1,1,0,0,0,2,0V4.41l1.29,1.3a1,1,0,0,0,1.42,0A1,1,0,0,0,22.71,4.29Z">
                    </path>
                </svg>
                <ImageBarcodeReader
                    id="image"
                    @decode="onDecode"
                    @error="onError"
                ></ImageBarcodeReader>
            </label>
        </div> -->
    </div>
</template>

<script>
    import { RotateSquare3 } from 'vue-loading-spinner'
    import { StreamBarcodeReader, ImageBarcodeReader } from "vue-barcode-reader";

    export default {
        components: {
            RotateSquare3,
            StreamBarcodeReader,
            ImageBarcodeReader 
        },
        data() {
            return {
                loading: true
            }
        },
        methods: {
            onLoaded () {
                this.loading = false;
            },
            onDecode (result) {
                this.loading = true;
                window.location = result;
            },
            onError (result) {
                // console.log({result})
            }
        }
    }
</script>

<style lang="scss">
    .button-image-barcode-reader {
        position: absolute;
        bottom: 3px;
        right: 3px;
        width: 50px;
        height: 50px;
    }
    .button-image-barcode-reader input {
        width: 0;
        height: 0;
        opacity: 0;
        overflow: hidden;
        padding: 0;
    }
    .button-image-barcode-reader label {
        display: block;
        height: 100%;
        width: 100%;
        margin: 0;
        cursor: pointer;
        background: #ffffff45;
        border-radius: 3px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0.25rem;
    }
    .loading-qr {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #414141;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 5;
    }
</style>