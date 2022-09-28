<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>

<div class="container">

<?php
if(have_posts()):
    while(have_posts()):
        the_post();
        echo '<div class="article">';
        ?>
        
        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>

        <?php 
        the_content();
        the_post_thumbnail();
        echo "</div>";

    endwhile;
endif;
?>

</div>
</body>
</html>