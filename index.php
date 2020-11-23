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
    
    <script src="/videojs/video.min.js"></script>

    <script src="/videojs/videojs-ie8.min.js"></script>

    <link rel="stylesheet" href="/videojs/videojs-seek-buttons.css">
    
  
</head>


<body>
          <br><br><br>


                                                              <!--Player --> 

                  <div class="d-flex justify-content-center">
                  <div class="shadow-lg p-3 mb-5 bg-black rounded">
                            <video id="playerjs" class="video-js" width="902px" height="530px"
                                 controls preload="metadata"
                                 data-setup='{  "playbackRates": [0.2,0.5,1, 1.5, 2] }'>
                             
                             
                             
                    <source src="//vjs.zencdn.net/v/oceans.webm" type="video/mp4" /> 
                               
              
              
                             </video>
              
          
                            
                  </div>        
              </div>
         

                                                              <!--Plugins -->


                                
              <script src="/videojs/videojs.hotkeys.min.js"></script>

              <script src="/videojs/videojs-seek-buttons.min.js"></script>

              
              
                               <!-- seekButtons   -->
              
               <script>
                  (function(window, videojs) {
                    var rflixPlayer = window.rflixPlayer = videojs('playerjs');
                    var seekButtons = window.seekButtons = rflixPlayer.seekButtons({
                      forward: 5,
                      back: 5
                    });
                  }(window, window.videojs));
                </script>
              
                              <!-- hotkeys   -->
              <script>
                             videojs('playerjs').ready(function() {
                   this.hotkeys({
                  volumeStep: 0.1,
                  seekStep: 5,
                  enableModifiersForNumbers: false
                  });
                  });
                    
              </script>
              
 

  </body>


