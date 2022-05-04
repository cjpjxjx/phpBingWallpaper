<?php
    $str = file_get_contents('https://cn.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1');
    $array = json_decode($str);
    $imgurl = $array->{"images"}[0]->{"urlbase"};
    $imgurl = 'https://cn.bing.com'.$imgurl.'_1920x1080.jpg';
if($imgurl){
    header('Content-Type: image/JPEG');
        @ob_end_clean();
        @readfile($imgurl);
        @flush();
        @ob_flush();
    exit();
    }
    else{
        exit('error');
    }
?>
