<?
$login = 'Aastor';
$password = 1729;
$showForm = true;
include_once('header.php');
?>



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
                    if ($_POST['login'] == $login && $_POST['password'] == $password) {
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
                    <form action="index.php?login=yes" method="POST">
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
<?include_once('footer.php');?>