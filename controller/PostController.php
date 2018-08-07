<?php
	include_once "model/PostModel.php";
	
	class PostController extends Post
	{

		public function users_get($access_token)
		{
			$result = users_get($this->getIdUser(), "photo_50", 5.52, $access_token);
			if($result->response[0]->photo_50 == null)
				$this->setUrlPhoto("https://vk.com//images/camera_200.png");
			else
				$this->setUrlPhoto($result->response[0]->photo_50);

			$this->setName($result->response[0]->first_name . " " . $result->response[0]->last_name);
		}

		public function groups_getById($access_token)
		{
			$result = groups_getById($this->getIdUser(), 5.63, $access_token);

			if($result->response[0]->photo_50 == null)
				$this->setUrlPhoto("https://vk.com//images/camera_200.png");
			else
				$this->setUrlPhoto($result->response[0]->photo_50);

			$this->setName($result->response[0]->name);
		}


		public function getPostVk($u_info, $access_token, $i)
		{
			$this->setIdPost($u_info->response->items[ $i ]->id);
			$this->setIdUser($u_info->response->items[ $i ]->owner_id);
			$this->setUrlId("id" . $u_info->response->items[ $i ]->owner_id);
			$this->setIdPhoto($u_info->response->items[ $i ]->attachments[0]->photo->photo_604);
			$this->setText($u_info->response->items[ $i ]->text);
			$this->setDate(getdate($u_info->response->items[ $i ]->date));
			$this->setLike($u_info->response->items[$i]->likes->count);
			$this->setReposts($u_info->response->items[$i]->reposts->count);
			$this->setViews($u_info->response->items[$i]->views->count);
			$E = '_';

			if ($this->getIdUser() > 0) {
				$this->users_get($access_token);
			} else {
				$this->setUrlId("public" . abs($this->getIdUser()));
				$this->groups_getById($access_token);
			}
		}

		public function createPost($textSearch, $access_token, $access_token_youtube)
		{
            $u_info = google_plus_search('bmw', 2, null, $access_token_youtube);

            /*echo('токин '.$u_info->nextPageToken.'</br>');
            echo('_______________________________________');
            echo('ссылка на пост '.$u_info->items[0]->url.'</br>');
            echo('_______________________________________');
            echo('титле '.$u_info->title.'</br>');
            echo('_______________________________________');
            echo('дата '.$u_info->items[0]->published.'</br>');
            echo('_______________________________________');
            echo('имя пользователя '.$u_info->items[0]->actor->displayName.'</br>');
            echo('_______________________________________');
            echo('фото пользователя '.$u_info->items[0]->actor->image->url.'</br>');
            echo('_______________________________________');
            echo('конент '.$u_info->items[0]->object->content.'</br>');
            echo('_______________________________________');
            echo('ссылка на фото '.$u_info->items[0]->object->attachments[0]->url.'</br>');*/

            $displayName = $u_info->items[0]->actor->displayName;
            $published = $u_info->items[0]->published;
            $photoC = $u_info->items[0]->actor->image->url;
            $content = $u_info->items[0]->object->content;


            print ("            
            <article class=\"thumbnail posts__item post post--gp\" tabindex=\"0\">
                  <header class=\"post__header\">
                    <div class=\"post__title-wrapper\">
                      <h2 class=\"post__title\">$displayName</h2>
                      <span class=\"post__sub-title\">$published</span>
                    </div>
                    <div class=\"post__title-logo post__title-logo--gp\">
                      <img src='$photoC' alt='$displayName'>
                    </div>
                  </header>
                
        
                <p class=\"post__text\">$content</p>        
                  <div class=\"post__actions\">
                    <ul class=\"post__actions-list\">
                      <li class=\"post__actions-item\">
                        <a class=\"post__link-share\" href=\"#\" title=\"Поделиться\">
                  <span class=\"visually-hidden\">Поделиться</span>
                  <svg class=\"post__link-share-svg\">
                    <use xlink:href=\"images/icon_sprite.svg#icon_share\"></use>
                  </svg>
                </a>
                      </li>
                      <li class=\"post__actions-item\">
                        <a class=\"post__link-save\" href=\"#\" title=\"Сохранить в&nbsp;своём аккаунте\">
                  <span class=\"visually-hidden\">Сохранить в&nbsp;своём аккаунте</span>
                  <svg class=\"post__link-save-svg\">
                    <use xlink:href=\"images/icon_sprite.svg#icon_plus\"></use>
                  </svg>
                </a>
                      </li>
                    </ul>
                  </div>
        
                  <a class=\"post__flag\" href=\"#\" title=\"Посмотреть в&nbsp;соц. сети в&nbsp;отдельной кладке\" target=\"_blank\">
            <svg class=\"post__flag-svg\">
              <use xlink:href=\"images/icon_sprite.svg#icon_post-gp\"></use>
            </svg>
            <span class=\"visually-hidden\">Посмотреть в&nbsp;соц. сети в&nbsp;отдельной кладке</span>
          </a>
        </article>
    

            ");

		    $u_info = newsfeed_search($textSearch, 10, 0, 5.69, $access_token);


			for ($i = 0; $i < sizeof($u_info->response->items); $i++) {
			    $user_id = $_COOKIE["uid"];
				$this->getPostVk($u_info, $access_token, $i);
				$date_mas = $this->getDate();
				$IdUser = $this->getIdUser();
				$UrlPhoto =$this->getUrlPhoto();
				$Name = htmlspecialchars( str_replace(array("\r", "\n"), " ", $this->getName()));
				$IdPost = $this->getIdPost();
				$IdPhoto = $this->getIdPhoto();
				$Text = htmlspecialchars( str_replace(array("\r", "\n"), " ", $this->getText()));
				$UrlId = $this->getUrlId;
				$Like = $this->getLike;
				$Reposts = $this->getReposts();
				$Views = $this->getViews();

				$dates = $date_mas['mday'] . '.' . $date_mas['mon'] . '.' . $date_mas['year']. ' ' . $date_mas['hours']. ':' . $date_mas['minutes']. ':' . $date_mas['seconds'];
				if($Name != null)
				{
					print ("
						<article class=\"thumbnail posts__item post post--vk\" data-toggle=\"modal\" data-target=\"#modal-vk$i\" tabindex=\"0\">
						  <header class=\"post__header\">
							<div class=\"post__title-wrapper\">
							  <h2 class=\"post__title\">" . $this->getName() . "</h2>
							  <span class=\"post__sub-title\">".$date_mas['mday'] . '.' . $date_mas['mon'] . '.' . $date_mas['year']. ' ' . $date_mas['hours']. ':' . $date_mas['minutes']. ':' . $date_mas['seconds']."</span>
							</div>
							<div class=\"post__title-logo\">
							  <img src=" . $this->getUrlPhoto() . "  alt=" . $this->getName() . ">
							</div>
						  </header>
						
						  <p class=\"post__media\">
							<img src=" . $this->getIdPhoto() . " alt>
						  </p>

						  <p class=\"post__text\"> " . $this->getText() . "</p>

						  <div class=\"post__actions\">
						  <a class=\"post__flag\" href=\"#\"><span class=\"visually-hidden\">Перейти в соц. сеть</span></a>
							<ul class=\"post__social-list\">
							  <li class=\"post__social-item\">
								<span class=\"post__link post__link--like-vk\" href=\"#\">".$this->getLike()."</span>
							  </li>
							  <li class=\"post__social-item\">
								<span class=\"post__link post__link--repost-vk\">".$this->getReposts()."</span>
							  </li>
							  <li class=\"post__social-item\">
								<span class=\"post__link-view-social\">".$this->getViews()."</span>  $this->getIdUser(),

									

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
										<a href='https://vk.com/".$this->getUrlId()."'>" . $this->getName() . "</a>
									  </span>
									  <span class=\"modal-body__sub-title\">
										<a href=\"#\">".$date_mas['mday'] . '.' . $date_mas['mon'] . '.' . $date_mas['year']. ' ' . $date_mas['hours']. ':' . $date_mas['minutes']. ':' . $date_mas['seconds']."</a>
									  </span>
									</div>
						
									<div class=\"modal-body__title-logo\">
										<img src=" . $this->getUrlPhoto() . "  alt=" . $this->getName() . ">
									</div>
								  </div>
						
								  <div class=\"modal-body__media\">
									<img src=". $this->getIdPhoto() ." alt>
								  </div>
						
								  <div class=\"modal-body__text\">" . $this->getText() . "</div>
						
								  <div class=\"modal-body__bottom\">
									<ul class=\"post__social-list\">
							  <li class=\"post__social-item\">
								<a class=\"post__link post__link--like-vk\ href=\"#\"><span class=\"post__link-text\">Нравится</span>".$this->getLike()."</a>
							  </li>
							  <li class=\"post__social-item\">
								<a class=\"post__link post__link--repost-vk\" 	 onclick=\"AjaxFormPost('$IdUser', '$UrlPhoto', '$Name', '$IdPost', '$IdPhoto', '$Text',
						'posts', '$user_id', '$UrlId', '$Like', '$Reposts', '$Views', '$dates');\"><span class=\"post__link-text\">Поделиться</span>".$this->getReposts()."</a>
							  </li>
							  <li class=\"post__social-item dropup\">
					<a class=\"dropdown-toggle post__link post__link--more-vk\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" tabindex=\"0\">Ещё <span class=\"caret\"></span></a>

								<ul class=\"dropdown-menu\">
								  <li><a href=\"#\">Пожаловаться</a></li> 
								  <li><a href=\"#\">Подписаться на комментарии</a></li>
								</ul>
							  </li>
							  <li class=\"post__social-item\">
								<span class=\"post__link-view-social\">".$this->getViews()."</span>
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

			}
		}

		public function getPhotoPost()
		{
			if ($this->getIdPhoto() != null) {
				return "
                    <div id='mediaContent'>
                        <img id='sl' src=" . $this->getIdPhoto() . ">
                    </div>
                    ";
			} else {
				return null;
			}
		}

	}


?>