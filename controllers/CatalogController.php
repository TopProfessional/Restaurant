<?php

class CatalogController {

	public function actionIndex()
	{
                $categories = array();
                $categories = Category::getCategoriesList();
            
                $latestProducts=array();
                $latestProducts= Product::getLatestProducts(12);
                
		require_once(ROOT . '/views/catalog/index.php');

		return true;
	}
        
        public function actionCategory($categoryId, $page = 1)
        {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $productsList = Product::getProductsList();
        
                    
        
        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);

        $total = Product::getTotalProductsInCategory($categoryId);

        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
        
        //////////////
        
        

        $productsInCart = false;

        // Получим данные из корзины
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            // Получаем полную информацию о товарах для списка
            $productsIds = array_keys($productsInCart);
            $products = Product::getProdustsByIds($productsIds);

            // Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once(ROOT . '/views/catalog/category.php');
        //require_once(ROOT . '/views/layouts/header.php');
        
        return true;
        }
 
       
}