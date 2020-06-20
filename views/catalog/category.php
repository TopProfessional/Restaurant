<?php include ROOT . '/views/layouts/header.php'; ?>

                                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-right">
                              <ul class="nav navbar-nav collapse navbar-collapse">  
                                                                        
                                 <?php foreach ($categories as $categoryItem): ?>
                           
                                        <li><a href="/category/<?php echo $categoryItem['id'];?>"
                                           class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"
                                           >                                                                                    
                                            <?php echo $categoryItem['name'];?>
                                            </a></li>
                                   
                                
                        <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div><!--/header-bottom-->
 <!--////////////////////////ПОИСК//////////////////////////////////////////////////////////////////////////-->
            

<!--action="/views/catalog/ajax.php"-->
            <br>
            <div class="container content">
                <form class="form-horizontal" action="/views/product/search.php" method="post" id="form" enctype="multipart/form-data">
	<div class="form-group">
		<label for="date" class="col-sm-3 control-label">Поиск</label><button type="submit" id="submit" class="btn btn-primary">найти</button>
		<div class="col-sm-4">

			<input type="text" class="form-control" id="search" name="search" placeholder="Поиск...">
                        
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-6">

			

			<div></div>
		</div>
	</div>
</form>
	</div>

            
            <!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
            

<section>
   <!-- <div class="container">-->
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                   <h2>Ваш заказ</h2>
                    
                   <div class="col-sm-11 padding-right">
                <div class="features_items">
                 <!--   <h2 class="title text-center">Ваш заказ</h2> -->
                    
                    <?php if ($productsInCart): ?>
                  
                        <table class="table-bordered table-striped table">
                            <tr>
                                <th>Название</th>
                                <th>Стомость, грн</th>
                                <th colspan="2">Количество, шт</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    
                                    <td>
                                        <a href="/product/<?php echo $product['id'];?>">
                                            <?php echo $product['name'];?>
                                        </a>
                                    </td>
                                    <td><?php echo $product['price'];?></td>
                                    <td><?php echo $productsInCart[$product['id']];?></td>    
                                    <td>
                                        <a href="/cart/delete/<?php echo $product['id'];?>">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td colspan="2">Общая стоимость:</td>
                                    <td colspan="2"> <?php echo $totalPrice;?></td>
                                </tr>
                            
                        </table>
                   <a class="btn btn-default checkout" href="/cart/"><i class="fa fa-shopping-cart"></i> Оформить заказ</a><br><br>
                    <?php else: ?>
                        <p >Вы ничего не заказали </p>
                        
                         <?php endif; ?>
                            
                </div>

            </div>
                </div>
            </div>
 
            
                        
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                  
                    
                    <?php foreach ($categoryProducts as $product): ?>
                    
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                        <div class="pull-right"><b><?php echo $product['weight'];?>г</b></div>
                                        <h2><?php echo $product['price'];?>грн</h2>
                                        <p>
                                        
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <b><?php echo $product['name'];?></b>
                                            </a>
                                        </p>
                                        <a href="/cart/add/<?php echo $product['id'];?>" 
                                           data-id="<?php echo $product['id']; ?>"
                                           class="btn btn-default add-to-cart" >
                                            Заказать</a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                        <!-- Выезжающие меню -->
                                        
                                        <!-- //////////////// -->
                                </div>
                            </div>
                        </div>
                    
                    <?php endforeach;?>     
                    <!--/////////////////////////////////////////////////////-->                 
                   
                    
                   
                   
                    
                    <!--/////////////////////////////////////////////////////-->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                    <script src="/template/js/jquery-ui.js"></script>
                    <script>
                    
                    $(function(){
		
                    var langs = [<?php foreach ($productsList as $product) 
                     echo "\"".$product['name']."\","; ?>];

                    console.log(langs);

                            $("#search").autocomplete({
                                    source: langs
                            });

                    });
                    
                    
                     </script>
                     
                     
                    
                </div><!--features_items-->
                <!-- Постраничная навигация -->
                <?php echo $pagination->get(); ?>
            </div>
        </div>
    </div>
   
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>