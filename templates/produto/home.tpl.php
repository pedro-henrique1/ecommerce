<div class="propaganda">
    <img class="image-propaganda" src="/image/SubVOLTZ_Destaque_Home_desk.png" alt="image">
</div>


<div class="cards">
    <!-- Indicators -->
<!--     <div class="carousel">-->
        <?php
        $count = 0;
        foreach ($data['products'] as $product):
            $product['price'] = number_format($product['price'], 2, ",", "." );
            $product['price_share'] = substr($product['price_share'], 0, 2) . "x";
            ?>
            <?php $count += 1 ?>
<!--            <ol class="carousel-indicators">-->
<!--                <li data-target="#myCarousel" data-slide="--><?php //$count ?><!--"></li>-->
<!--            </ol>-->

            <!-- wrapper for slides -->
                <div class="card">
                    <img class="card-img-top" src="/image/air-conditioners.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $product['name'] ?></h4>
                        <div class="star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                        </div>
                        <p class="card-text-price">R$ <?php echo $product['price'] ?></p>
                        <small><?php echo $product['price_share'] ?> de R$ <?php echo $product['dividir'] ?>100
                            sem
                            juros </small>
                    </div>
                </div>
        <?php endforeach ?>
    </div>
</div>

<script>
    $('.carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });

</script>
<!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
</a> -->


   