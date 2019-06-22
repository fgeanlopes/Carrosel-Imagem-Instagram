<!doctype html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Carousel Instagram My Website by: fgealopes</title>

<!--    style plugim owl carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">

<!--    style plugim owl carousel the default-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

<!--    style my carousel instagram-->
    <link rel="stylesheet" href="css/syle.css">

</head>

<body>

<?php
//data Instagram

//acesse token
$access_token = '958322953.f7323d7.611e202de1d0490ba068b7421fab7d5c';

//user_id_acess_token
$number_of_user_id = '958322953';

//choose a number from 1 to 20 to list
$number_of_photos = 10;

$result = file_get_contents("https://api.instagram.com/v1/users/$number_of_user_id/media/recent/?access_token=$access_token&count=$number_of_photos");

//converts it to a PHP variable
$result = json_decode($result);

?>

<div class="container">
<!--    forming the carousel-->
    <div class="feed_instagram owl-carousel owl-theme">
        <?php foreach ($result->data as $post_instagram): ?>
            <?php
            // search the path of imagens

            //path of imagens
            $insegura = $post_instagram->images->standard_resolution->url;

            //path of post link
            $url_post = $post_instagram->link;

            //path of post likes number
            $likes_post = $post_instagram->likes->count;

            //path of post comments number
            $comments_post = $post_instagram->comments->count;

            // transforms the path of images to http and https
            $segura = preg_replace("/^http:/i", "https:", $insegura);
            ?>

            <a class="hover_img" href="<?php echo $url_post ?>" target="_blank">
                <div class="content_img">
                    <!--Image Instagram-->
                    <img src="<?php echo $segura; ?>">

                    <div class="box_icones">
                        <!--icon likes-->
                        <div class="iten_icon">
                            <img src="likes.svg">
                        <!--number likes-->
                            <p><?php echo $likes_post ?></p>
                        </div>
                        <div class="iten_icon">
                        <!--icon comments-->
                            <img src="comments.svg">
                        <!--number commets-->
                            <p><?php echo $comments_post ?></p>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach ?>
    </div>
</div>
<!--Add jquery-->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!--Add js owl carousel-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<!--add my js-->
<script src="app.js"></script>

</body>
</html>