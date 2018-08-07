<?php
	session_start();
	if (isset($_GET['uid'])) {
		setcookie("uid", $_GET['uid'], time() + 36000);
		setcookie("first_name", $_GET['first_name'], time() + 36000);
		setcookie("last_name", $_GET['last_name'], time() + 36000);
		setcookie("photo", $_GET['photo'], time() + 36000);
	}
if (isset($_POST['uid'])) {
    setcookie("uid", $_POST['uid'], time() + 36000);
    setcookie("first_name", $_POST['first_name'], time() + 36000);
    setcookie("last_name", $_POST['last_name'], time() + 36000);
    setcookie("photo", $_POST['photo'], time() + 36000);
    setcookie("pass", $_POST['pass'], time() + 36000);
}
	if (isset($_POST['status'])) $_SESSION['status'] = $_POST['status'];
	$startFrom = $_SESSION['status'];
	
	if ($startFrom == "not_authorized") {
		setcookie("uid", null, time() + 36000);
	}

?>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Личный кабинет</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <link rel="stylesheet" href="css/style.min.css">
	</head>

    <div id="PesonMore">
        <div id="NamePerson">
            <span><?php print ($_COOKIE["first_name"]." ".$_COOKIE["last_name"] ); ?></span>
            <img src=" <?php print ($_COOKIE["photo"] ); ?> "  >
            
        </div>
    </div>
    
    </div>

    <div class="page__post-filter btn-group">
        <div class="posts">
         
		<?php

			print("	
				<form method='POST' action='index.php'>
					<input type='submit' value='главная'>
				</form>
			");
			include_once("bd.php");
            authorization($_COOKIE["uid"]);
			$uid = $_COOKIE["uid"];	
			echo $uid;
			
			$sql = search_video($uid);
			while ($result = mysqli_fetch_array($sql)) {
					$url_video =  $result['player'];
					print("	
							<div id='video12'>
								<iframe src='$url_video' frameborder='0' allowfullscreen></iframe>									  
							</div>
					");
				}
			$sql = search_post($uid);
			$i = 0;
			while ($result = mysqli_fetch_array($sql)) {
			     $i++;
				 $id_post =  $result['id_post'];
				 $id_user =  $result['id_user'];
				 $id_photo =  $result['id_photo'];
				 if($id_photo != null)
					$id_photo =  ("<img src='". $result['id_photo']."' >");
				 $text =  $result['texts'];
				 $url_photo =  $result['url_photo'];
				 $name =  $result['name'];
				 $urlId =  $result['urlId'];
				 $like =  $result['like'];
				 $reposts =  $result['reposts'];
				 $views =  $result['views'];
				 $date_mas =  $result['dates'];

				
					print("
                    <article class=\"thumbnail posts__item post post--vk\" data-toggle=\"modal\" data-target=\"#modal-vk$i\" tabindex=\"0\">
					  <header class=\"post__header\">
						<div class=\"post__title-wrapper\">
						  <h2 class=\"post__title\">" . $name . "</h2>
						  <span class=\"post__sub-title\">".$date_mas."</span>
						</div>
						<div class=\"post__title-logo\">
						  <img src=" . $url_photo . "  alt=" . $name . ">
						</div>
					  </header>
					
					  <p class=\"post__media\">
						" . $id_photo . "
					  </p>

					  <p class=\"post__text\"> " . $text . "</p>

					  <div class=\"post__actions\">
					  <a class=\"post__flag\" href=\"#\"><span class=\"visually-hidden\">Перейти в соц. сеть</span></a>
						<ul class=\"post__social-list\">
						  <li class=\"post__social-item\">
							<span class=\"post__link post__link--like-vk\" href=\"#\">".$like."</span>
						  </li>
						  <li class=\"post__social-item\">
							<span class=\"post__link post__link--repost-vk\">	".$reposts."</span>
						  </li>
						  <li class=\"post__social-item\">
							<span class=\"post__link-view-social\">".$views."</span>
						  </li>
						</ul>

						<ul class=\"post__actions-list\">
						  <li class=\"post__actions-item\">
							<a class=\"post__link-share\" href=\"#\" title=\"Сделать репост на своей стене\"><span class=\"visually-hidden\">Сделать репост на своей стене</span></a>
						  </li>
						  <li class=\"post__actions-item\">
							<a class=\"post__link-save\" href=\"#\" title=\"Сохранить пост в своём аккаунте\"><span class=\"visually-hidden\">Сохранить пост в своём аккаунте</span></a>
						  </li>
						</ul>
					  </div>

					</article>
					
					<div class=\"modal fade modal--vk\" id=\"modal-vk$i\">
					    <div class=\"modal-dialog modal-lg\">
					      <div class=\"modal-content\">
					        <div class=\"modal-body\">
					          
					          <div class=\"modal-body__title-wrapper\">
					
					            <div class=\"modal-body__title-text\">
					              <span class=\"modal-body__title\">
					                <a href='https://vk.com/".$urlId."'>" . $name . "</a>
					              </span>
					              <span class=\"modal-body__sub-title\">
					                <a href=\"#\">".$date_mas."</a>
					              </span>
					            </div>
					
					            <div class=\"modal-body__title-logo\">
					            	<img src=" . $url_photo . "  alt=" . $name . ">
					            </div>
					          </div>
					
					          <div class=\"modal-body__media\">
					            " . $id_photo . "
					          </div>
					
					          <div class=\"modal-body__text\">" . $text . "</div>
					
					          <div class=\"modal-body__bottom\">
					            <ul class=\"post__social-list\">
						  <li class=\"post__social-item\">
							<a class=\"post__link post__link--like-vk\ href=\"#\"><span class=\"post__link-text\">Нравится</span>".$like."</a>
						  </li>
						  <li class=\"post__social-item\">
							<a class=\"post__link post__link--repost-vk\" ><span class=\"post__link-text\">Поделиться</span>".$reposts."</a>
						  </li>

						  <li class=\"post__social-item dropup\">
                <a class=\"dropdown-toggle post__link post__link--more-vk\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" tabindex=\"0\">Ещё <span class=\"caret\"></span></a>

							<ul class=\"dropdown-menu\">
							  <li><a href=\"#\">Пожаловаться</a></li>
							  <li><a href=\"#\">Подписаться на комментарии</a></li>
							</ul>
						  </li>
						  <li class=\"post__social-item\">
							<span class=\"post__link-view-social\">".$views."</span>
						  </li>
						</ul>
					
					            <ul class=\"post__actions-list\">
					              <li class=\"post__actions-item\">
					                <a class=\"post__link-share\" href=\"####\" title=\"Сделать репост на своей стене\"><span class=\"visually-hidden\">Сделать репост на своей стене</span></a>
					              </li>
					              <li class=\"post__actions-item\">
					                <a class=\"post__link-save\" href=\"#123\" title=\"Сохранить пост в своём аккаунте\"><span class=\"visually-hidden\">Сохранить пост в своём аккаунте</span></a>
					              </li>
					            </ul>
					          </div>
					
					          <div class=\"modal-body__comments\">
					            <div class=\"modal-body__comments-header comments-header\">
					              <p class=\"comments-header__text\">135 комментариев</p>
					              <a class=\"btn-order comments-header__order\" href=\"#\"><span class=\"visually-hidden\">Показать в обратном порядке</span></a>
					              <!-- <a class=\"btn-order btn-order--reverse comments-header__order\" href=\"#\"><span class=\"visually-hidden\">Показать в обратном порядке</span></a> -->
					            </div>
					
					            <div class=\"modal-body__comments-item comment\">
					              <div class=\"comment__author\">
					                <a href=\"#\">Келвин Шмелвин</a>
					              </div>
					
					              <a class=\"comment__author-photo\" href=\"#\">
					                <img src=\"https://blog.mann-ivanov-ferber.ru/wp-content/uploads/2015/06/%D0%9F%D0%BE%D1%80%D1%82%D1%80%D0%B5%D1%82.jpg\" width=\"40\" height=\"40\">
					              </a>
					
					              <div class=\"comment__text\">Думаю, что пишу, и пишу, что думаю</div>
					
					              <div class=\"comment__info\">
					                <a class=\"comment__time\" href=\"#\">32 минуты назад</a>
					
					                <a class=\"comment__reply\" href=\"#\">Ответить</a>
					
					                <a class=\"comment__like\" href=\"#\"><span class=\"visually-hidden\">Нравится</span>11</a>
					              </div>
					            </div>
					          </div>
					
					          <div class=\"modal-body__reply post-reply\">
					            <a class=\"post-reply__author-photo\" href=\"#\">
					              <img src=\"https://pp.userapi.com/c630021/v630021100/ff53/N0vc4WSotm0.jpg\" width=\"28\" height=\"28\">
					            </a>
					
					            <textarea class=\"post-reply__input\" rows=\"1\" placeholder=\"Написать комментарий...\"></textarea>
					          </div>
					
					          <div class=\"modal-body__reply-control reply-control\">
					            <ul class=\"reply-control__list\">
					              <li class=\"reply-control__item\">
					                <a class=\"reply-control__link reply-control__link--photo\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Фотография\">
					                  <span class=\"visually-hidden\">Фотография</span>
					                </a>
					              </li>
					              <li class=\"reply-control__item\">
					                <a class=\"reply-control__link reply-control__link--video\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Видеозапись\">
					                  <span class=\"visually-hidden\">Видеозапись</span>
					                </a>
					              </li>
					              <li class=\"reply-control__item\">
					                <a class=\"reply-control__link reply-control__link--audio\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Аудиозапись\">
					                  <span class=\"visually-hidden\">Аудиозапись</span>
					                </a>
					              </li>
					              <li class=\"reply-control__item\">
					                <a class=\"reply-control__link reply-control__link--doc\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Документ\">
					                  <span class=\"visually-hidden\">Документ</span>
					                </a>
					              </li>
					            </ul>
					
					            <div class=\"reply-control__actions\">
					              <button class=\"btn reply-control__btn-cancel\">Отмена</button>
					              <a class=\"btn reply-control__btn-send\" href=\"#\">Отправить</a>
					            </div>
					          </div>
					
					          <a class=\"modal-body__flag\" href=\"#\"></a>
					
					          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
					
					          <button class=\"btn-arrow btn-arrow--prev\" type=\"button\"><span class=\"visually-hidden\">Предыдущий пост</span></button>
					          <button class=\"btn-arrow btn-arrow--next\" type=\"button\"><span class=\"visually-hidden\">Следующий пост</span></button>
					        </div>
					      </div>
					    </div>
					  </div>

					");
				
			}
		?>

            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
	</body>
</html>