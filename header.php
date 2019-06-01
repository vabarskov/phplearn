<?
include_once($_SERVER['DOCUMENT_ROOT'] . '/included.php');

?>
<!DOCTYPE html>
</pre>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="/styles.css" rel="stylesheet">
        <title>Project - ведение списков</title>
    </head>
    <body>
        <div class="header">
            <div class="logo"><img src="/i/logo.png" width="68" height="23" alt="Project"></div>
            <div class="clearfix"></div>
        </div>
        <div class="clear">
            <?echo menu\GetMenu($menuLinks);?>
        </div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td class="left-collum-index">
                    
                    <h1><?echo TitleFunctions\GetHeaderName($menuLinks);?></h1>
                    <p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
                    
                    
                </td>