<?php
    function printYouTube($i, $url_video, $publishedAt, $channelId, $title, $description, $channelTitle){
        $uid = $_COOKIE["uid"];
        if($uid != null){
            $save = "
               <a class=\"post__link-save\" href=\"#\" onclick=\"AjaxFormRequestVideo('$url_video', '$uid', '$title', 'video');\" title=\"Сохранить в&nbsp;своём аккаунте\">
            ";
        } else{
            $save = "
               <a class=\"post__link-save\" href=\"#\" title=\"Сохранить в&nbsp;своём аккаунте\">
            ";
        }
        return ("
            <article class=\"thumbnail posts__item post post--yt\"  data-toggle=\"modal\" data-target=\"#modal-yt$i\" tabindex=\"0\">
              <header class=\"post__header\">
                <div class=\"post__title-wrapper\">
                  <h2 class=\"post__title\">$channelTitle</h2>
                  <span class=\"post__sub-title\">$publishedAt</span>
                </div>
                <div class=\"post__title-logo\">
                  <img src=\"https://yt3.ggpht.com/-KjpwTKO3Mpk/AAAAAAAAAAI/AAAAAAAAAAA/Zn4Sd6kvyrc/s88-c-k-no-mo-rj-c0xffffff/photo.jpg\" alt=\"Candyrat Records, логотип\">
                </div>
              </header>
                    
              <p class=\"post__media\">
                <iframe src=$url_video gesture=\"media\" allowfullscreen></iframe>
              </p>
            
              <p class=\"post__text\">$title</p>
            
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
                  ".$save."
                      <span class=\"visually-hidden\" >Сохранить в&nbsp;своём аккаунте</span>
                      <svg class=\"post__link-save-svg\">
                        <use xlink:href=\"images/icon_sprite.svg#icon_plus\"></use>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            
              <a class=\"post__flag\" href=\"#\" title=\"Посмотреть в&nbsp;соц. сети в&nbsp;отдельной кладке\" target=\"_blank\">
                <svg class=\"post__flag-svg\">
                  <use xlink:href=\"images/icon_sprite.svg#icon_post-yt\"></use>
                </svg>
                <span class=\"visually-hidden\">Посмотреть в&nbsp;соц. сети в&nbsp;отдельной кладке</span>
              </a>
            </article>
        ");
    }
?>
