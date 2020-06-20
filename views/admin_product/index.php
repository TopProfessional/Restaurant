<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

                      
            <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
            
            
            
            
                   
            
            <a href="/admin/product/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить блюдо</a>
            <h4>Список блюд</h4>
            <br/>
            <table class="table-bordered table-striped table">
                <tr>
                    <th>номер блюда</th>
                    <th>Название блюда</th>
                    <th>Цена</th>
                    <th></th>
                    <th></th>
                </tr>
                 
                <?php foreach ($productsList as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?></td>  
                        <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

