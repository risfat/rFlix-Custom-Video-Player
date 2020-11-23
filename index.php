<!--

 * rFlix
 *
 * rFlix-Movie & Video Streaming CMS with Unlimited TV-Series
 *
 * @package     rFlix
 * @author      MD Risfat
 * @copyright   Copyright (c) 2015 - 2020 RisfBD,
 * @link        http://rflix.xyz
 * @mail        md@risfbd.com
 *

-->




<head>
    
    
    <link href="/videojs/video-js.min.css" rel="stylesheet"/>
    
    <link href="/videojs/index.css" rel="stylesheet"/>

    <link rel="stylesheet" href="/videojs/videojs-seek-buttons.css">
    
    <script src="/videojs/video.min.js"></script>

    <script src="/videojs/videojs-ie8.min.js"></script> 
    
  
</head>


<body>
          <br><br><br>


                                                              <!--Player --> 

                  <div class="d-flex justify-content-center">
                  <div class="shadow-lg p-3 mb-5 bg-black rounded">
                            <video id="rflix-player" class="video-js" crossorigin="anonymous" width="902px" height="530px"
                                 controls preload="auto"
                                 data-setup='{  "playbackRates": [0.2,0.5,1, 1.5, 2] }'>
                             
                             
                             
                    <source src="//d2zihajmogu5jn.cloudfront.net/elephantsdream/ed_hd.mp4" type="video/mp4" /> 
                    <track kind="captions" src="captions.vtt" srclang="en" label="English">
    
                             </video>
              
                            
                            
                  </div>        
              </div>
         

                                                              <!--Plugins -->
                                
              <script src="/videojs/videojs.hotkeys.min.js"></script>

              <script src="/videojs/videojs-seek-buttons.min.js"></script>

              
              
                               <!-- seekButtons   -->
              
               <script>
                  (function(window, videojs) {
                    var rflixPlayer = window.rflixPlayer = videojs('rflix-player');
                    var seekButtons = window.seekButtons = rflixPlayer.seekButtons({
                      forward: 5,
                      back: 5
                    });
                  }(window, window.videojs));
                </script>
              
                              <!-- hotkeys   -->
              <script>
                  videojs('rflix-player').ready(function() {
                   this.hotkeys({
                  volumeStep: 0.1,
                  seekStep: 5,
                  enableModifiersForNumbers: false
                  });
                  });
                    
              </script>
              
 
    
  </body>


