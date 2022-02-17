<template>
  <div>
    <div>
      <qrcode-stream @decode="onDecode" @init="onInit">
        <div class="text-3xl text-white w-full text-center uppercarse" v-if="loading">
          Cargando...
        </div>
      </qrcode-stream>
    </div>
  </div>
</template>

<script>
import { QrcodeStream } from "vue-qrcode-reader";

export default {
  components: {
    QrcodeStream
  },
  data() {
    return {
      camera: "auto",
      result: null,
      showScanConfirmation: false,
      fullscreen: false,
      loading: false,
    };
  },
  watch: {
    fullscreen(enterFullscreen) {
      if (enterFullscreen) {
        this.requestFullscreen();
      } else {
        this.exitFullscreen();
      }
    },
  },
  methods: {
    async onInit(promise) {
      // this.loading = true;
      // try {
      //   await promise;
      // } catch (e) {
      //   console.error(e);
      // } finally {
      //   this.showScanConfirmation = this.camera === "off";
      //   this.loading = false;
      // }
      // this.showScanConfirmation = this.camera === "off";
      this.loading = false;

    },

    async onDecode(content) {
      this.pause();
      this.result = content;
      if (window.matchMedia('(display-mode: standalone)').matches) {  
        window.location = '/code/6';
      } else {
        window.location = this.result;
      } 
      // await this.timeout(500)
      // this.unpause()
    },

    unpause() {
      this.camera = "auto";
    },

    pause() {
      this.camera = "off";
    },

    timeout(ms) {
      return new Promise((resolve) => {
        window.setTimeout(resolve, ms);
      });
    },

    onFullscreenChange(event) {
      // This becomes important when the user doesn't use the button to exit
      // fullscreen but hits ESC on desktop, pushes a physical back button on
      // mobile etc.
      this.fullscreen = document.fullscreenElement !== null;
    },

    requestFullscreen() {
      const elem = this.$refs.wrapper;

      if (elem.requestFullscreen) {
        elem.requestFullscreen();
      } else if (elem.mozRequestFullScreen) {
        /* Firefox */
        elem.mozRequestFullScreen();
      } else if (elem.webkitRequestFullscreen) {
        /* Chrome, Safari and Opera */
        elem.webkitRequestFullscreen();
      } else if (elem.msRequestFullscreen) {
        /* IE/Edge */
        elem.msRequestFullscreen();
      }
    },
    exitFullscreen() {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.mozCancelFullScreen) {
        /* Firefox */
        document.mozCancelFullScreen();
      } else if (document.webkitExitFullscreen) {
        /* Chrome, Safari and Opera */
        document.webkitExitFullscreen();
      } else if (document.msExitFullscreen) {
        /* IE/Edge */
        document.msExitFullscreen();
      }
    },
  },
};
</script>

<style scoped>
  .fullscreen {
    position: fixed;
    z-index: 1000;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
  }

  .fullscreen-button {
    background-color: white;
    position: absolute;
    bottom: 0;
    right: 0;
    margin: 1rem;
  }
  .fullscreen-button img {
    width: 2rem;
  }
  .scan-confirmation {
    position: absolute;
    width: 100%;
    height: 100%;

    background-color: rgba(255, 255, 255, 0.8);

    display: flex;
    flex-flow: row nowrap;
    justify-content: center;
  }
</style>