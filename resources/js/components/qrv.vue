<template>
  <div>
    <div
      :class="{ fullscreen: fullscreen }"
      ref="wrapper"
      @fullscreenchange="onFullscreenChange"
    >
      <qrcode-stream @decode="onDecode" @init="onInit">
        <div class="text-3xl text-white w-full text-center uppercarse" v-if="loading">
          Cargando...
        </div>
        <div v-else>
          <button @click="fullscreen = !fullscreen" class="fullscreen-button">
            <svg
              v-if="!fullscreen"
              width="30"
              class="bg-transparent rounded"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
            >
              <path
                fill="#333"
                d="M9.29,13.29,4,18.59V17a1,1,0,0,0-2,0v4a1,1,0,0,0,.08.38,1,1,0,0,0,.54.54A1,1,0,0,0,3,22H7a1,1,0,0,0,0-2H5.41l5.3-5.29a1,1,0,0,0-1.42-1.42ZM5.41,4H7A1,1,0,0,0,7,2H3a1,1,0,0,0-.38.08,1,1,0,0,0-.54.54A1,1,0,0,0,2,3V7A1,1,0,0,0,4,7V5.41l5.29,5.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM21,16a1,1,0,0,0-1,1v1.59l-5.29-5.3a1,1,0,0,0-1.42,1.42L18.59,20H17a1,1,0,0,0,0,2h4a1,1,0,0,0,.38-.08,1,1,0,0,0,.54-.54A1,1,0,0,0,22,21V17A1,1,0,0,0,21,16Zm.92-13.38a1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H17a1,1,0,0,0,0,2h1.59l-5.3,5.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,5.41V7a1,1,0,0,0,2,0V3A1,1,0,0,0,21.92,2.62Z"
              />
            </svg>
            <svg
              v-else
              width="30"
              class="bg-transparent rounded"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
            >
              <path
                fill="#333"
                d="M10.38,13.08A1,1,0,0,0,10,13H6a1,1,0,0,0,0,2H7.59l-5.3,5.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L9,16.41V18a1,1,0,0,0,2,0V14a1,1,0,0,0-.08-.38A1,1,0,0,0,10.38,13.08ZM10,5A1,1,0,0,0,9,6V7.59L3.71,2.29A1,1,0,0,0,2.29,3.71L7.59,9H6a1,1,0,0,0,0,2h4a1,1,0,0,0,.38-.08,1,1,0,0,0,.54-.54A1,1,0,0,0,11,10V6A1,1,0,0,0,10,5Zm3.62,5.92A1,1,0,0,0,14,11h4a1,1,0,0,0,0-2H16.41l5.3-5.29a1,1,0,1,0-1.42-1.42L15,7.59V6a1,1,0,0,0-2,0v4a1,1,0,0,0,.08.38A1,1,0,0,0,13.62,10.92ZM16.41,15H18a1,1,0,0,0,0-2H14a1,1,0,0,0-.38.08,1,1,0,0,0-.54.54A1,1,0,0,0,13,14v4a1,1,0,0,0,2,0V16.41l5.29,5.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"
              />
            </svg>
          </button>
        </div>
      </qrcode-stream>
    </div>
  </div>
</template>

<script>

export default {
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
      this.loading = true;
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
      window.location = this.result;
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