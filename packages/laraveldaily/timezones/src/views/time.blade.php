<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Testing</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

  

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css"/>
<link rel="stylesheet" href="https://freephonebox.net/style-horizontal.css" type="text/css"/>
<link rel="stylesheet" href="https://freephonebox.net/skin.css" type="text/css"/>
<script src="https://freephonebox.net/jquery.js" type="text/javascript"></script>
<script src="https://freephonebox.net/Arbiter.js" type="text/javascript"></script>
<script src="https://freephonebox.net/jquery.i18n.properties.js" type="text/javascript"></script>
<!-- For resizeable webcam display -->
<script src="https://freephonebox.net/jquery-ui.js"></script>
<link rel="stylesheet" href="https://freephonebox.net/jquery-ui.css" type="text/css"/>
<!--<script src="http://jssip.net/download/jssip-devel.js"></script>-->
<script src="https://freephonebox.net/jssip.js" type="text/javascript"></script>
<script src="https://freephonebox.net/init.js" type="text/javascript"></script>
<script src="https://freephonebox.net/config.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- compressed JavaScript source built by make-release script -->
<script src="https://freephonebox.net/JSComm.js" type="text/javascript"></script>
<!--font-->

</head>
<body>


    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="primary">
          
          </div>
        </div>
        <br>
        <div class="row">
          <div class=" col-md-offset-4 col-lg-4 ml-auto text-center">
        
        

       <div id="encapsulate"  class="form" style="border-radius: 1px;background: white;border: 1px solid rgba(204, 204, 204, 0.48);">
    <div id="header">
        <div class="box-header with-border">
              <h3 style="
    margin-left: -5px;
    margin-right: -5px;
    margin-top: -3px;
    background: #0aa89e;
    padding: 8px;
">JSCommunicator</h3>
            </div>
       <!--  <select id="lang_selection">
            <option value="en">Select a language</option>
        </select> -->
        <i class="fa fa-power-off" id="jsc-logout-button"></i>
       <img style="
      border: 3px solid;
    border-color: #dff0d8;
    margin-right: -10%;
    margin-top: 7%;
"  src="http://cyber-education.az/assets/img/avatar1.jpg?1403934956" class="img-circle" alt="User Image">
        <span style="
    display: none;
"  id="welcome"></span><span id="welcome_name"></span>
    </div>
    <div id="network-controls">
        <div id="jsc-login">
            <div id="jsc-login-display-name">
                <span class="jsc-login-label">Display name (may be empty)</span>
                <input type="text" id="jsc-login-display-name-field"/>
            </div>
            <div id="jsc-login-sip-uri">
                <span class="jsc-login-label">SIP address</span>
                <input type="text" id="jsc-login-sip-address-field"/>
            </div>
            <div id="jsc-login-password">
                <span class="jsc-login-label">Password</span>
                <input type="password" id="jsc-login-password-field"/>
            </div>
            <div id="jsc-login-option">
                <input type="checkbox" id="rememberMe"><span id="remember-label">Remember me</span><br>
            </div>
            <input type="button" value="Login" id="jsc-login-button"/>
        </div>
    </div>

    <div id="communicator">
        <div id="call">
            <h3 style="display:none;" >Call</h3>
            <div id="call-info">
                <span class="no-contact" id="call-contact-error">Please enter a contact.</span>
                <div id="state">
                    <span class="session-outgoing">Dialing...</span>
                    <span class="session-incoming">Incoming call</span>
                    <span class="session-accepted">Answering, connectivity checks in progress...</span>
                    <span class="session-active">Call connected</span>
                </div>
            </div>

            <div id="dial-controls" class="ws-connected">
                <div id="dest">
                    <span id="dest_label">Destination:</span>
                    <input class="form-control" style= "   margin-top: 42%;
    margin-bottom: 41%;
    margin-left: 37%;" type="text" id="address" placeholder="Enter contact"/>
                </div>
                <div style="
       margin-top: -15%;
    margin-right: 35%;
