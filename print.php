<?php

include 'inc/portal.php';

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'GET' ) {

    $sales_id = $_GET[ 'sales_id' ];
    $sql = "SELECT i.sales_id, i.fullname, i.product_name, i.product_price, i.product_quantity, i.amount_paid, i.amount_owing, i.customer_name, i.payment_type, i.timestamp FROM sales i
     WHERE i.sales_id  = '$sales_id'";

    // $sql = "SELECT * FROM sales WHERE sales_id = '$sales'"
    $orderResult = $conn->query( $sql );

    $orderdata = $orderResult->fetch_array();

    $sales_id = $orderdata[ 0 ];
    $fullname = $orderdata[ 1 ];
    $product_name = $orderdata[ 2 ];
    $product_price = $orderdata[ 3 ];
    $product_quantity = $orderdata[ 4 ];
    $amount_paid = $orderdata[ 5 ];
    $amount_owing = $orderdata[ 6 ];
    $customer_name = $orderdata[ 7 ];
    $payment_type = $orderdata[ 8 ];
    $timestamp = $orderdata[ 9 ];

    // include 'header.php';

    ?>

<!DOCTYPE html>
<html lang='en'>

<meta http-equiv='content-type' content='text/html;charset=UTF-8' /><!-- /Added by HTTrack -->

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content='Responsive Bootstrap 5 Admin &amp; Dashboard Template'>
    <meta name='author' content='Bootlab'>

    <title>Invoice | AppStack - Admin &amp;
        Dashboard Template</title>

    <link rel='canonical' href='pages-invoice.html' />
    <link rel='shortcut icon' href='img/favicon.ico'>

    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap' rel='stylesheet'>

    <!-- Choose your prefered color scheme -->
    <!-- <link href = 'css/light.css' rel = 'stylesheet'> -->
    <!-- <link href = 'css/dark.css' rel = 'stylesheet'> -->

    <!-- BEGIN SETTINGS -->
    <!-- Remove this after purchasing -->
    <link href='css/light.css' rel='stylesheet'>
</head>
<!--
    HOW TO USE:
    data-theme: default ( default ), dark, light
    data-layout: fluid ( default ), boxed
    data-sidebar-position: left ( default ), right
    data-sidebar-behavior: sticky ( default ), fixed, compact
    -->

<body data-theme='default' data-layout='fluid' data-sidebar-position='left' data-sidebar-behavior='sticky'>
    <div class='wrapper'>

        <main class='content'>
            <div class='container-fluid p-0'>

                <h1 class='h3 mb-3'>Invoice</h1>

                <div class='row'>
                    <div class='col-12'>
                        <div class='card'>
                            <div class='card-body m-sm-3 m-md-5'>
                                <!-- <div class = 'mb-4'>
    Hello <strong>Chris Wood</strong>,
    <br /> This is the receipt for a payment of <strong>$268.00</strong> ( USD ) you made to AppStack.
    </div> -->

                                <div class='row'>
                                    <!-- <div class = 'col-md-6'>
    <div class = 'text-muted'>Payment No.</div>
    <strong>741037024</strong>
    </div> -->
                                    <div class='col-md-6 text-md-right'>
                                        <div class='text-muted'>Payment Date</div>
                                        <strong>June 2, 2022 - 03:45 pm</strong>
                                    </div>
                                </div>

                                <hr class='my-4' />

                                <div class='row mb-4'>
                                    <div class='col-md-6'>
                                        <div class='text-muted'>Client</div>
                                        <strong>
                                            Chris Wood
                                        </strong>
                                        <p>
                                            4183 Forest Avenue <br> New York City <br> 10011 <br> USA <br>
                                            <a href='#'>
                                                chris.wood@gmail.com
                                            </a>
                                        </p>
                                    </div>
                                    <div class='col-md-6 text-md-right'>
                                        <div class='text-muted'>Payment To</div>
                                        <strong>
                                            AppStack LLC
                                        </strong>
                                        <p>
                                            354 Roy Alley <br> Denver <br> 80202 <br> USA <br>
                                            <a href='#'>
                                                info@appstack.com
                                            </a>
                                        </p>
                                    </div>
                                </div>

                                <table class='table table-sm'>
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Quantity</th>
                                            <th class='text-end'>Amount</th>
                                        </tr>
                                    </thead>
                                    <!-- <tbody>
    <tr>
    <td>AppStack Theme Customization</td>
    <td>2</td>
    <td class = 'text-end'>$150.00</td>
    </tr>
    <tr>
    <td>Monthly Subscription </td>
    <td>3</td>
    <td class = 'text-end'>$25.00</td>
    </tr>
    <tr>
    <td>Additional Service</td>
    <td>1</td>
    <td class = 'text-end'>$100.00</td>
    </tr>
    <tr>
    <th>&nbsp;
    </th>
    <th>Subtotal </th>
    <th class = 'text-end'>$275.00</th>
    </tr>
    <tr>
    <th>&nbsp;
    </th>
    <th>Shipping </th>
    <th class = 'text-end'>$8.00</th>
    </tr>
    <tr>
    <th>&nbsp;
    </th>
    <th>Discount </th>
    <th class = 'text-end'>5%</th>
    </tr>
    <tr>
    <th>&nbsp;
    </th>
    <th>Total </th>
    <th class = 'text-end'>$268.85</th>
    </tr>
    </tbody> -->

                                    <?php
    $x = 1;

    $orderResult = $conn->query( $sql );
    while ( $row = $orderResult->fetch_array() ) {

        ?>

                                    <tr>
                                        <!--<td class = 'text-center'><?php echo $x ?></td>-->
                                        <td class='text-center'>
                                            <?php echo $row[ 9 ] ?>
                                        </td>
                                        <td class='text-end'>
                                            <?php echo $row[ 3 ] ?>
                                        </td>
                                        <td class='text-end'>
                                            <?php echo $row[ 2 ] ?>
                                        </td>
                                        <td class='text-end'>
                                            <?php echo $row[ 4 ] ?>
                                        </td>

                                    </tr>

                                    <?php $x++;
    }
    ?>

                                </table>

                                <div class='text-center'>
                                    <p class='text-sm'>
                                        <strong>Extra note:</strong> Please send all items at the same time to the
                                        shipping address. Thanks in advance.
                                    </p>

                                    <a href='#' class='btn btn-primary'>
                                        Print this receipt
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>

    </div>
    </div>

    <script src='js/app.js'></script>

</body>

</html>

<?php }
    ?>