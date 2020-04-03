<?php 
/* 
plugin name: whatsapp eklentim
plugin uri: http//www.dotnetmcy.com/
description: whatsapp eklendim.
version: 0.1
author: Mehmet Cenk Yenikoylu
author uri: http//www.dotnetmcy.com/
*/

add_action("admin_menu","whatsappEklentim");
function whatsappEklentim(){
    add_menu_page("Eklenti Basligim", "Eklenti Adim", "manage_options", "eklenti-linkim","eklenti_icerigim");
}
function eklenti_icerigim(){
    echo "merhaba";
}

add_action("wp_head","whatsappButtonu");
function whatsappButtonu(){

    $pluginUrlPath = plugin_dir_url(__FILE__);
    ?>
    <link rel="stylesheet" href="<?php echo $pluginUrlPath."assets/tasarim.css" ?>">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <a href="https://wa.me/905302048527" target="blank" class="button">
        <i class="fa fa-whatsapp">
    </a>
<?php
}


?>