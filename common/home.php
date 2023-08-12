<?php
include '/wamp/www/as2/common/header.php';
include '/wamp/www/as2/common/connection.php';
?>
<style>
    .registration-button{
        align-items: flex-end;
        width: max-content;
        height: 100px;
        width: 100px;
        margin-left: 30px;
        margin-top: 30px;
        border-radius: 50%;
        background: url(https://www.drupal.org/files/project-images/reg_confirm_email_with_button_0.png) center/cover no-repeat;
    }
</style>
</head>

<body>
    <div class="row d-flex align-items-center">
    <div class="registration-button"></div>
    <p style="text-align : center; align-items:center; padding-top : 35px; padding-left:20px;">Click here to Register on Motala Perfumes</p>
    </div>
    <div class="container">
        <div class="row">
            <?php
            // include_once 'db_connection.php';

            $sql = "SELECT * FROM product";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4 col-sm-12">';

                    $product_img = $row['img'];
                    $product_title = $row['name'];
                    $product_description = $row['description'];
                    $product_price = '$' . $row['price'];

                    include '/wamp/www/as2/common/product.php';

                    echo '</div>';
                }
            } else {
                echo "No products available.";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>

</html>
