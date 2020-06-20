<?php

class Order
{

    /**
     * Сохранение заказа 
     * @param type $name
     * @param type $email
     * @param type $password
     * @return type
     */
    public static function save($userName, $userPhone, $userComment, $userId, $products, $totalPrice)
    {
        $products = json_encode($products);

        $db = Db::getConnection();

        $sql = 'INSERT INTO product_order (user_name, user_phone, user_comment, user_id, products, totalprice) '
                . 'VALUES (:user_name, :user_phone, :user_comment, :user_id, :products, :totalprice)';

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':products', $products, PDO::PARAM_STR);
        $result->bindParam(':totalprice', $totalPrice, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function getOrdersList()
    {
        $db = Db::getConnection();
                 
         $result = $db->query('SELECT id, products, date, user_comment, totalprice, status FROM product_order ORDER BY id ASC');
        $ordersList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $ordersList[$i]['id'] = $row['id'];
            $ordersList[$i]['products'] = $row['products'];
            $ordersList[$i]['date'] = $row['date'];
            $ordersList[$i]['user_comment'] = $row['user_comment'];
            $ordersList[$i]['totalprice'] = $row['totalprice'];
            $ordersList[$i]['status'] = $row['status'];
            $i++;
        }
        return $ordersList;
    }

     public static function deleteOrderById($id)
     {
          // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM product_order WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
     }
}
