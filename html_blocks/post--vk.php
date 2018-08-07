<?php 
// Структура блока пост универсальна независимо от контента поста.
// Если медиа (картинки, видео) присутствует, то добавляется блок post__media
?>

<?php
// Пример поста без медиа-контента
?>
<article class="posts__item post post--vk" data-toggle="modal" data-target="#modal-vk" tabindex="0">
  <header class="post__header">
    <div class="post__title-wrapper">
      <h2 class="post__title">Министерство культуры Российской Федерации</h2>
      <span class="post__sub-title">23 окт 2017 в 18:31</span>
    </div>
    <div class="post__title-logo">
      <img src="https://pp.userapi.com/c631228/v631228946/f4e1/vVitw2S5mxM.jpg" alt="Министерство культуры Российской Федерации, логотип">
    </div>
  </header>

  <p class="post__text">Очень длииииииииииииииииииииииииииииииииииииииииинное слово.<br><br>Как развивается музейное дело?<br><br>Учреждения культуры год от года становятся все популярнее. Технологии продвинулись далеко вперед и готовы отвечать современным запросам аудитории. К музеям сегодня особое внимание, они востребованы, увеличивается их значимость и посещаемость. А уже 4 ноября по всей России пройдет главная культурная акция года - «Ночь искусств», во время которой многие учреждения открыты для посетителей до позднего вечера, а то и до утра.<br><br>Каких результатов удалось достичь за последние пять лет? Ответ в нашем видео.</p>

  <div class="post__actions">
    <ul class="post__social-list">
      <li class="post__social-item">
        <a class="post__link post__link--like-vk" href="#">38</a>
      </li>
      <li class="post__social-item">
        <a class="post__link post__link--repost-vk" href="#">11</a>
      </li>
      <li class="post__social-item">
        <span class="post__link-view-social">802</span>
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
      <use xlink:href="images/icon_sprite.svg#icon_post-vk"></use>
    </svg>
    <span class="visually-hidden">Посмотреть в&nbsp;соц. сети в&nbsp;отдельной кладке</span>
  </a>
</article>


<?php
// Пример поста с изображением
?>
<article class="posts__item post post--vk" data-toggle="modal" data-target="#modal-vk--image" tabindex="0">
  <header class="post__header">
    <div class="post__title-wrapper">
      <h2 class="post__title">Министерство культуры Российской Федерации</h2>
      <span class="post__sub-title">23 окт 2017 в 18:31</span>
    </div>
    <div class="post__title-logo">
      <img src="https://pp.userapi.com/c631228/v631228946/f4e1/vVitw2S5mxM.jpg" alt="Министерство культуры Российской Федерации, логотип">
    </div>
  </header>
        
  <p class="post__media">
    <img src="https://i.ytimg.com/vi/Bb1ZMlyqlMs/maxresdefault.jpg" alt>
  </p>

  <p class="post__text">Как развивается музейное дело?<br><br>Учреждения культуры год от года становятся все популярнее. Технологии продвинулись далеко вперед и готовы отвечать современным запросам аудитории. К музеям сегодня особое внимание, они востребованы, увеличивается их значимость и посещаемость. А уже 4 ноября по всей России пройдет главная культурная акция года - «Ночь искусств», во время которой многие учреждения открыты для посетителей до позднего вечера, а то и до утра.<br><br>Каких результатов удалось достичь за последние пять лет? Ответ в нашем видео.</p>

  <div class="post__actions">
    <ul class="post__social-list">
      <li class="post__social-item">
        <a class="post__link post__link--like-vk" href="#">36</a>
      </li>
      <li class="post__social-item">
        <a class="post__link post__link--repost-vk" href="#">9</a>
      </li>
      <li class="post__social-item">
        <span class="post__link-view-social">1.1К</span>
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
      <use xlink:href="images/icon_sprite.svg#icon_post-vk"></use>
    </svg>
    <span class="visually-hidden">Посмотреть в&nbsp;соц. сети в&nbsp;отдельной кладке</span>
  </a>
</article>


<?php
// Пример поста с видео
?>
<article class="posts__item post post--vk" data-toggle="modal" data-target="#modal-vk--video" tabindex="0">
  <header class="post__header">
    <div class="post__title-wrapper">
      <h2 class="post__title">Andy McKee</h2>
      <span class="post__sub-title">23 окт 2017 в 18:31</span>
    </div>
    <div class="post__title-logo">
      <img src="https://yt3.ggpht.com/-KjhifCMk048/AAAAAAAAAAI/AAAAAAAAAAA/kZplbWxFZ6c/s88-c-k-no-mo-rj-c0xffffff/photo.jpg" alt="Andy McKee">
    </div>
  </header>
        
  <p class="post__media">
    <iframe src="https://www.youtube.com/embed/zw1MBd_zRlk?ecver=1" allowfullscreen></iframe>
  </p>

  <p class="post__text">Backstage with Tommy Emmanuel performing Toto's Africa during our sound check.</p>

  <div class="post__actions">
    <ul class="post__social-list">
      <li class="post__social-item">
        <a class="post__link post__link--like-vk" href="#">36</a>
      </li>
      <li class="post__social-item">
        <a class="post__link post__link--repost-vk" href="#">9</a>
      </li>
      <li class="post__social-item">
        <span class="post__link-view-social">1.1К</span>
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
      <use xlink:href="images/icon_sprite.svg#icon_post-vk"></use>
    </svg>
    <span class="visually-hidden">Посмотреть в&nbsp;соц. сети в&nbsp;отдельной кладке</span>
  </a>
</article>
