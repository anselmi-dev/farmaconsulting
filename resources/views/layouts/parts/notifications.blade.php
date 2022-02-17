<div id="modal-notifications" class="">
    <div class="modal-background">
        <div class="modal">
            <div id="modal-notifications__message" class="modal-message p-4">
                <div class="flex items-center gap-3">
                    <div>
                        <svg class="modal-icon modal-icon__success"  style="height: 35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#a2bd30" d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>
                        <svg class="modal-icon modal-icon__error"  style="height: 35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="#dc4444" d="M12,7a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V8A1,1,0,0,0,12,7Zm0,8a1,1,0,1,0,1,1A1,1,0,0,0,12,15Zm9.71-7.44L16.44,2.29A1.05,1.05,0,0,0,15.73,2H8.27a1.05,1.05,0,0,0-.71.29L2.29,7.56A1.05,1.05,0,0,0,2,8.27v7.46a1.05,1.05,0,0,0,.29.71l5.27,5.27a1.05,1.05,0,0,0,.71.29h7.46a1.05,1.05,0,0,0,.71-.29l5.27-5.27a1.05,1.05,0,0,0,.29-.71V8.27A1.05,1.05,0,0,0,21.71,7.56ZM20,15.31,15.31,20H8.69L4,15.31V8.69L8.69,4h6.62L20,8.69Z"/>
                        </svg>
                    </div>
                    <div id="modal-notifications__text" class="text-lg">
                        Consulta enviada
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('click', function(e){   
        document.getElementById('modal-notifications').classList.remove('open', 'error', 'success');
    });
    function showNotification (message, type = 'success') {
        document.getElementById('modal-notifications__text').innerHTML = message;
        document.getElementById('modal-notifications').classList.add('open', type);
    }
</script>

{{--
<script src="{{ asset('plugins/notifications.js') }}"></script>
<script>
    const myNotification = window.createNotification({
        showDuration: 3500,
        positionClass: 'nfc-top-left',
        displayCloseButton: true,
    });

    const myNotificationError = window.createNotification({
        showDuration: 3500,
        positionClass: 'nfc-top-left',
        displayCloseButton: true,
        theme: 'error'
    });
</script>
--}}