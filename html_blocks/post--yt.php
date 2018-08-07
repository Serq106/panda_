<?php
// Пример поста YouTube
?>
<article class="thumbnail posts__item post post--yt"  data-toggle="modal" data-target="#modal-yt" tabindex="0">
  <header class="post__header">
    <div class="post__title-wrapper">
      <h2 class="post__title">Candyrat Records</h2>
      <span class="post__sub-title">579 тыс. подписчиков</span>
    </div>
    <div class="post__title-logo">
      <img src="https://yt3.ggpht.com/-KjpwTKO3Mpk/AAAAAAAAAAI/AAAAAAAAAAA/Zn4Sd6kvyrc/s88-c-k-no-mo-rj-c0xffffff/photo.jpg" alt="Candyrat Records, логотип">
    </div>
  </header>
        
  <p class="post__media">
    <iframe src="https://www.youtube.com/embed/170GfcR1i_A?ecver=1" gesture="media" allowfullscreen></iframe>
  </p>

  <p class="post__text">Don Ross - First Ride (PS 15)</p>

  <div class="post__actions">
    <ul class="post__social-list">
      <li class="post__social-item">
        <span class="post__link-views post__link-views--yt">175&nbsp;190</span>
      </li>
      <li class="post__social-item">
        <a class="post__link-like post__link-like--yt" href="#">1&nbsp;698</a>
      </li>
      <li>
        <a class="post__link-dislike post__link-dislike--yt" href="#">13</a>
      </li>
    </ul>

    <ul class="post__actions-list">
      <li class="post__actions-item">
        <a class="post__link-share" href="#" title="Поделиться">
          <span class="visually-hidden">Поделиться</span>
          <svg class="post__link-share-svg">
            <use xlink:href="images/icon_sprite.svg#icon_share"></use>
          </svg>
        </a>
      </li>
      <li class="post__actions-item">
        <a class="post__link-save" href="#" title="Сохранить в&nbsp;своём аккаунте">
          <span class="visually-hidden">Сохранить в&nbsp;своём аккаунте</span>
          <svg class="post__link-save-svg">
            <use xlink:href="images/icon_sprite.svg#icon_plus"></use>
          </svg>
        </a>
      </li>
    </ul>
  </div>

  <a class="post__flag" href="#" title="Посмотреть в&nbsp;соц. сети в&nbsp;отдельной кладке" target="_blank">
    <svg class="post__flag-svg">
      <use xlink:href="images/icon_sprite.svg#icon_post-yt"></use>
    </svg>
    <span class="visually-hidden">Посмотреть в&nbsp;соц. сети в&nbsp;отдельной кладке</span>
  </a>
</article>
