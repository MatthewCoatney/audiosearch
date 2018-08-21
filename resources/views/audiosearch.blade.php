@extends('layouts.master')

@section('title') Laravel Project | Audiosearch

@stop

@section('headscript')

<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans:300,400|Source+Code+Pro" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">

<link rel="stylesheet" href="css/vendor/tipue/tipuesearch.css">
<link rel="stylesheet" href="css/vendor/tipue/gridism.css">
<script src="js/vendor/tipue/tipuesearch_set.js"></script>

@stop


@section('showcase')

<div id="frame">
    <iframe id="sermon-howler" src="howler" style="width:100%;height:800px;"></iframe>
</div>
@stop

@section('subshowcase')
<div class="row">
    <div class="large-12 medium-12 columns">
        <form class="domain-form" form method="GET" action="{{ route('audiosearch') }}" id="searchForm">
            <div class="input-group">

                <span class="input-group-label">Search Audio</span>
                <input type="text" placeholder="Search by topic" class="input-group-field" name="q" id="tipue_search_input" pattern=".{3,}" title="At least 3 characters" required>
                <div class="input-group-button">
                    <input type="submit" class="button" value="Search">
                </div>
            </div>
        </form>


    </div>
</div>
@stop


@section('section-a')

<div class="cont">


    <div class="wrap">
        <div style="padding: 27px 0 49px 0;">

            <div class="grid">
                <div class="unit whole">


                    <div style="padding-top: 33px;">

                        <div id="tipue_search_content"></div>

                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

@stop


@section('footerscript')

<script src="js/vendor/tipue/tipuesearch.js"></script>
<!-- HOWLER -->
<script src="js/vendor/goldfire/howler.core.min.js"></script>
<script src="js/vendor/goldfire/siriwave.js"></script>

<script>
    var tipuesearch = {
        "pages": {!!$sermons!!}
    };


    $(document).ready(function() {

        $('#tipue_search_input').tipuesearch({
            'show': 20,
            'showURL': false
        });
    });


    // Rebuild the iFrame to change the Player audio
    function setupPlaylist(url) {

        // Jquery Ajax reloading the frame
        $('#frame').empty();
        $("#frame").append("<iframe id=sermon-howler src=" + encodeURI(url) + " style=width:100%;height:800px;></iframe>");

    }
</script>
@stop
