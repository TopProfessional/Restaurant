<?php

class AdminOrderController extends AdminBase
{
   public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем категорию
            Order::deleteOrderById($id);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_order/delete.php');
        return true;
    }
}
