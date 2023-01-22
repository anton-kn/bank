<?php
use models\User;
use models\Product;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title><?php echo $this->title ?></title>
    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="link-light fs-3 ms-5" href="/bank">Банк</a></li>
                    <?php if(isset($this->typePerson)) {?>
                    <li class="breadcrumb-item active fs-3 " aria-current="page"><a class="link-light" href="/bank/?action=person&type=<?=$this->typePerson?>"><?= User::namePerson($this->typePerson) ?></a></li>
                    <?php } ?>
                    <?php if(isset($this->typeProduct)) {?>
                    <li class="breadcrumb-item active fs-3 " aria-current="page"><a class="link-light" href="/bank/?action=product&type=<?=$this->typeProduct?>&person=<?=$this->typePerson?>"><?= Product::nameProduct($this->typeProduct) ?></a></li>
                    <?php }?>
                </ol>
            </nav>

        </header>

        <div class="m-5">
            <?php
            require __DIR__ . '../../' . $this->partPage . '.php';
            ?>
        </div>

    </body>
</html>
