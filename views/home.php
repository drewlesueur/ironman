<style>

    .block img {
        width: 100px;
    }

    .block {
        width: 250px;
        height: 150px;
    }

    .block div:nth-child(2){
        width: 55%;
    }

</style>
<div class="flexslider">
    <ul class="slides">

        <li class="content-background" style="background-image: url('/ironman/img/heading1.jpg');">
            <div class="content-wrapper">
                <div class="main-slide-hdr">IRON MAN ROCKS!</div>
                <div class="main-slide-sub-hdr">Iron Man 2 poster</div>
            </div>
        </li>
        <li class="content-background" style="background-image: url('/ironman/img/heading2.jpg');">
            <div class="content-wrapper">
                <div class="main-slide-hdr">IRON TURN<br>UP THE HEAT</div>
                <div class="main-slide-sub-hdr">Iron Man 3 poster</div>
            </div>
        </li>
        <li class="content-background" style="background-image: url('/ironman/img/heading3.jpg');">
            <div class="content-wrapper">
                <div class="main-slide-hdr">IRON<br>SMOOCH</div>
                <div class="main-slide-sub-hdr">Scene from Iron Man 3</div>
            </div>
        </li>
        <li class="content-background" style="background-image: url('/ironman/img/heading4.jpg');">
            <div class="content-wrapper">
                <div class="main-slide-hdr">IRON BLOWIN STUFF UP</div>
                <div class="main-slide-sub-hdr">Avengers promo poster</div>        
            </div>
        </li>
    </ul>
    <ul class="flex-direction-nav">
        <li>
            <a class="flex-prev" href="#">Previous</a>
        </li>
        <li>
            <a class="flex-next" href="#">Next</a>
        </li>
    </ul>

</div>    

<div class="container">

    <br>
    <br>

    <div class="row">

        <div class="block span4">
            <div>
                <a href="/ironman/characters/"><img class="shadow" src="/ironman/img/characters/1.jpg"></a>
            </div>
            <div>
                <h3><a href="/ironman/characters/">Characters</a></h3>
                <p>Characters from the iron man movies</p>
            </div>
        </div>        

        <div class="block span4">
            <div>
                <a href="/ironman/armor/"><img class="shadow" src="/ironman/img/armor/1.jpg"></a>
            </div>
            <div>
                <h3><a href="/ironman/armor/">Armor</a></h3>
                <p>The different suits of armor iron man has used over the years</p>
            </div>
        </div>        

        <div class="block span4">
            <div>
                <a href="/ironman/movies/"><img class="shadow" src="/ironman/img/movies/1.jpg"></a>
            </div>
            <div>
                <h3><a href="/ironman/movies/">Movies</a></h3>
                <p>All of the Hollywood iron man movies</p>
            </div>
        </div>        
    </div>
</div>
<script>
    $(function() {
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "fade"
            });
        });
    });
</script>