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

    $post_tel = get_post_meta(2,"whatsapp_telefon",true);
    $post_msg = get_post_meta(3,"whatsapp_mesaj",true);

    ?>
<form method="post"> 
    <label>Telefon Numarasi</label></br>
    <input type="number" name="telefon" value="<?php echo $post_tel; ?>"></br>
    <label>Mesaj Iceriginiz</label></br>
    <input type="text" name="mesaj" value="<?php echo $post_msg; ?>"></br>
    <input type="submit">
</form>
    <?php

    $tel = $_POST["telefon"];
    $msg = $_POST["mesaj"];

    // add_post_meta(2,"whatsapp_telefon",$tel,true);
    // add_post_meta(3,"whatsapp_mesaj",$msg,true);

    
    if($_POST){
        if ($post_tel != $tel) {
            update_post_meta(2,"whatsapp_telefon",$tel,$post_tel,true);
            
        } else {
            //add_meta_post(2,"whatsapp_telefon",$tel,true);
        }
        if ($post_msg != $msg) {
            update_post_meta(3,"whatsapp_mesaj",$msg,$post_msg,true);
        } else {
            //add_meta_post(3,"whatsapp_mesaj",$msg,true);
        }
     }
    

}

add_action("wp_head","whatsappButtonu");
function whatsappButtonu(){

    $pluginUrlPath = plugin_dir_url(__FILE__);

    $post_tel = get_post_meta(2,"whatsapp_telefon",true);
    $post_msg = get_post_meta(3,"whatsapp_mesaj",true);

    ?>
    <link rel="stylesheet" href="<?php echo $pluginUrlPath."assets/tasarim.css" ?>">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <a href="https://wa.me/<?php echo $post_tel; ?>?text=<?php echo $post_msg; ?>" target="blank" class="button">
        <i class="fa fa-whatsapp">
    </a>
<?php
}


?>