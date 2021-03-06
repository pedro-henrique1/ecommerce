<div class="propaganda">
    <img class="image-propaganda" src="/image/SubVOLTZ_Destaque_Home_desk-2.png" alt="image">
</div>

<div class="cards">
    <!-- Indicators -->
    <?php
    foreach ($data['products'] as $product) :
        $product['price'] = number_format($product['price'], 2, ",", ".");
        $product['price_share'] = substr($product['price_share'], 0, 2) . "x";
        ?>
        <!-- wrapper for slides -->
        <a class="links" href="/produtos/<?php echo $product['reference'] ?>">
            <div class="card">
                <img class="card-img-top mt-2" src="upload/<?php echo $product['image']?>" alt="image produto">
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
                    <small><?php echo $product['price_share'] ?> de R$100 sem juros</small>
                </div>
            </div>
        </a>
    <?php endforeach ?>
</div>
