<!DOCTYPE html>
<html lang="ru">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello World</title>
      <?php include('inline-css.php'); ?>
  </head>

<body <?php body_class(); ?>>
  <nav class="main-menu fixed">
    <div class="w2560">
      <div class="w">
        <div class="logo">
          <a href="/" title="Homepage">
            <svg id="Layer_1" data-name="Layer 1" viewBox="0 0 255.12 257.63"><title>OWl nest</title><defs><style>.cls-1{fill:#00a551;}.cls-2{fill:#fff;}.cls-3{fill:#faaf40;}.cls-4{fill:#231f20;}.cls-5{fill:#09572f;}.cls-6{fill:#006838;}</style></defs><path class="cls-1" d="M24.76,27.61V184.28a49,49,0,0,0,49,49H181.43a49,49,0,0,0,49-49V27.61l-43.34,31.9L66.76,59.35Z"/><polygon class="cls-2" points="77.43 170.35 126.09 232.28 178.59 170.35 127.76 110.78 77.43 170.35"/><circle class="cls-3" cx="80.43" cy="134.95" r="35.33"/><path class="cls-4" d="M80.43,175.28A40.34,40.34,0,1,1,120.76,135,40.38,40.38,0,0,1,80.43,175.28Zm0-70.67A30.34,30.34,0,1,0,110.76,135,30.37,30.37,0,0,0,80.43,104.61Z"/><path class="cls-3" d="M211.42,135a35.33,35.33,0,1,1-35.33-35.34A35.33,35.33,0,0,1,211.42,135Z"/><path class="cls-4" d="M176.09,175.28A40.34,40.34,0,1,1,216.42,135,40.37,40.37,0,0,1,176.09,175.28Zm0-70.67A30.34,30.34,0,1,0,206.42,135,30.37,30.37,0,0,0,176.09,104.61Z"/><path class="cls-5" d="M127.09,176.28l103-148.67-41,30.68C173,41.44,152.25,32,127.09,32"/><path class="cls-6" d="M127.59,32c-25.27,0-46.07,9.6-62.2,26.59L24.76,27.61,127.09,176.28,127.59,32"/><circle class="cls-4" cx="80.43" cy="134.95" r="14"/><circle class="cls-4" cx="176.09" cy="134.95" r="14"/><path class="cls-2" d="M196.1,146.29A11.34,11.34,0,1,1,184.76,135,11.34,11.34,0,0,1,196.1,146.29Z"/><path class="cls-2" d="M99.1,147.29A11.34,11.34,0,1,1,87.76,136,11.34,11.34,0,0,1,99.1,147.29Z"/><path class="cls-5" d="M69.93,233.28a14,14,0,0,1,14-14c7.72,0,14,3.6,14,14"/><path class="cls-5" d="M157.34,233.28a14,14,0,0,1,28,0"/></svg> OWL Nest
          </a>
        </div>
        <input type="checkbox" id="touch-menu" />
        <label for="touch-menu" class="mobile-menu">
          <div></div>Меню
        </label>
        <div class="menu">
          <ul>
            <li> <a href="">About</a></li>
            <li>
              <input type="checkbox" id="touch-submenu1" />
              <label for="touch-submenu1" class="mobile-submenu"></label>
              <a href="">Blog</a>
              <div class="submenu">
                <ul>
                  <li><a href="">WordPress</a></li>
                  <li><a href="">Travel</a></li>
                  <li><a href="">Photo</a></li>
                </ul>
              </div>
            <li><a href="">Portfolio</a>
            </li>
            <li><a href="">Contact Info</a></li>
            <li class="search-field">
              search
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>

  <div class="w2560">
    <main>
      