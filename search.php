<?php
	session_start();
	$_SESSION['s_type'] = $_POST['posts'];
	$_SESSION['s_text'] = $_POST['text'];
	$_SESSION['s_last_name'] = $_POST['last_name'];
	$_SESSION['s_first_name'] = $_POST['first_name'];
	$_SESSION['s_access_token'] = "5bc45a017b2b4143fac835f85010fee7cb286ffd2698ae0cb750a8e43ab21c289466a772ee1b1506deeda";
	$_SESSION['s_access_token_youtube'] = "AIzaSyDq9g7EfYCwjLXo6Z0Dfrzs5LMXb_ZVaFY";
	
	
	include_once("method.php");
	include_once("bd.php");
	include_once("controller/PostController.php");
	include_once("controller/VideoController.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="true">

    <meta name="description" content="">

    <?php $text = $_SESSION['s_text'];?>
    <title><?php echo($_SESSION['s_type'].' '.$text) ?> </title>


    <!-- <link rel="stylesheet" href="css/normalize.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.min.css">


</head>

<body>


<header class="_page-header">
    <div class="_container">
        <div class="page-header__wrapper">
            <a class="page-header__logo">
                <img src="http://via.placeholder.com/150x40" alt="Логотип">
            </a>

            <div class="dropdown page-header__search">
                <input class="dropdown-toggle" type="text" id="dropdownMenu-search" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" placeholder="Пишите #хэштег">

                <ul class="dropdown-menu" aria-labelledby="dropdownMenu-search">
                    <li class="dropdown-header">Заголовок блока 1</li>
                    <li><a href="#">Результат 1</a></li>
                    <li><a href="#">Результат 2</a></li>
                    <li><a href="#">Результат 3</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Заголовок блока 2</li>
                    <li><a href="#">Автор 1</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>


<div class="page">
    <div class="container">
        <div class="page__title-wrapper">
            <h1 class="page__title">Заголовок сайта</h1>

            <div class="page__post-filter btn-group">
                <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Выбрать соц. сеть <span class="caret"></span>
                </button>

                <ul class="dropdown-menu">
                    <li><a href="#">Вконтакте</a></li>
                    <li><a href="#">Фейсбук</a></li>
                    <li><a href="#">Твиттер</a></li>
                    <!-- <li role="separator" class="divider"></li> -->
                    <li><a href="#">Ютуб</a></li>
                    <li><a href="#">Инстаграм</a></li>
                    <li><a href="#">Гугл +</a></li>
                </ul>
            </div>

            <div class="page__post-filter btn-group">
                <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Тип записи <span class="caret"></span>
                </button>

                <ul class="dropdown-menu">
                    <li><a href="#">Текстовая</a></li>
                    <li><a href="#">Фото</a></li>
                    <li><a href="#">Видео</a></li>
                    <!-- <li role="separator" class="divider"></li> -->
                    <li><a href="#">Аудио</a></li>
                </ul>
            </div>
        </div>
		<div class="_page__post-filter _btn-group">
				  <div class="posts" id="posts">
      
	
		
		<?php
			$uid = $_COOKIE["uid"];
			echo $uid;
            echo $text = $_SESSION['s_text'];
			$type = $_SESSION['s_type'];
			$access_token = $_SESSION['s_access_token'];
			$access_token_youtube = $_SESSION['s_access_token_youtube'];
			
			if ($uid != null) {
				print("
							<form method='POST' action='account.php'>
								<input type='submit' value='личный каинет'>
							</form>
						");
			}
			
			history($text, $type, $uid);
			
			
			if (($text != '' && $type == "posts")) {
				
				$text = str_replace(" ", "%20", $text);
				$text = str_replace("#", "%23", $text);
				$post = new PostController();
				$post->createPost($text, $access_token, $access_token_youtube);
				
			} else if (($text != '' && $type == "video")) {
				//Ютуб
				$VideoControl = new VideoController();
				$VideoYoutube = $VideoControl->GetYouTubeVideo($text, $access_token_youtube);
				$_SESSION['nextPageToken'] = $VideoArray->nextPageToken;
				//vk
				$VideoVK = $VideoControl->GetVKVideo($text, $access_token);
				$VideoControl->PrintVideo($VideoYoutube, $VideoVK, $access_token);
			} else if ((/*$text !='' &&*/
				$type == "human")) {
				$last_name = $_SESSION['s_last_name'];
				$first_name = $_SESSION['s_first_name'];
				if ($last_name != null && $first_name != null) {
					$q = $last_name . '%20' . $first_name;
				} else if ($last_name != null && $first_name == null) {
					$q = $last_name;
				} else if ($last_name == null && $first_name != null) {
					$q = $first_name;
				}
				
				$result = users_search($q, 392, 5.63, $access_token, 0);
				
				
				for ($i = 0; $i < sizeof($result->response->items); $i++) {
					$id_user = $result->response->items[ $i ]->id;
					$url_photo = $result->response->items[ $i ]->photo_200;
					$first_name = $result->response->items[ $i ]->first_name;
					$last_name = $result->response->items[ $i ]->last_name;
					if ($url_photo != null) {
						print("
									<div class='user'>
										<a href='https://vk.com/id$id_user'>
											<div class='user_photo' >
												<img src='$url_photo' style='display: inline-block;'>
												<span class='unfo_user' style='position: absolute;'>$first_name $last_name<span>
											</div>
										</a>
									</div>
								");
					}
				}
				
			} else {
				echo "Информация не найдена, попробйте ввести другой текст";
			}
		?>
		</div>
</div>

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="js/script.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>