<?
$showForm = true;
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="styles.css" rel="stylesheet">
    <title>Project - ведение списков</title>
</head>

<body>

    <div class="header">
        <div class="logo"><img src="i/logo.png" width="68" height="23" alt="Project"></div>
        <div class="clearfix"></div>
    </div>

    <div class="clear">
        <ul class="main-menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#">Каталог</a></li>
        </ul>
    </div>

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="left-collum-index">
            
                <h1>Возможности проекта —</h1>
                <p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
                
            
            </td>
            <?if($_GET['login'] == 'yes'):?>
            <td class="right-collum-index">
                
                <div class="project-folders-menu">
                    <ul class="project-folders-v">
                        <li class="project-folders-v-active"><a href="#">Авторизация</a></li>
                        <li><a href="#">Регистрация</a></li>
                        <li><a href="#">Забыли пароль?</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <?                
                if ($_POST) {
                    include_once('include/logins.php');
                    include_once('include/passwords.php');
                    if (in_array($_POST['login'], $logins)) {
                        $loginKey = array_search(strip_tags($_POST['login']), $logins);
                        if ($passwords[$loginKey] == strip_tags($_POST['password'])) {
                            $success = true;
                        }
                    }
                    if ($success) {
                        include_once('include/success.php');
                    } else {
                        include_once('include/failure.php');
                        $lastLogin = $_POST['login'] ? strip_tags($_POST['login']) : '';
                        $lastPasword = $_POST['password'] ? strip_tags($_POST['password']) : '';
                    }
                }
                ?>
                <?if ($showForm):?>
                <div class="index-auth">
                    <form action="index_extra.php?login=yes" method="POST">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="iat">
                                    <label for="login_id">Ваш e-mail:</label>
                                    <input id="login_id" size="30" name="login" value="<?=$lastLogin?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="iat">
                                    <label for="password_id">Ваш пароль:</label>
                                    <input id="password_id" size="30" name="password" type="password" value="<?=$lastPasword?>">
                                </td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Войти"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <?endif;?>
            </td>
            <?endif;?>
        </tr>
    </table>
    
    <div class="clearfix">
        <ul class="main-menu bottom">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#">Каталог</a></li>
        </ul>
    </div>

    <div class="footer">&copy;&nbsp;<nobr>2018</nobr> Project.</div>

</body>
</html>