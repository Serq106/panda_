<?php
    function printYouTubeModal($i, $url_video, $publishedAt, $channelId, $title, $description, $channelTitle){
        $uid = $_COOKIE["uid"];
        if($uid != null){
            $save = "
               <a class=\"post__link - save\" href=\"#\" onclick=\"AjaxFormRequestVideo('$url_video', '$uid', '$title', 'video');\" title=\"Сохранить в&nbsp;своём аккаунте\">
            ";
        } else{
            $save = "
               <a class=\"post__link-save\" href=\"#\" title=\"Сохранить в&nbsp;своём аккаунте\">
            ";
        }
        return ("
                <div class='modal fade modal--youtube' id='modal-yt$i'>
              <div class='modal-dialog modal-lg'>
                <article class='modal-content modal-youtube'>
                  <header class='modal__header modal-header'>
                    <a class='modal-header__title-link modal-header__title-link--checked' href='https://www.youtube.com/channel/UCMJecdKUslHToOEpeuRGwXg' title='Перейти на&nbsp;канала на&nbsp;YouTube' target='_blank'>
                      <b class='modal-header__title'>$channelTitle</b>
                      <img class='modal-header__channel-logo' src='https://yt3.ggpht.com/-KjpwTKO3Mpk/AAAAAAAAAAI/AAAAAAAAAAA/Zn4Sd6kvyrc/s88-c-k-no-mo-rj-c0xffffff/photo.jpg' alt='Candyrat Records, логотип'>
                    </a>
                    <span class='modal-header__title-checked' title='Подтверждено'>
                      <svg class='modal-header__title-checked-svg'>
                        <use xlink:href='images/icon_sprite.svg#icon_checked-yt'></use>
                      </svg>
                    </span>
                    <p class='modal-header__published'>$publishedAt</p>
                  </header>
            
                  <div class='modal__body modal-youtube__body'>
                    <h2 class='modal-youtube__title'>$title</h2>
            
                    <p class='modal-youtube__media'>
                      <iframe width='640' height='360' src='$url_video' frameborder='0' allow='autoplay; encrypted - media' allowfullscreen></iframe>
                    </p>
            
                    <div class='modal-youtube__user-menu-wrapper'>
                      
                      <ul class='modal-youtube__user-menu modal-user-menu'>
                        <li class='modal-user-menu__item'>
                          <a class='modal-user-menu__link modal-user-menu__link--share' href='#' title='Поделиться'>
                            <svg class='modal-user-menu__link-svg'>
                              <use xlink:href='images/icon_sprite.svg#icon_share'></use>
                            </svg>
                            <span class='visually-hidden'>Поделиться</span>
                          </a>
                        </li>
                        <li >
                        ".$save."
                            <svg class='modal-user-menu__link-svg' >
                              <use xlink:href = 'images/icon_sprite.svg#icon_plus' ></use>
                            </svg >
                            <span class='visually-hidden' > Сохранить в & nbsp;своём аккаунте </span >
                          </a >
                        </li >
                      </ul >
                    </div >
                      
                    <div class='modal-youtube__description-wrapper' >
                      <div class='modal-youtube__description' >
                        <div class='modal-youtube__description-text' > $description</div >            
                        <ul class='modal-youtube__description-extra-list' >
                          <li class='modal-youtube__description-extra-item' >
                            <h4 class='modal-youtube__description-extra-title' > Категория</h4 >
                            <div class='modal-youtube__description-extra-content' ><a href = '#' > Музыка</a ></div >
                          </li >
                          <li class='modal-youtube__description-extra-item' >
                            <h4 class='modal-youtube__description-extra-title' > Лицензия</h4 >
                            <div class='modal-youtube__description-extra-content' > Стандартная лицензия YouTube </div >
                          </li >
                        </ul >
                      </div >
            
                    </div >
                      <div class='modal-youtube__comments-number-wrapper' >
                        <p class='modal-youtube__comments-number' > 112
                          <span class='modal-youtube__comments-number-text' > комментарии</span >
                        </p >
                      </div >
            
                      <div class='modal-youtube__comments-add comments-add-yt' >
                        <div class='comments-add-yt__photo-wrapper' >
                          <a class='comments-add-yt__photo-link' href = 'https://www.youtube.com/channel/UC4cvShOQ3adedQPALCIINRg' title = 'Открыть канал на&nbsp;YouTube в&nbsp;отдельной вкладке' target = '_blank' >
                            <img class='comments-add-yt__photo' src = 'https://yt3.ggpht.com/-aZIJNq5tRsY/AAAAAAAAAAI/AAAAAAAAAAA/ho_8pbXIq90/s48-c-k-no-mo-rj-c0xffffff/photo.jpg' alt = 'Account Name' >
                          </a >
                        </div >
            
                        <form class='comments-add-yt__wrapper' action = '' method = 'POST' >
                          <textarea class='comments-add-yt__textarea' name = '' id = '' rows = '1' maxlength = '10000' placeholder = 'Оставьте комментарий' ></textarea >
            
                          <div class='comments-add-yt__btn-wrapper' >
                            <button class='comments-add-yt__btn comments-add-yt__btn--cancel' type = 'button' > Отмена</button >
                            <button class='comments-add-yt__btn comments-add-yt__btn--enter' type = 'submit' > Оставить комментарий </button >
                          </div >
                        </form >
                      </div >
            
                      
                    </article >

                    <a href = '#' class='modal__flag' ></a >

                    <button type = 'button' class='close' data - dismiss = 'modal' aria - label = 'Close' ><span aria - hidden = 'true' >&times;</span ></button >

                    <button class='btn-arrow btn-arrow--prev' type = 'button' ><span class='visually-hidden' > Предыдущий пост </span ></button >
                    <button class='btn-arrow btn-arrow--next' type = 'button' ><span class='visually-hidden' > Следующий пост </span ></button >
                </div >
              </div >
            ");
        
    }
?>