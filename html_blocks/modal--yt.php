<?php
// Пример модального окна YouTube
?>
<div class="modal fade modal--youtube" id="modal-yt">
  <div class="modal-dialog modal-lg">
    <article class="modal-content modal-youtube">
      <header class="modal__header modal-header">
        <a class="modal-header__title-link modal-header__title-link--checked" href="https://www.youtube.com/channel/UCMJecdKUslHToOEpeuRGwXg" title="Перейти на&nbsp;канала на&nbsp;YouTube" target="_blank">
          <b class="modal-header__title">Candyrat Records</b>
          <img class="modal-header__channel-logo" src="https://yt3.ggpht.com/-KjpwTKO3Mpk/AAAAAAAAAAI/AAAAAAAAAAA/Zn4Sd6kvyrc/s88-c-k-no-mo-rj-c0xffffff/photo.jpg" alt="Candyrat Records, логотип">
        </a>
        <span class="modal-header__title-checked" title="Подтверждено">
          <svg class="modal-header__title-checked-svg">
            <use xlink:href="images/icon_sprite.svg#icon_checked-yt"></use>
          </svg>
        </span>
        <p class="modal-header__published">2 июл. 2014 г.</p>
      </header>

      <div class="modal__body modal-youtube__body">
        <h2 class="modal-youtube__title">Don Ross&nbsp;&mdash; First Ride (PS&nbsp;15)</h2>
        <!-- ПРОСМОТРЫ -->
        <!-- <p class="modal-youtube__views">187&nbsp;123
          <span class="modal-youtube__views-text">просмотры</span>
        </p> -->

        <p class="modal-youtube__media">
          <iframe width="640" height="360" src="https://www.youtube.com/embed/170GfcR1i_A?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </p>

        <div class="modal-youtube__user-menu-wrapper">
        	<!-- РЕЙТИНГОВЫЕ КНОПКИ -->
          <!-- <p class="modal-youtube__rating-btn">
            <a class="modal-youtube__rating-btn-link modal-youtube__rating-btn-link--like" href="#" title="Мне понравилось">
              <span class="visually-hidden">Мне понравилось</span>
              <svg class="modal-youtube__rating-btn-svg">
                <use xlink:href="images/icon_sprite.svg#icon_thumb-up"></use>
              </svg>
              <span class="modal-youtube__rating-btn-text">1&nbsp;730</span>
            </a>
            <a class="modal-youtube__rating-btn-link modal-youtube__rating-btn-link--dislike" href="#" title="Мне не&nbsp;понравилось">
              <span class="visually-hidden">Мне не&nbsp;понравилось</span>
              <svg class="modal-youtube__rating-btn-svg">
                <use xlink:href="images/icon_sprite.svg#icon_thumb-up"></use>
              </svg>
              <span class="modal-youtube__rating-btn-text">15</span>
            </a>
          </p> -->
          
          <ul class="modal-youtube__user-menu modal-user-menu">
            <li class="modal-user-menu__item">
              <a class="modal-user-menu__link modal-user-menu__link--share" href="#" title="Поделиться">
                <svg class="modal-user-menu__link-svg">
                  <use xlink:href="images/icon_sprite.svg#icon_share"></use>
                </svg>
                <span class="visually-hidden">Поделиться</span>
              </a>
            </li
            ><li>
              <a class="modal-user-menu__link modal-user-menu__link--save" href="#" title="Сохранить в&nbsp;своём аккаунте">
                <svg class="modal-user-menu__link-svg">
                  <use xlink:href="images/icon_sprite.svg#icon_plus"></use>
                </svg>
                <span class="visually-hidden">Сохранить в&nbsp;своём аккаунте</span>
              </a>
            </li>
          </ul>
        </div>
          
        <div class="modal-youtube__description-wrapper">
          <div class="modal-youtube__description">
            <div class="modal-youtube__description-text">"PS 15" 15th Anniversary - the all new recordings of  Passion Session "reimagined" by Don Ross.

"PS 15" CD, Tabs, and HD Studio Masters available now at <a class="yt-simple-endpoint style-scope yt-formatted-string" href="/redirect?redir_token=XN5tyK_B1ZUmr4hdrxKppBFaftx8MTUxNjk1MjQzNEAxNTE2ODY2MDM0&amp;q=http%3A%2F%2Fwww.candyrat.com%2Fartists%2FDonRoss%2FPS15%2F&amp;v=170GfcR1i_A&amp;event=video_description">http://www.candyrat.com/artists/DonRo...</a>

