

<html>
<head>
<link type="text/css" rel="stylesheet" href= "{{ url('css/lightgallery/lightgallery.css') }}" />

<!-- lightgallery plugins -->
<link type="text/css" rel="stylesheet" href="{{ url('css/lightgallery/lg-zoom.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ url('css/lightgallery/lg-thumbnail.css') }}" />

</head>
<body>
<div id="lightgallery">
    <a href="{{url('/images/front/pexels-photo-256262.jpeg') }}" data-lg-size="1600-2400">
        <img alt=".." src="{{ asset('/images/front/pexels-photo-256262.jpeg') }}" />
    </a>
    <a href="{{url('/images/front/3.jpeg') }}" data-lg-size="1024-800">
        <img alt=".." src="{{ asset('/images/front/3.jpeg') }}" />
    </a>
    ...
</div>


<script src="{{ url('js/lightgallery/lightgallery.umd.js') }}"></script>

<!-- lightgallery plugins -->
<script src="{{ url('js/lightgallery/lg-thumbnail.umd.js') }}"></script>
<script src="{{ url('js/lightgallery/lg-zoom.umd.js') }}"></script>
<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'), {
        plugins: [lgZoom, lgThumbnail],
        speed: 500,
        ... other settings
    });
</script>
</body>
</html>