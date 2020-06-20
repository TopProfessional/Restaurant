<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section> <!--Поиск заказов -->
    
</section>

<section>
    <div class="container">
        <div class="row">

           <br>
           
            <table class="table-bordered table-striped table">
                <tr>
                    <th>номер</th>
                    <th>заказ</th>
                    <th>дата</th>
                    <th>коментарий</th>
                    <th>сумма</th>
                    <th>статус</th>
                    <th>выполнить</th>
                </tr>
                <?php foreach ($orderList as $order): ?>
                    <tr>
                        <td><?php echo $order['id']; ?></td>
                        <td><?php echo $order['products']; ?></td>
                        <td><?php echo $order['date']; ?></td>
                        <td><?php echo $order['user_comment']; ?></td>
                        <td><?php echo $order['totalprice']; ?></td> 
                        <td><?php echo $order['status']; ?></td>
                        <td><a href="/admin/order/delete/<?php echo $order['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

