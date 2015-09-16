@extends('layouts.base')

<?php
    $files = glob("clips/*.mp3");
?>
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css">
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/base/base-min.css">

@section('content')


        <h1>Amy: The Actor's Act</h1>

        <div class="row">
          <div id="doc">

        </div>
        <!-- JS here to prevent 'flash' of all the default audio players -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript" charset="utf-8">
            $(function() {
                $("audio").removeAttr("controls").each(function(i, audioElement) {
                    var audio = $(this);
                    var that = this; //closure to keep reference to current audio tag
                    $("#doc").append($('<button class="btn btn-default col-xs-6" style="margin:10px;">'+audio.attr("title")+'</button>').click(function() {
                        that.play();
                    }));
                });
            });
        </script>
        <?php foreach($files as $file) { ?>
            <?php $title = str_replace(".mp3", "", str_replace("clips/", "", $file)); ?>
            <audio src="<?php echo $file; ?>" controls autobuffer="true" title="<?php echo $title ?>"></audio>
        <?php } ?>
    </div>

@stop
