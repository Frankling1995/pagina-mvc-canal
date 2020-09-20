<div class="container" id="CompSlider">
    <div id="slider-principal" class="carousel slide mt-4" data-ride="carousel">
        <ol class="carousel-indicators">
                <li class="active" data-target="#slider-principal" data-slide-to="0" ></li>
                <li data-target="#slider-principal" data-slide-to="1"></li>
                <li data-target="#slider-principal" data-slide-to="2"></li>
            </ol>

        <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="<?php echo BASE_URL;?>Upload/01.jpg"   >
            <div class="carousel-caption">
                <h3 class="text-uppercase">imagen 1 </h3>
            </div>

        </div>
        <div class="carousel-item ">
            <img src="<?php echo BASE_URL;?>Upload/02.jpg"   >
            <div class="carousel-caption">
                <h3 class="text-uppercase">imagen 2 </h3>
            </div>

        </div>
        <div class="carousel-item ">
            <img src="<?php echo BASE_URL;?>Upload/03.jpg"  >
            <div class="carousel-caption">
                <h3 class="text-uppercase">imagen 3 </h3>
            </div>

        </div>
        </div>
        <a href="#slider-principal" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a href="#slider-principal" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>

    </div>
</div>