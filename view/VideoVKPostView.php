<?php
    include_once "model/PostModel.php";

    function printVKPost($i, $Name, $date_mas, $UrlPhoto, $Video, $Text, $Views){
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
            <article class=\"posts__item post post--vk\" data-toggle=\"modal\" data-target=\"#modal-vk--video$i\" tabindex=\"0\">
              <header class=\"post__header\">
                <div class=\"post__title-wrapper\">
                  <h2 class=\"post__title\">".$Name."</h2>
                  <span class=\"post__sub-title\">".$date_mas['mday'] . '.' . $date_mas['mon'] . '.' . $date_mas['year']. ' ' . $date_mas['hours']. ':' . $date_mas['minutes']. ':' . $date_mas['seconds']."</span>
                </div>
                <div class=\"post__title-logo\">
                  <img src=".$UrlPhoto." alt=".$UrlPhoto.">
                </div>
              </header>
                    
              <p class=\"post__media\">
                <iframe src=".$Video." allowfullscreen></iframe>
              </p>
            
               <p class=\"post__text\">".$Text."</p>
            
              <div class=\"post__actions\">
                <ul class=\"post__social-list\">
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
            
              <a class=\"post__flag\" href=\"#\" title=\"Посмотреть в&nbsp;соц. сети в&nbsp;отдельной кладке\" target=\"_blank\">
                <svg class=\"post__flag-svg\">
                  <use xlink:href=\"images/icon_sprite.svg#icon_post-vk\"></use>
                </svg>
                <span class=\"visually-hidden\">Посмотреть в&nbsp;соц. сети в&nbsp;отдельной кладке</span>
              </a>
            </article>
        ");
    }
?>
