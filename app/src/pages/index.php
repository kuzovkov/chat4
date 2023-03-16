<?php require_once('_header.php') ?>
<div class="left ui-widget-content white-border">
    <div class="top">
        <div class="panel" id="panel">
            <p>Hello,<span id="nicname"><?=(isset($_COOKIE['nicname']))? $_COOKIE['nicname'] : ''?></span><span class="room">room:&nbsp;<?=(isset($_COOKIE['room']))? $_COOKIE['room'] : ''?></span>
                &nbsp;<a class="exit-icon" href="/logout" id="exit-btn"></a>
                <!--<span style="cursor:pointer" id="test">test</span>-->
            </p>
        </div>

        <div class="note" id="note"><div id="note-text"></div><div id="note-close">X</div></div>
    </div>
    <div class="bottom">
        <div id="accordion">
            <div class="group users-list">
                <h3><img class="icon" src="/img/users.svg"/> Users</h3>
                <div>
                    <ol id="users-online">

                    </ol>

                </div>
            </div>

            <div class="group">
                <h3><img class="icon" src="/img/cloud-upload.svg"/> Send files</h3>
                <div>
                    <div id="files-wrap" class="files">
                        <input class="ui-button" type="file" id="files-input" name="files[]" multiple />
                        <button title="Send" class="ui-button" id="send-files-btn"><img class="icon" src="/img/cloud-upload.svg"/></button>
                        <button title="Clear selected" class="ui-button" id="cancel-btn"><img class="icon" src="/img/cancel-circle.svg"/></button>
                        <div id="files-list"></div>
                    </div>

                    <div class="cls"></div>

                </div>
            </div>

            <div class="group">
                <h3><img class="icon" src="/img/cloud-download.svg"/> Incoming files</h3>
                <div>
                    <div class="incoming-files">
                        <ul id="incoming-files"></ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="cls"></div>
    </div>

</div>

<div class="right">
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1"><img class="icon" src="/img/video-camera.svg"/></a></li>
            <li><a href="#tabs-2"><img class="icon" src="/img/pencil2.svg"/></a></li>
        </ul>
        <div id="tabs-1">
            <div class="video-wrap" id="video-wrap">


                <div class="remoteVideo">
                    <h3><span id="user-for-videochat"></span></h3>
                    <video id="remoteVideo" autoplay></video>
                </div>
                <div class="localVideo">
                    <h3>You</h3>
                    <video id="localVideo" autoplay muted></video>
                </div>

                <div class="call-buttons">
                    <button class="ui-button" title="Call" id="callButton"><img class="icon" src="/img/phone.svg"/></button>
                    <button class="ui-button" title="Finish call" id="hangupButton"><img class="icon" src="/img/phone-hang-up.svg"/></button>
                    <button class="ui-button" title="ShareScreen" id="screenshareButton"><img class="icon" src="/img/screenshare.svg"/></button>
                    <button class="ui-button" title="Camera Off" id="videoOff"><img class="icon" src="/img/camera-mute.svg"/></button>
                    <button class="ui-button" title="Camera On" id="videoOn"><img class="icon" src="/img/camera2.svg"/></button>
                    <button class="ui-button" title="Microphon Off" id="audioOff"><img class="icon" src="/img/audio-mute.svg"/></button>
                    <button class="ui-button" title="Microphon On" id="audioOn"><img class="icon" src="/img/audio.svg"/></button>
                </div>

            </div>
            <div class="cls"></div>
        </div>
        <div id="tabs-2">
            <div class="chat">
                <h3><span id="user-for-chat"></span></h3>
                <div class="messages" id="messages"></div>
                <div class="cls"></div>
                <div class="input">
                    <p>
                        <!--<input type="text" id="input"/>-->
                        <textarea id="input"></textarea>
                    <div class="cls"></div>
                    <button title="Send" class="ui-button" id="send-btn"></button>
                    <div class="cls"></div>
                    </p>
                </div>
                <div class="cls"></div>
            </div>
            <img id="chat-preload" src="/img/preload.gif"/>

            <div class="cls"></div>
        </div>
    </div>

</div>
<div class="cls"></div>

<?php require_once('_dialog.php')?>
<?php require_once('_footer.php')?>

