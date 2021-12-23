<?php
$Url = $_GET['id'];
?>
<!-- Docs styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/CDNSFree2/Plyr/plyr.css" />

<!--Add a Simple HTML5 Video tag-->
<div id="container">
  <video controls data-poster="" class="vid1">
    <!-- Video files -->
    <source src="https://www.udrop.com/file/<?php echo $Url;?>" type="video/mp4" size="576" />

    
  </video>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.6.7/plyr.min.js"></script>

<script>
  var controls =
[
    'play-large', // The large play button in the center
   // 'restart', // Restart playback
   // 'rewind', // Rewind by the seek time (default 10 seconds)
    'play', // Play/pause playback
    'fast-forward', // Fast forward by the seek time (default 10 seconds)
    'progress', // The progress bar and scrubber for playback and buffering
    'current-time', // The current time of playback
    'duration', // The full duration of the media
    'mute', // Toggle mute
    'volume', // Volume control
    'captions', // Toggle captions
    'settings', // Settings menu
    
    'airplay', // Airplay (currently Safari only)
    
    'fullscreen' // Toggle fullscreen
];

  const player = new Plyr('.vid1',{controls});
</script>

<style>
  :root {
  --plyr-color-main: #e657ff;
    --plyr-video-control-color  :#e8ffba;
}
.plyr--video {
    background: #000;
    height: 100%;
    overflow: hidden;
}

div#container {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
}
</style>