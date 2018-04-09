<?php
function shareIcons() {
?>
  <ul class="m-singlePostShareList">
    <!-- Facebook icon -->
    <li class="a-singlePostShareList__item">
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?= get_permalink() ?>" class="a-singlePostShare__link a-singlePostShare__facebook">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
          <style type="text/css">
            .svgCircle{fill:none;stroke-width:1.5;}
          </style>
          <g transform="translate(1 1)">
            <path class="st0" d="M16,13.2v-1.9c0-0.5,0.4-0.9,1-0.9h1V8h-2c-1.7,0-3,1.3-3,2.8v2.3h-2v2.3h2V23h3v-7.5h2l1-2.3H16z"/>
            <circle class="svgCircle" cx="15" cy="15" r="15"/>
          </g>
        </svg>
      </a>
    </li>

    <!-- Twitter icons -->
    <li class="a-singlePostShareList__item">
      <a href="https://twitter.com/share?text=<?= the_title() ?>&url=<?= get_permalink() ?>" class="a-singlePostShare__link a-singlePostShare__twitter">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
          <style type="text/css">
          .svgCircle{fill:none;stroke-width:1.5;}
          </style>
          <g transform="translate(1 1)">
            <path class="st0" d="M23,11.4c-0.6,0.2-1.2,0.4-1.8,0.5c0.6-0.4,1.1-1,1.4-1.7c-0.6,0.3-1.3,0.6-2,0.7c-0.6-0.6-1.4-1-2.2-1
            c-1.7,0-3.1,1.4-3.1,3c0,0.2,0,0.5,0.1,0.7c-2.6-0.1-4.8-1.3-6.3-3.2c-0.3,0.5-0.4,1-0.4,1.5c0,1,0.5,2,1.4,2.5
            c-0.5,0-1-0.2-1.4-0.4c0,0,0,0,0,0c0,1.5,1.1,2.7,2.5,3c-0.3,0.1-0.5,0.1-0.8,0.1c-0.2,0-0.4,0-0.6-0.1c0.4,1.2,1.5,2.1,2.9,2.1
            c-1,0.8-2.4,1.3-3.8,1.3c-0.3,0-0.5,0-0.7,0c1.4,0.9,3,1.4,4.7,1.4c5.7,0,8.8-4.6,8.8-8.6c0-0.1,0-0.3,0-0.4
            C22.1,12.6,22.6,12,23,11.4z"/>
            <circle class="svgCircle" cx="15" cy="15" r="15"/>
          </g>
        </svg>
      </a>
    </li>

    <!-- LinkedIn icon -->
    <li class="a-singlePostShareList__item">
      <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= get_permalink() ?>e&title=<?= the_title() ?>&summary=&source=leeroy.se" class="a-singlePostShare__link a-singlePostShare__linkedin">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
          <style type="text/css">
          .svgCircle{fill:none;stroke-width:1.5;}
          </style>
          <g transform="translate(1 1)">
            <rect x="9" y="13" class="st0" width="3" height="9"/>
            <path class="st0" d="M19.8,13.1C19.8,13.1,19.8,13.1,19.8,13.1c-0.1,0-0.2,0-0.2-0.1c-0.2,0-0.3-0.1-0.5-0.1
            c-1.7,0-2.8,1.2-3.1,1.7V13H13v9h2.9v-4.9c0,0,2.2-3.1,3.1-0.8c0,2,0,5.7,0,5.7H22v-6.1C22,14.6,21.1,13.4,19.8,13.1z"/>
            <circle class="st0" cx="10.5" cy="10.5" r="1.5"/>
            <circle class="svgCircle" cx="15" cy="15" r="15"/>
          </g>
        </svg>
      </a>
    </li>

    <!-- Google+ icon -->
    <li class="a-singlePostShareList__item">
      <a href="https://plus.google.com/share?url=<?= get_permalink() ?>" class="a-singlePostShare__link a-singlePostShare__google">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
          <style type="text/css">
          .svgCircle{fill:none;stroke-width:1.5;}
          </style>
          <g transform="translate(1 1)">
            <polygon class="st0" points="22.6,15.4 22.6,13 21.4,13 21.4,15.4 19,15.4 19,16.6 21.4,16.6 21.4,19 22.6,19 22.6,16.6 25,16.6
            25,15.4 	"/>
            <path class="st0" d="M12,14.4v2.2h3.4c-0.5,1.3-1.8,2.2-3.4,2.2c-2,0-3.6-1.5-3.6-3.3s1.6-3.3,3.6-3.3c0.9,0,1.7,0.3,2.3,0.8
            l1.6-1.7C14.8,10.5,13.4,10,12,10c-3.3,0-6,2.5-6,5.5S8.7,21,12,21s6-2.5,6-5.5v-1.1H12z"/>
            <circle class="svgCircle" cx="15" cy="15" r="15"/>
          </g>
        </svg>
      </a>
    </li>
  </ul>

<?php
}
?>