iTunes: <a class="yt-simple-endpoint style-scope yt-formatted-string" href="/redirect?redir_token=XN5tyK_B1ZUmr4hdrxKppBFaftx8MTUxNjk1MjQzNEAxNTE2ODY2MDM0&amp;q=https%3A%2F%2Fitunes.apple.com%2Fus%2Falbum%2Fps-15%2Fid878522792&amp;v=170GfcR1i_A&amp;event=video_description">https://itunes.apple.com/us/album/ps-...</a>

Amazon: <a class="yt-simple-endpoint style-scope yt-formatted-string" href="/redirect?redir_token=XN5tyK_B1ZUmr4hdrxKppBFaftx8MTUxNjk1MjQzNEAxNTE2ODY2MDM0&amp;q=http%3A%2F%2Famzn.com%2FB00KH8KWEO&amp;v=170GfcR1i_A&amp;event=video_description">http://amzn.com/B00KH8KWEO</a>

Visit Don Ross at<a class="yt-simple-endpoint style-scope yt-formatted-string" href="/redirect?redir_token=XN5tyK_B1ZUmr4hdrxKppBFaftx8MTUxNjk1MjQzNEAxNTE2ODY2MDM0&amp;q=http%3A%2F%2Fdonrossonline.com%2F&amp;v=170GfcR1i_A&amp;event=video_description">http://donrossonline.com/</a> and <a class="yt-simple-endpoint style-scope yt-formatted-string" href="/redirect?redir_token=XN5tyK_B1ZUmr4hdrxKppBFaftx8MTUxNjk1MjQzNEAxNTE2ODY2MDM0&amp;q=https%3A%2F%2Fwww.facebook.com%2Fdonrossonline%2F&amp;v=170GfcR1i_A&amp;event=video_description">https://www.facebook.com/donrossonline/</a>

