<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/order">Управление заказами</a></li>
                    <li class="active">Выполнить заказ</li>
                </ol>
            </div>


            <h4>Выполнить заказ #<?php echo $id; ?></h4>


            <p>Вы действительно хотите Выполнить этот заказ?</p>

            <form method="post">
                <input type="submit" name="submit" value="Выполнить" />
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

