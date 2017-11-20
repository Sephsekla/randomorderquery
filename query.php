<?php 

$args =array(

//Query Args (https://codex.wordpress.org/Class_Reference/WP_Query)

);


$my_query = new WP_query($args);

if($my_query -> have_posts()){

shuffle($my_query->posts); //Pseudo-random PHP function. Replaces 'orderby' => 'rand' for reduced database strain

while ($my_query -> have_posts()): $my_query -> the_post();

//DO LOOP CODE

endwhile;

}
