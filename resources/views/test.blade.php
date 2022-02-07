<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
        />
        <title>lightGallery</title>
        <meta
            name="description"
            content="lightGallery lets you to create animated thumbnails for your gallery with the help of thumbnail plugin."
        />
        <link href="{{ url('/lightg/static/css/main.css')}}" rel="stylesheet" />
        <link href="{{ url('/lightg/static/css/justifiedGallery.min.css')}}" rel="stylesheet" />
        <link
            href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700"
            rel="stylesheet"
            type="text/css"
        />
        <link href="{{ url('/lightg/lightgallery/css/lightgallery.css')}}" rel="stylesheet" />

  
    </head>

     
        <section class="section pdb0">
            <div class="container-fluid">
                <div class="demo-gallery mrb50">
                    <div id="aniimated-thumbnials" class="list-unstyled">
                        <a
                            class=""
                            href="{{ url('/lightg/static/img/1.jpg')}}"
                            data-sub-html="bridge"
                        >
                            <img
                                class="img-responsive"
                                src="{{ url('/lightg/static/img/1.jpg')}}"
                            />
                            <div class="demo-gallery-poster">
                                <img src="{{ url('/lightg/static/img/zoom.png')}}" />
                            </div>
                        </a>
                        <a
                            class=""
                            href="{{ url('/lightg/static/img/7.jpg')}}"
                            data-sub-html="montain"
                        >
                            <img
                                class="img-responsive"
                                src="{{ url('/lightg/static/img/7.jpg')}}"
                            />
                            <div class="demo-gallery-poster">
                                <img src="{{ url('/lightg/static/img/zoom.png')}}" />
                            </div>
                        </a>
                        
                    </div>
                </div>
                </div>
                </section>
                   
       
        <script src="{{ url('/lightg/lightgallery/js/jquery.min.js') }}"></script>
        <script src="{{ url('/lightg/static/js/prettify.js') }}"></script>
        <script src="{{ url('/lightg/static/js/jquery.justifiedGallery.min.js') }}"></script>
        <script src="{{ url('/lightg/static/js/transition.js') }}"></script>
        <script src="{{ url('/lightg/static/js/collapse.js') }}"></script>
        <script src="{{ url('/lightg/lightgallery/js/lightgallery.js') }}"></script>
        <script src="{{ url('/lightg/lightgallery/js/lg-fullscreen.js') }}"></script>
        <script src="{{ url('/lightg/lightgallery/js/lg-thumbnail.js') }}"></script>
        <script src="{{ url('/lightg/lightgallery/js/lg-video.js') }}"></script>
        <script src="{{ url('/lightg/lightgallery/js/lg-autoplay.js') }}"></script>
    <script src="{{ url('/lightg/lightgallery/js/lg-zoom.js') }}"></script>
        <script src="{{ url('/lightg/external/jquery.mousewheel.min.js') }}"></script>
        <script src="{{ url('/lightg/static/js/demos.js') }}"></script>
    </body>
</html> -->








     
        *********************************


        @foreach($images as $i)
          {{ $i->path }}
        @endforeach
 