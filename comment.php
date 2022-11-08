<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">


<?php

session_start();

$user_name_active=$_SESSION['user_name'];

echo $user_name_active;

$connection = mysqli_connect('localhost', 'root', '', 'test_db');

if ($connection) {
    echo "ok";
}

if (isset($_POST['comment-send'])) {
    echo "hiii";
    $value = $_POST['rate'];
    $comment = $_POST['comment'];
    echo $value;
    echo $comment;

    $request="UPDATE `users` SET `comment`='{$comment}' WHERE `user_name` ='{$user_name_active}'";
    
    mysqli_query($connection, $request);
    if ($value == 1) { ?>

<span class="fa fa-star rated" style="font-size:24px"></span>
<span class="fa fa-star " style="font-size:24px"></span>
<span class="fa fa-star " style="font-size:24px"></span>
<span class="fa fa-star " style="font-size:24px"></span>
<span class="fa fa-star " style="font-size:24px"></span>

<?php
    }

    ?>
<?php if ($value == 1.5) { ?>

<span class="fa fa-star rated" style="font-size:24px"></span>
<span class="fa fa-star-half rated " style="font-size:24px"></span>&nbsp
<span class="fa fa-star " style="font-size:24px"></span>
<span class="fa fa-star " style="font-size:24px"></span>
<span class="fa fa-star " style="font-size:24px"></span>

<?php
    }


    ?>
<?php if ($value == 2) { ?>

<span class="fa fa-star rated" style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>
<span class="fa fa-star " style="font-size:22px"></span>
<span class="fa fa-star " style="font-size:22px"></span>
<span class="fa fa-star " style="font-size:22px"></span>

<?php
    }


    ?>
<?php if ($value == 2.5) { ?>

<span class="fa fa-star rated" style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>
<span class="fa fa-star-half rated " style="font-size:24px"></span>&nbsp
<span class="fa fa-star " style="font-size:22px"></span>
<span class="fa fa-star " style="font-size:22px"></span>

<?php
    }


    ?>
<?php if ($value == 3) { ?>

<span class="fa fa-star rated" style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>
<span class="fa fa-star " style="font-size:22px"></span>
<span class="fa fa-star " style="font-size:22px"></span>

<?php
    }


    ?>
<?php if ($value == 3.5) { ?>

<span class="fa fa-star rated" style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>
<span class="fa fa-star-half rated " style="font-size:24px"></span>&nbsp
<span class="fa fa-star " style="font-size:22px"></span>

<?php
    }


    ?>
<?php if ($value == 4) { ?>

<span class="fa fa-star rated" style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>
<span class="fa fa-star " style="font-size:22px"></span>

<?php
    }


    ?>
<?php if ($value == 4.5) { ?>

<span class="fa fa-star rated" style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>
<span class="fa fa-star-half rated " style="font-size:24px"></span>&nbsp

<?php
    }


    ?>
<?php if ($value == 5) { ?>

<span class="fa fa-star rated" style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>
<span class="fa fa-star rated " style="font-size:24px"></span>

<?php
    }

}

    ?>