Dons plays custom guitars made by luthier Marc Beneteau</div>

            <ul class="modal-youtube__description-extra-list">
              <li class="modal-youtube__description-extra-item">
                <h4 class="modal-youtube__description-extra-title">Категория</h4>
                <div class="modal-youtube__description-extra-content"><a href="#">Музыка</a></div>
              </li>
              <li class="modal-youtube__description-extra-item">
                <h4 class="modal-youtube__description-extra-title">Лицензия</h4>
                <div class="modal-youtube__description-extra-content">Стандартная лицензия YouTube</div>
              </li>
            </ul>
          </div>

					<!-- КНОПКА "ПОДПИСАТЬСЯ" -->
          <!-- <div class="modal-youtube__subscripe">
            <a class="modal-youtube__btn-subscripe" href="#">Подписаться
              <span class="modal-youtube__subscripe-members">597 тыс.</span>
            </a>
          </div> -->
        </div>

        <div class="modal-youtube__comments">
          <div class="modal-youtube__comments-number-wrapper">
            <p class="modal-youtube__comments-number">112
              <span class="modal-youtube__comments-number-text">комментарии</span>
            </p>
          </div>

          <div class="modal-youtube__comments-add comments-add-yt">
            <div class="comments-add-yt__photo-wrapper">
              <a class="comments-add-yt__photo-link" href="https://www.youtube.com/channel/UC4cvShOQ3adedQPALCIINRg" title="Открыть канал на&nbsp;YouTube в&nbsp;отдельной вкладке" target="_blank">
                <img class="comments-add-yt__photo" src="https://yt3.ggpht.com/-aZIJNq5tRsY/AAAAAAAAAAI/AAAAAAAAAAA/ho_8pbXIq90/s48-c-k-no-mo-rj-c0xffffff/photo.jpg" alt="Account Name">
              </a>
            </div>

            <form class="comments-add-yt__wrapper" action="" method="POST">
              <textarea class="comments-add-yt__textarea" name="" id="" rows="1" maxlength="10000" placeholder="Оставьте комментарий"></textarea>

              <div class="comments-add-yt__btn-wrapper">
                <button class="comments-add-yt__btn comments-add-yt__btn--cancel" type="button">Отмена</button>
                <button class="comments-add-yt__btn comments-add-yt__btn--enter" type="submit">Оставить комментарий</button>
              </div>
            </form>
          </div>

          <div class="modal-youtube__comments-list comments-list-yt">
            <div class="comments-list-yt__item">
              <a class="comments-list-yt__item-author-link" href="https://www.youtube.com/user/jakekropac" target="_blank">
                <img class="comments-list-yt__item-author-photo" src="https://yt3.ggpht.com/-ZhRzhm6gkis/AAAAAAAAAAI/AAAAAAAAAAA/JjhysKocamw/s48-c-k-no-mo-rj-c0xffffff/photo.jpg" alt="jake kropac">
                
                <p class="comments-list-yt__item-author">jake kropac</p>
              </a>
              <p class="comments-list-yt__item-data">Год назад</p>
              <div class="comments-list-yt__item-text">I was thrilled when I heard this in Disney's California Adventure park. Great tune.﻿</div>

              <div class="comments-list-yt__item-user-menu">
                <button class="comments-list-yt__item-btn-answer" type="button">Ответить</button>

                <span class="comments-list-yt__item-likes">2</span>

                <p class="modal-youtube__rating-btn">
                  <a class="modal-youtube__rating-btn-link modal-youtube__rating-btn-link--like" href="#" title="Мне понравилось">
                    <span class="visually-hidden">Мне понравилось</span>
                    <svg class="modal-youtube__rating-btn-svg">
                      <use xlink:href="images/icon_sprite.svg#icon_thumb-up"></use>
                    </svg>
                  </a>
                  <a href="#" class="modal-youtube__rating-btn-link modal-youtube__rating-btn-link--dislike" title="Мне не&nbsp;понравилось">
                    <span class="visually-hidden">Мне не&nbsp;понравилось</span>
                    <svg class="modal-youtube__rating-btn-svg">
                      <use xlink:href="images/icon_sprite.svg#icon_thumb-up"></use>
                    </svg>
                  </a>
                </p>
              </div>

              <form class="comments-list-yt__item-answer comments-add-yt__wrapper" action="" method="POST">
                <textarea class="comments-add-yt__textarea" name="" id="" rows="1" maxlength="10000" placeholder="Оставьте комментарий"></textarea>

                <div class="comments-add-yt__btn-wrapper">
                  <button class="comments-add-yt__btn comments-add-yt__btn--cancel" type="button">Отмена</button>
                  <button class="comments-add-yt__btn comments-add-yt__btn--enter" type="submit">Ответить</button>
                </div>
              </form>

            </div>

            <div class="comments-list-yt__item">
              <a class="comments-list-yt__item-author-link" href="https://www.youtube.com/user/jakekropac" target="_blank">
                <img class="comments-list-yt__item-author-photo" src="https://yt3.ggpht.com/-ZhRzhm6gkis/AAAAAAAAAAI/AAAAAAAAAAA/JjhysKocamw/s48-c-k-no-mo-rj-c0xffffff/photo.jpg" alt="jake kropac">
                
                <p class="comments-list-yt__item-author">jake kropac</p>
              </a>
              <p class="comments-list-yt__item-data">Год назад</p>
              <div class="comments-list-yt__item-text">I was thrilled when I heard this in Disney's California Adventure park. Great tune.﻿</div>

              <div class="comments-list-yt__item-user-menu">
                <button class="comments-list-yt__item-btn-answer" type="button">Ответить</button>

                <span class="comments-list-yt__item-likes">2</span>

                <p class="modal-youtube__rating-btn">
                  <a class="modal-youtube__rating-btn-link modal-youtube__rating-btn-link--like" href="#" title="Мне понравилось">
                    <span class="visually-hidden">Мне понравилось</span>
                    <svg class="modal-youtube__rating-btn-svg">
                      <use xlink:href="images/icon_sprite.svg#icon_thumb-up"></use>
                    </svg>
                  </a>
                  <a href="#" class="modal-youtube__rating-btn-link modal-youtube__rating-btn-link--dislike" title="Мне не&nbsp;понравилось">
                    <span class="visually-hidden">Мне не&nbsp;понравилось</span>
                    <svg class="modal-youtube__rating-btn-svg">
                      <use xlink:href="images/icon_sprite.svg#icon_thumb-up"></use>
                    </svg>
                  </a>
                </p>
              </div>

              <form class="comments-list-yt__item-answer comments-add-yt__wrapper" action="" method="POST">
                <textarea class="comments-add-yt__textarea" name="" id="" rows="1" maxlength="10000" placeholder="Оставьте комментарий"></textarea>

                <div class="comments-add-yt__btn-wrapper">
                  <button class="comments-add-yt__btn comments-add-yt__btn--cancel" type="button">Отмена</button>
                  <button class="comments-add-yt__btn comments-add-yt__btn--enter" type="submit">Ответить</button>
                </div>
              </form>

            </div>
          </div>
      	</div>
    	</article>

    	<a href="#" class="modal__flag"></a>

    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

    	<button class="btn-arrow btn-arrow--prev" type="button"><span class="visually-hidden">Предыдущий пост</span></button>
    	<button class="btn-arrow btn-arrow--next" type="button"><span class="visually-hidden">Следующий пост</span></button>
    </div>
  </div>
