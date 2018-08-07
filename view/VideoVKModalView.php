<?php
include_once "model/PostModel.php";
    function printVKModal($i, $Name, $date_mas, $UrlPhoto, $Video, $Text, $Views){
        $uid = $_COOKIE["uid"];
        if($uid != null){
            $save = "
               <a class=\"post__link-save\" href=\"#\" onclick=\"AjaxFormRequestVideo('$Video', '$uid', '$Text', 'video');\" title=\"Сохранить в&nbsp;своём аккаунте\">
            ";
        } else{
            $save = "
               <a class=\"post__link-save\" href=\"#\" title=\"Сохранить в&nbsp;своём аккаунте\">
            ";
        }
        return ("
            <div class=\"modal fade modal--vk\" id=\"modal-vk--video$i\">
              <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                  <div class=\"modal-body\">
                      
                    <div class=\"modal-body__title-wrapper\">
            
                      <div class=\"modal-body__title-text\">
                        <span class=\"modal-body__title\">
                          <a href=\"#\">".$Name."</a>
                        </span>
                        <span class=\"modal-body__sub-title\">
                          <a href=\"#\">".$date_mas['mday'] . '.' . $date_mas['mon'] . '.' . $date_mas['year']. ' ' . $date_mas['hours']. ':' . $date_mas['minutes']. ':' . $date_mas['seconds']."</a>
                        </span>
                      </div>
            
                      <div class=\"modal-body__title-logo\">
                        <img src=".$UrlPhoto." alt=".$UrlPhoto.">
                      </div>
                    </div>
            
                    <div class=\"modal-body__media\">
                      <iframe src=".$Video." allowfullscreen></iframe>
                    </div>
            
                    <div class=\"modal-body__text\">".$Text."</div>
            
                    <div class=\"modal-body__bottom\">
                      <ul class=\"post__social-list\">
                        <!--li class=\"post__social-item post__social-item--modal\">
                          <a class=\"post__link post__link--like-vk\" href=\"#\"><span class=\"post__link-text\">Нравится</span>38</a>
                        </li>
                        <li class=\"post__social-item post__social-item--modal\">
                          <a class=\"post__link post__link--repost-vk\" href=\"#\"><span class=\"post__link-text\">Поделиться</span>11</a>
                        </li-->
                        <li class=\"post__social-item dropup\">
                          <a class=\"dropdown-toggle post__link post__link--more-vk\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" tabindex=\"0\">Ещё <span class=\"caret\"></span></a>
            
                          <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Пожаловаться</a></li>
                            <li><a href=\"#\">Подписаться на комментарии</a></li>
                          </ul>
                        </li>
                        <li class=\"post__social-item\">
                          <span class=\"post__link-view-social\">".$Views."</span>
                        </li>
                      </ul>
            
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
                        ".$save."
                            <span class=\"visually-hidden\">Сохранить в&nbsp;своём аккаунте</span>
                            <svg class=\"post__link-save-svg\">
                              <use xlink:href=\"images/icon_sprite.svg#icon_plus\"></use>
                            </svg>
                          </a>
                        </li>
                      </ul>
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
                        <button class=\"btn reply-control__btn-cancel\">Отмена</button
                        ><a class=\"btn reply-control__btn-send\" href=\"#\">Отправить</a>
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