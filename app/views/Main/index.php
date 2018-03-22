
<!--banner-starts-->
<div class="bnr" id="home">
    <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider4">
            <li>
                <img src="images/bnr-1.jpg" alt=""/>
            </li>
            <li>
                <img src="images/bnr-2.jpg" alt=""/>
            </li>
            <li>
                <img src="images/bnr-3.jpg" alt=""/>
            </li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<!--banner-ends-->


<?php if($brands):  ?>
<!--about-starts-->
<div class="about">
    <div class="container">
        <div class="about-top grid-1">

        <?php foreach($brands as $brand): ?>
            <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="images/<?=$brand->img;?>" alt=""/>
                    <figcaption>
                        <h4><?=$brand->title;?></h4>
                        <p><?=$brand->description;?></p>
                    </figcaption>
                </figure>
            </div>
        <?php endforeach ; ?>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--about-end-->
<?php endif; ?>

<!--product-starts-->
<?php if($hits): ?>
<div class="product">
    <div class="container">
        <div class="product-top">
            <div class="product-one">
    <?php foreach ($hits as $hit): ?>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="product/<?=$hit->alias;  ?>" class="mask"><img class="img-responsive zoom-img" src="images/<?=$hit->img; ?>" alt="" /></a>
                        <div class="product-bottom">
                            <h3><?=$hit->title; ?></h3>
                            <p><?=$hit->description; ?></p>
                            <h4><a class="add-to-cart-link" href="cart/add?=<?=$hit->id; ?>"><i></i></a> <span class=" item_price">$ <?=$hit->price; ?></span></h4>
                        </div>
    <?php if($hit->old_price): ?>
    <small><del>Старая Цена: <?=$hit->old_price ;  ?></del></small>
    <?php endif;?>

                        <div class="srch">
                            <span>-50%</span>
                        </div>
                    </div>
                </div>

<?php endforeach ; ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!--product-end-->