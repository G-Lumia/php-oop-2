<?php 
    include __DIR__ . '/Models/beds.php';
    include __DIR__ . '/Models/food.php';
    include __DIR__ . '/Models/toys.php';

    $products = array(
        new Bed('BelRiposino', 156.65 , 'dog', 'https://img.fruugo.com/product/5/39/480217395_max.jpg', 'Wool'),
        new Food('Edgard Cooper', 12.66 , 'cat', 
        'https://images.ctfassets.net/550nf1gumh01/5TEbNsdkNst3GI93jxWOE8/62f3d8fdb4486cedfd7b4926eae5eca7/EC_2022_Cat_Kibble_Chicken_Export?fm=webp&q=80&w=1500',
        8.5, 1200, 'sterilised'),
        new Toy('Carotina', 7.99 , 'dog', 'https://m.media-amazon.com/images/I/61qMwHJ+PvL._AC_SY300_SX300_.jpg', 'peluche', '3.0', 'Chewy')
    );
?>
