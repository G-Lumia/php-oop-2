<?php
    // vengono caricati l'array di prodotti e l'header 
    include __DIR__ . '/db.php';
    include __DIR__ . '/Partials/Template/header.php';
?>


<div class="container row">
    <?php
    //ciclo per la stampa in pagina dei prodotti
        foreach($products as $product):
            try 
            {
                if($product->isValid() == true)
                {
                    ?>
                    <div class="col-12 col-sd-6 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-title text-center m-2">
                                <h4>
                                    <?php  echo $product->getName();?>
                                </h4>
                            </div>
                            <div class="card-body">
                                <img src="<?php echo $product->getProductImg()?>" class="card-img-top" alt="<?php  echo $product->getName()?>">
                                <p>
                                    <strong> Category: </strong>
                                    <?php 
                                    if($product->getCategory() == "dog")
                                    {?>
                                    <i class="fa-solid fa-dog"></i>
                                    <?php 
                                    }
                                    elseif($product->getCategory() == "cat")
                                    {
                                    ?>
                                        <i class="fa-solid fa-cat"></i>
                                    <?php 
                                    }
                                    ?>
                                </p>
                                <p>
                                    <strong> Price: </strong>
                                    <br>
                                    <?php echo "{$product->getPrice()}$";
                                    ?>
                                </p>
                                <!-- Dopo aver stampato i dati base dei prodotti, viene effettuato
                                un controllo per verificare la classe del prodotto.
                                In base alla classe verranno stampati dati diversi -->
                                <?php 
                                    if(get_class($product) == "Toy")
                                    {
                                ?>
                                    <p>
                                        <strong> Material: </strong>
                                        <br>
                                        <?php echo "{$product->getMaterial()}";?>
                                    </p> 
                                    <p>
                                        <strong> Model: </strong>
                                        <br>
                                        <?php echo "{$product->getModel()}";?>
                                    </p>
                                    <p>
                                        <strong> Type: </strong>
                                        <br>
                                        <?php echo "{$product->getType()}";?>
                                    </p>
                                <?php 
                                    }
                                    elseif(get_class($product) == "Bed")
                                    {
                                ?>
                                    <p>
                                        <strong> Material: </strong>
                                        <br>
                                        <?php echo "{$product->getMaterial()}";
                                        ?>
                                    </p>
                                <?php 
                                    }
                                    elseif(get_class($product) == "Food")
                                    {
                                ?>
                                <p>
                                        <strong> Weight: </strong>
                                        <br>
                                        <?php echo "{$product->getWeight()}";
                                        ?>
                                    </p> 
                                    <p>
                                        <strong> Kcal: </strong>
                                        <br>
                                        <?php echo "{$product->getKcal()}";
                                        ?>
                                    </p>
                                    <p>
                                        <strong> Diet: </strong>
                                        <br>
                                        <?php echo "{$product->getDiet()}";
                                        ?>
                                    </p>
                                <?php 
                                    }
                                ?>
                                <button class="btn btn-primary"> Buy Now </button>
                            </div>
                        </div>
                    </div>
                <?php
                }
            }
            catch (Exception $e) 
            {
                ?>
                <div class="col-12 col-sd-6 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-title text-center m-2">
                            <h4>
                                <?php  echo "{$product->getName()} {$product->getSurname()}"?>
                            </h4>
                    </div>
                    <div class="card-body">
                        <img src="https://media.istockphoto.com/id/108177011/photo/trapped-businessman.jpg?s=612x612&w=0&k=20&c=G5wIqqYvWELuJOw8_0ew6sMGqJafYv4ceVh0c4AHnPw=" class="card-img-top">
                        <p>
                            <strong> Job : </strong>
                            <?php echo "{$product->getJob()}";?>
                        </p>
                        <p>
                            <strong> Favorite Color: </strong>
                            <br>
                            <?php echo "{$product->getFavoriteColor()}";?>
                        </p>
                    </div>
                </div>
            <?php
            }
        endforeach;
        // viene caricata la pagina footer.php
        include __DIR__ . '/Partials/Template/footer.php';
        ?>
</div>