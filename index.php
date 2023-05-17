<?php
    include __DIR__ . '/db.php';
    include __DIR__ . '/Partials/Template/header.php';
?>

<div class="container row">
    <?php
        foreach($products as $product):
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
                            <br>
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
                            <?php echo "{$product->getPrice()}";
                            ?>
                        </p>
                        <?php 
                            if(get_class($product) == "Toy")
                            {
                        ?>
                            <p>
                                <strong> Material: </strong>
                                <br>
                                <?php echo "{$product->getMaterial()}";
                                ?>
                            </p> 
                            <p>
                                <strong> Model: </strong>
                                <br>
                                <?php echo "{$product->getModel()}";
                                ?>
                            </p>
                            <p>
                                <strong> Type: </strong>
                                <br>
                                <?php echo "{$product->getType()}";
                                ?>
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
        endforeach;
        include __DIR__ . '/Partials/Template/footer.php';
        ?>
</div>