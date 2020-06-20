<?php include ROOT.'/views/layouts/header.php';?>

        <section>
            <div class="container">
                <div class="row">
                   

                   <!-- <div class="col-sm-9 padding-right"> -->
                        
                           
                            <?php foreach ($categories as $CategoryItem):?>
                           
                           <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                     <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img height="170px" src="<?php echo Category::getCategoryImage($CategoryItem['id']); ?>" alt="" /> 
                                            <br>
                                            <br>
                                            <p>
                                                 <a href="/category/<?php echo$CategoryItem['id'];?>">
                                                     <b><?php echo$CategoryItem['name'];?></b>
                                                </a> 
                                                                                                                        
                                            </p>
                                            
                                        </div>
                                        
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                           

                        
                   <a href="user/login">вход</a>
                    </div>
                </div>
            </div>
        </section>

        <?php include ROOT.'/views/layouts/footer.php';?>