<?php
	session_start();
	if (isset($_GET['uid'])) {
		setcookie("uid", $_GET['uid'], time() + 36000);
		setcookie("first_name", $_GET['first_name'], time() + 36000);
		setcookie("last_name", $_GET['last_name'], time() + 36000);
		setcookie("photo", $_GET['photo'], time() + 36000);
	}
	if (isset($_POST['status'])) $_SESSION['status'] = $_POST['status'];
	$startFrom = $_SESSION['status'];
	
	if ($startFrom == "not_authorized") {
		setcookie("uid", null, time() + 36000);
		echo "asdasdasdad";
	}

?>

<!DOCTYPE html>
<html>
<head>

    <script type="text/javascript" src="//vk.com/js/api/openapi.js?143"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="true">

    <meta name="description" content="">

    <title>Заголовок сайта</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.min.css">

    <script type="text/javascript">
        VK.init({apiId: 5965004});
    </script>
    <div id="vk_auth"></div>
    <script type="text/javascript">
		$(document).ready(function() { 

 
        VK.Widgets.Auth("vk_auth", {authUrl: 'account.php'});

        VK.Auth.getLoginStatus(function (response) {
            if (response.session) {
                var uid = response.session.mid;
                //alert(uid);
                $.ajax({
                    url: "account.php",
                    type: "POST",
                    data: {id: uid},
                    success: function (response) {
                        //alert("Good");
                    }
                });
            } else {
                $.ajax({
                    url: "t.php",
                    type: "POST",
                    data: {id: null},
                    success: function (response) {
                        //alert("Not Good");
                    }
                });

            }
        });});
    </script>

    <script src="https://connect.soundcloud.com/sdk/sdk-3.1.2.js"></script>
</head>

<body>


