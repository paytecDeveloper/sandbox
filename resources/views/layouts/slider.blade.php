<style>
    .slider {
        background: url({{$url}});
        background-size: cover;
        height: 500px;
        width: 100%;

    }

    .row {
        margin: 0;
    }

    .slider-text {
        position:relative;
        color:white;
        font-size:50px;
        top:50%;
        left:45%;
    }
</style>
<div class="row slider">
    <div class="slider-text">
        {{$text}}
    </div>
</div>