" id="dialing-actions">
                    <button class="btn btn-default" id="call-audio"><i class="fa fa-phone fa-lg" style="color: #0aa89e;"></i></button>
                    <button class="btn btn-default" id="call-video"><i class="fa fa-video-camera fa-lg" style="color: #0aa89e;"></i></button>
                </div>
            </div>

            <div id="session-controls" class="ws-connected in-call">
                <div id="peer"></div>
                <div id="session-actions">
                    <button value="Cancel" id="session-cancel" class="session-outgoing">
                        <i class="fa fa-phone " ></i>
                    </button>
                    <button value="Reject" id="session-reject" class="session-incoming">
                        <i class="fa fa-phone fa-lg red-phone" style="color:red;"></i>
                    </button>
                    <button value="Answer" id="session-answer" class="session-incoming">
                        <i class="fa fa-phone fa-lg" style="color:green;"></i>
                    </button>
                    <button value="Answer (with video)" id="session-answer-video" class="session-incoming">
                        <i class="fa fa-video-camera fa-lg" style="color:green;"></i>
                    </button>
                    <!-- Not implemented yet?
                    <button value="Hold" id="session-hold" class="session-active" disabled>
                        <i class="fa fa-pause fa-lg" style="color:red;"></i>
                    </button>-->
                    <button value="Hangup" id="session-hangup" class="session-active">
                        <i class="fa fa-phone fa-lg red-phone" style="color:red;"></i>
                    </button>
                    <button id="dtmf-button" class="session-active">
                        <i class="fa fa-th fa-lg" style="color:darkblue;"></i>
                    </button>
                </div>
            </div>
            <div id="dtmf-pad">
                <input type="button" value="1" class="dtmf-number"/>
                <input type="button" value="2" class="dtmf-number"/>
                <input type="button" value="3" class="dtmf-number"/>
                <input type="button" value="A" class="dtmf-symbol"/>
                <br/>
                <input type="button" value="4" class="dtmf-number"/>
                <input type="button" value="5" class="dtmf-number"/>
                <input type="button" value="6" class="dtmf-number"/>
                <input type="button" value="B" class="dtmf-symbol"/>
                <br/>
                <input type="button" value="7" class="dtmf-number"/>
                <input type="button" value="8" class="dtmf-number"/>
                <input type="button" value="9" class="dtmf-number"/>
                <input type="button" value="C" class="dtmf-symbol"/>
                <br/>
                <input type="button" value="*" class="dtmf-symbol"/>
                <input type="button" value="0" class="dtmf-number"/>
                <input type="button" value="#" class="dtmf-symbol"/>
                <input type="button" value="D" class="dtmf-symbol"/>
                <br/>
            </div>
        </div>

       <div class="card-head style-primary" >
        <div id="chat">
            <h3 sstyle="color: #ccc;">Chat</h3>
            <div id="chat-error">
                <span class="no-contact" id="chat-contact-error">Please enter a contact.</span>
            </div>
            <div id="new-chat">
                <span id="chat_dest_label">Destination:</span>
                <input  class="form-control" type="text" id="chat-address" placeholder="Enter contact"/>
                <button id="start-chat"><i class="fa fa-comments fa-lg" style="color:darkblue;"></i></button>
            </div>
            <ul id="tab-labels">
            </ul>
            <div id="tab-pages">
            </div>
        </div></div> 
    </div>

    <div id="error">
        <span id="js">ERROR: This service requires JavaScript.  Please enable JavaScript in your web browser settings.</span>
        <span id="webrtc">ERROR: This service requires WebRTC.  Please try <a href="http://www.mozilla.org">Mozilla Firefox</a> or <a href="http://www.google.com/chrome">Google Chrome</a>, using the latest version is strongly recommended.</span>
        <span id="no-config">ERROR: JsCommunicator configuration not found</span>
        <span id="ua-init-failure">ERROR: Failed to initialize user agent</span>
        <span id="reg-fail">ERROR: SIP Registration failure</span>
        <span id="call-attempt-failed">ERROR: failed to start call, check that microphone/webcam are connected, check browser security settings, peer may not support compatible codecs</span>
        <span id="dynamic"></span>
    </div>
    <div id="ws">
        <span id="ws_link">WebSocket link:</span>
        <span id="connected" class="state ws-connected">Connected</span>
        <span id="disconnected" class="state ws-disconnected">Disconnected</span>
    </div>
    <div id="reg" class="ws-connected up down"><span>SIP registration:</span>
        <span id="state">
            <span class="up">Registered</span>
            <span class="down">Not Registered</span>
        </span>
        <span id="control">
            <input type="button" value="Register" id="reg-button" class="down"/>
            <input type="button" value="De-Register" id="de-reg-button" class="up"/>
        </span>
    </div>
    
</div>
    
<div id="video-session" class="ws-connected in-call">
    <video id="remoteView" autoplay controls></video>
    <video id="selfView" autoplay muted></video>
    <div id="video-controls">
        <input type="button" value="Self view" id="video-control-self-view" class="self"/>
        <input type="button" value="Self hide" id="video-control-self-hide" class="self"/>
    </div>
</div>
  </div>
      </div>
    </section>

    </body>
</html>