<?php
 
	include_once("bd.php");
	echo $_COOKIE["uid"];
    echo $_COOKIE["pass"];

 
	if($_COOKIE["uid"] != null) {
        authorization($_COOKIE["uid"]);
        print("
        <form method='POST' action='account.php'>
            <input type='submit' value='Личный кабинет'>
        </form>
    ");

    }
    
	
?>

<main class="index-page">
    <div class="index-page__user-wrapper">
        <p class="index-page__login">
            <a class="index-page__login-link" href="#" data-toggle="modal" data-target="#modal-login">Войти</a>
        </p>
    </div>

    <div class="container index-page__wrapper">
        <h1 class="visually-hidden">Panda.wiki</h1>
        <p class="index-page__logo">
            <svg class="index-page__logo-svg">
                <use xlink:href="images/icon_sprite.svg#icon_logo"></use>
            </svg>
        </p>

        <form class="index-page__form-search" action="search.php" method="POST">
            <ul class="index-page__type type-list">
                <li class="type-list__item">
                    <input value="posts" class="visually-hidden type-list__filter" type="radio" name="posts" id="type-list__filter-text" checked>
                    <label class="type-list__filter-label type-list__filter-label--text" for="type-list__filter-text" title="Искать посты">
                        <span class="visually-hidden">Искать посты</span>
                        <svg class="type-list__filter-label-svg">
                            <use xlink:href="images/icon_sprite.svg#icon_type-post"></use>
                        </svg>
                    </label>
                </li>
                <li class="type-list__item">
                    <input class="visually-hidden type-list__filter" type="radio" name="posts" id="type-list__filter-image">
                    <label class="type-list__filter-label type-list__filter-label--image" for="type-list__filter-image" title="Искать картинки">
                        <span class="visually-hidden">Искать картинки</span>
                        <svg class="type-list__filter-label-svg">
                            <use xlink:href="images/icon_sprite.svg#icon_type-image"></use>
                        </svg>
                    </label>
                </li>
                <li class="type-list__item">
                    <input class="visually-hidden type-list__filter" value="video" type="radio" name="posts" id="type-list__filter-video">
                    <label class="type-list__filter-label type-list__filter-label--video" for="type-list__filter-video" title="Искать видео">
                        <span class="visually-hidden">Искать видео</span>
                        <svg class="type-list__filter-label-svg">
                            <use xlink:href="images/icon_sprite.svg#icon_post-yt"></use>
                        </svg>
                    </label>
                </li>
                <li class="type-list__item">
                    <input class="visually-hidden type-list__filter" type="radio" name="posts" id="type-list__filter-profile">
                    <label class="type-list__filter-label type-list__filter-label--profile" for="type-list__filter-profile" title="Искать пользователей и каналы">
                        <span class="visually-hidden">Искать пользователей и каналы</span>
                        <svg class="type-list__filter-label-svg">
                            <use xlink:href="images/icon_sprite.svg#icon_type-user"></use>
                        </svg>
                    </label>
                </li>
                <li class="type-list__item">
                    <input class="visually-hidden type-list__filter" type="radio" name="posts" id="type-list__filter-attached">
                    <label class="type-list__filter-label type-list__filter-label--attached" for="type-list__filter-attached" title="Искать музыку">
                        <span class="visually-hidden">Искать музыку</span>
                        <svg class="type-list__filter-label-svg">
                            <use xlink:href="images/icon_sprite.svg#icon_type-attachment"></use>
                        </svg>
                    </label>
                </li>
            </ul>

            <p class="index-page__text">The social search</p>

            <div class="index-page__search-wrapper">
                <p class="index-page__search">
                    <input name="text" class="index-page__search-input" type="text" placeholder="Что мы ищем сегодня?">
                </p>
                <p class="index-page__search-btn">
                    <button class="index-page__search-submit" type="submit">
                        <span class="visually-hidden">Поиск</span>
                        <svg class="index-page__search-svg">
                            <use xlink:href="images/icon_sprite.svg#icon_search"></use>
                        </svg>
                    </button>
                </p>
            </div>

            <ul class="index-page__social-list social-list">
                <li class="social-list__item">
                    <input class="visually-hidden social-list__input" type="checkbox" id="index-page__social-vk" checked>
                    <label class="social-list__link social-list__link--vk social-list__link--input" for="index-page__social-vk" title="Искать в Вконтакте">
                        <span class="visually-hidden">Вконтакте</span>
                        <svg class="social-list__svg">
                            <use xlink:href="images/icon_sprite.svg#icon_post-vk"></use>
                        </svg>
                    </label>
                </li>
                <li class="social-list__item">
                    <input class="visually-hidden social-list__input"  type="checkbox" id="index-page__social-youtube" checked>
                    <label class="social-list__link social-list__link--youtube social-list__link--input" for="index-page__social-youtube" title="Искать в YouTube">
                        <span class="visually-hidden">YouTube</span>
                        <svg class="social-list__svg">
                            <use xlink:href="images/icon_sprite.svg#icon_post-yt"></use>
                        </svg>
                    </label>
                </li>
                <li class="social-list__item">
                    <input class="visually-hidden social-list__input" type="checkbox" id="index-page__social-fb" checked>
                    <label class="social-list__link social-list__link--fb social-list__link--input" for="index-page__social-fb" title="Искать в Facebook">
                        <span class="visually-hidden">Facebook</span>
                        <svg class="social-list__svg">
                            <use xlink:href="images/icon_sprite.svg#icon_post-fb"></use>
                        </svg>
                    </label>
                </li>
                <li class="social-list__item">
                    <input class="visually-hidden social-list__input" type="checkbox" id="index-page__social-tw" checked>
                    <label class="social-list__link social-list__link--tw social-list__link--input" for="index-page__social-tw" title="Искать в Twitter">
                        <span class="visually-hidden">Twitter</span>
                        <svg class="social-list__svg">
                            <use xlink:href="images/icon_sprite.svg#icon_post-tw"></use>
                        </svg>
                    </label>
                </li>
                <li class="social-list__item">
                    <input class="visually-hidden social-list__input" type="checkbox" id="index-page__social-instagram" checked>
                    <label class="social-list__link social-list__link--instagram social-list__link--input" for="index-page__social-instagram" title="Искать в Instagram">
                        <span class="visually-hidden">Инстаграм</span>
                        <svg class="social-list__svg">
                            <radialGradient id="rg" r="150%" cx="-10%" cy="100%">
                                <stop stop-color="#fdf497" offset="0" />
                                <stop stop-color="#fdf497" offset="0.05" />
                                <stop stop-color="#fd5949" offset="0.45" />
                                <stop stop-color="#d6249f" offset="0.6" />
                            </radialGradient>
                            <use xlink:href="images/icon_sprite.svg#icon_post-ig"></use>
                        </svg>
                    </label>
                </li>
            </ul>
        </form>
    </div>
</main>

<footer class="index-footer">
    <ul class="index-footer__menu">
        <li class="index-footer__item">
            <a class="index-footer__link" href="#">Справка</a>
        </li>
        <li class="index-footer__item">
            <a class="index-footer__link" href="#">Правила</a>
        </li>
        <li class="index-footer__item">
            <a class="index-footer__link" href="#">Блог</a>
        </li>
        <li class="index-footer__item index-footer__item--dropdown">
            <button class="index-footer__link index-footer__link--lang" type="button" id="index-page__language-button">Язык</button>

            <ul class="index-footer__language-list language-list" id="index-page__language-list">
                <li class="language-list__item">
                    <a class="language-list__link" href="#">En&nbsp;—&nbsp;Английский</a>
                </li>
                <li class="language-list__item">
                    <a class="language-list__link">Ru&nbsp;—&nbsp;Русский</a>
                </li>
            </ul>
        </li>
    </ul>
</footer>

<?php require_once 'html_blocks/login.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="js/script.js"></script>


</body>
</html>