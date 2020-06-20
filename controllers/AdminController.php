<?php

/**
 * Контроллер AdminController
 * Главная страница в админпанели
 */
class AdminController extends AdminBase
{
    /**
     * Action для стартовой страницы "Панель администратора"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

         // Получаем список товаров
        $orderList = Order::getOrdersList();
        
        // Подключаем вид
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }


}
