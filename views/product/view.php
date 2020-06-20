<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
             <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Меню</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <img  src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2><?php echo $product['name'];?></h2>
                               
                                <span>
                                    <span><?php echo $product['price'];?>грн</span>
                                    <label>Количество:</label>
                                    <input type="text" value="1" />
                                    <button type="button" class="btn btn-default cart">
                                        
                                        <a href="/cart/add/<?php echo $product['id'];?>" 
                                           data-id="<?php echo $product['id']; ?>"
                                            >
                                            Заказать</a>
                                    </button>
                                    
                                     
                                    
                                </span>
                                <p><b>Наличие:</b> можно изготовить</p>
                               
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">                                
                        <div class="col-sm-12">
                            <h5>Описание товара</h5>
                            <?php echo $product['description'];?>
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>