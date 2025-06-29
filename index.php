<?php

session_start();

$name = $_SESSION['name'] ?? null;
$active_form = $_SESSION['active_form'] ?? '';

session_unset();

if ($name !== null) $_SESSION['name'] = $name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Angels Of Delusion</title>
  <link rel="stylesheet" href="src/styles/global.css">
</head>
<body>
  <div class="scroll-container">
    <section class="hero-section">
      <nav>
        <ul>
          <li>
            <?php if (!empty($name)): ?>
            <button data-text="<?= strtoupper($name); ?>" class="logout-btn"><a href="logout.php"><?= strtoupper($name); ?></a></button>
            <?php else: ?>
            <button data-text="LogIn" class="login-modal-btn">LogIn</button>
            <?php endif; ?>
          </li>
          <li><button data-text="Who are we"><a href="#characters">Who are we</a></button></li>
          <li><button data-text="Clips">Clips</button></li>
          <li><button data-text="Tickets"><a href="#tickets">Tickets</a></button></li>
          <li><button data-text="Social"><a href="#social">Social</a></button></li>
        </ul>
      </nav>

      <div class="auth-modal <?= $active_form === 'register' ? 'show slide' : ($active_form === 'login' ? 'show' : ''); ?>">
        <button type="button" class="close-modal-btn">X</button>
        <div class="form-box login">
          <h2>Login</h2>
          <form action="auth_process.php" method="POST" id="loginForm">
            <div class="input-box">
              <input type="email" name="email" placeholder="email" required>
            </div>
            <div class="input-box">
              <input type="password" name="password" placeholder="password" required>
            </div>
            <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
            <button type="submit" name="login-btn" class="btn" data-text="Login">Login</button>
          </form>
        </div>

        <div class="form-box register">
          <h2>Register</h2>
          <form action="auth_process.php" method="POST">
            <div class="input-box">
              <input type="text" name="name" placeholder="name" required>
            </div>
            <div class="input-box">
              <input type="email" name="email" placeholder="email" required>
            </div>
            <div class="input-box">
              <input type="password" name="password" placeholder="password" required>
            </div>
            <p>Already have an account? <a href="#" class="login-link">Login</a></p>
            <button type="submit" name="register-btn" class="btn" data-text="Register">Register</button>
          </form>
        </div>
      </div>

      <img class="img stream" src="src/components/image_2025-05-29_20-20-51.png" alt="Stream us on YouTube">
      <img class="img card" src="src/components/image_2025-05-29_20-21-35.png" alt="Angels of Delusion">
      <img class="background" src="src/components/GRUw6qMWAAAkqKV.jpeg" alt="first">
    </section>
    <section class="characters-section" id="characters">
      <div class="content carousel" data-carousel>
        <ul data-slides>
          <li class="slide" data-active>
            <div class="character-info">
              <h3 class="name">Makunochi Nozomi</h3>
              <pre class="role">The creator of all the group's
songs</pre>
              <pre class="description">Carries a notebook and pen at all times
to quickly jot down any melodies that
come to her mind</pre>
              <pre class="description">Enjoys being alone, listening
to music, composing, and
playing the piano</pre>
              <pre class="description">Dislikes arrogant
company producers
who reject her
songs</pre>
                <div class="idol-name">
                  <pre class="idol-name">   Chinatsu
Ramiel</pre>
                </div>
            </div>
            <img src="src/components/p628k0wdvgtd1.jpeg" alt="first">
          </li>
          <li class="slide">
            <img src="src/components/Без названия20_20250601004008.png" alt="second">
            <div class="character-info">
              <h3 class="name">Tougou Rin</h3>
              <pre class="role">A bright top idol whose real form is
an introverted, shy, and
timid robot</pre>
              <pre class="description">Even in her robot state, she practice
energetic idol poses (smile and
posture) in front of a mirror
when she is alone</pre>
              <pre class="description">Likes albums by the famous
female singer MAO</pre>
              <pre class="description">Dislikes her combat
mission as a
combat robot</pre>
                <div class="idol-name">
                  <pre class="idol-name">   Yutane
Johiel</pre>
                </div>
            </div>
          </li>
          <li class="slide">
            <div class="character-info">
              <h3 class="name">Haruka Rokudoku</h3>
              <pre class="role">Skilled in dance and rap, Haruka is
actually hardworking, supporting
her entire idol group</pre>
              <pre class="description">Uses chili peppers to induce tears
when she needs to cry</pre>
              <pre class="description">Enjoys harmless jokes and
pranks that somehow
never offend others</pre>
              <pre class="description">Hates being labeled a genius,
believing that geniuses
don't exist</pre>
                <div class="idol-name">
                  <pre class="idol-name">   Rokudoku
Sariel</pre>
                </div>
            </div>
            <img src="src/components/Без названия17_20250530232212.png" alt="third">
          </li>
        </ul>
        <div class="characters-nav-container">
          <div class="characters-nav" data-slider>
            <button class="nav-btn prev" data-carousel-btn="prev">
              <svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.559 15.4918C35.3436 15.4941 36.1186 15.6645 36.8319 15.9913C37.6042 16.3317 38.2621 16.8872 38.7272 17.5914C39.1922 18.2957 39.4448 19.1189 39.4546 19.9628V40.9939C39.4448 41.8377 39.1922 42.661 38.7272 43.3652C38.2621 44.0694 37.6042 44.6249 36.8319 44.9653C35.9434 45.385 34.9548 45.5467 33.9788 45.4318C33.0029 45.317 32.0788 44.9304 31.3119 44.3159L18.5733 33.8003C18.0738 33.4027 17.6704 32.8974 17.3931 32.3223C17.1158 31.7471 16.9718 31.1168 16.9718 30.4783C16.9718 29.8398 17.1158 29.2095 17.3931 28.6344C17.6704 28.0592 18.0738 27.554 18.5733 27.1563L31.3119 16.6407C32.2301 15.8961 33.3768 15.4904 34.559 15.4918Z" fill="black"/>
              </svg>
            </button>
              <div class="character-mask" data-active>
                <img src="src/components/image 5.png" alt="">
              </div>
              <div class="character-mask">
                <img src="src/components/yutane.png" alt="">
              </div>
              <div class="character-mask">
                <img class="ramiel" src="src/components/ramiel.png" alt="">
              </div>
              <div class="active-border"></div>
            <button class="nav-btn next" data-carousel-btn="next">
              <svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.5206 45.4643C25.736 45.4619 24.9609 45.2916 24.2476 44.9647C23.4754 44.6243 22.8175 44.0688 22.3524 43.3646C21.8873 42.6604 21.6348 41.8372 21.625 40.9933V19.9622C21.6348 19.1183 21.8873 18.2951 22.3524 17.5909C22.8175 16.8866 23.4754 16.3311 24.2476 15.9907C25.1362 15.571 26.1248 15.4094 27.1008 15.5242C28.0767 15.639 29.0008 16.0257 29.7677 16.6402L42.5062 27.1557C43.0058 27.5534 43.4092 28.0586 43.6865 28.6338C43.9638 29.2089 44.1078 29.8392 44.1078 30.4777C44.1078 31.1162 43.9638 31.7465 43.6865 32.3217C43.4092 32.8968 43.0058 33.4021 42.5062 33.7998L29.7677 44.3153C28.8495 45.06 27.7028 45.4657 26.5206 45.4643Z" fill="black"/>
              </svg>
            </button>
          </div>
        </div>
        <div class="svg-back">
          <svg width="100%" height="100%" viewBox="0 0 1920 1080" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <mask id="mask0_49_61" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="1920" height="1080">
            <path d="M0 0V1080H1920V0H0Z" fill="#D9D9D9"/>
            </mask>
            <g mask="url(#mask0_49_61)">
            <path d="M1920 1082.5L938 1082.5L1725 -3H1920V1082.5Z" fill="#313131"/>
            <path d="M0 0H983.362L211 1080H0V0Z" fill="#313131"/>
            <mask id="mask1_49_61" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="939" y="974" width="981" height="106">
            <path d="M1920 974V1080H939.5L1016.68 974H1920Z" fill="#D9D9D9"/>
            </mask>
            <g mask="url(#mask1_49_61)">
            <rect y="971" width="1918" height="501" fill="url(#pattern0_49_61)"/>
            </g>
            <mask id="mask2_49_61" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="1325" y="0" width="595" height="549">
            <path d="M1920 549H1325L1722.79 0H1920V549Z" fill="#D9D9D9"/>
            </mask>
            <g mask="url(#mask2_49_61)">
            <rect x="1035" y="-3" width="2124" height="555" fill="url(#pattern1_49_61)"/>
            </g>
            <mask id="mask3_49_61" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="966" width="293" height="114">
            <path d="M211 1080H0V966.5H292.5L211 1080Z" fill="#D9D9D9"/>
            </mask>
            <g mask="url(#mask3_49_61)">
            <rect y="971" width="1918" height="501" fill="url(#pattern2_49_61)"/>
            </g>
            </g>
            <defs>
            <pattern id="pattern0_49_61" patternContentUnits="objectBoundingBox" width="0.441084" height="0.441118">
            <use xlink:href="#image0_49_61" transform="scale(0.000521376 0.00199601)"/>
            </pattern>
            <pattern id="pattern1_49_61" patternContentUnits="objectBoundingBox" width="0.398305" height="0.398198">
            <use xlink:href="#image0_49_61" transform="scale(0.00047081 0.0018018)"/>
            </pattern>
            <pattern id="pattern2_49_61" patternContentUnits="objectBoundingBox" width="0.441084" height="0.441118">
            <use xlink:href="#image0_49_61" transform="scale(0.000521376 0.00199601)"/>
            </pattern>
            <image id="image0_49_61" width="846" height="221" preserveAspectRatio="none" xlink:href="data:image/png;base64,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"/>
            </defs>
          </svg>
        </div>
      </div>
    </section>
    <section class="tickets-section" id="tickets">
      <div class="border-container">
        <ul class="tickets-container">
          <li class="ticket">
            <p>JUN 7, 2025 - JUN 8, 2025</p>
            <p>Budapesht, Budapesht</p>
            <button data-text="BUY">BUY</button>
          </li>
          <li class="ticket">
            <p>JUN 15, 2025 - JUN 17, 2025</p>
            <p>France, Paris</p>
            <button data-text="BUY">BUY</button>
          </li>
          <li class="ticket">
            <p>JUN 25, 2025</p>
            <p>Oslo, Norway</p>
            <button data-text="BUY">BUY</button>
          </li>
          <li class="ticket">
            <p>JUL 6, 2025 - JUL 7, 2025</p>
            <p>Moscow, Russia</p>
            <button data-text="BUY">BUY</button>
          </li>
          <li class="ticket">
            <p>JUL 14, 2025 - JUL 15, 2025</p>
            <p>Shanghai, China</p>
            <button data-text="BUY">BUY</button>
          </li>
          <li class="ticket">
            <p>JUL 25, 2025</p>
            <p>Tokyo, Japan</p>
            <button data-text="BUY">BUY</button>
          </li>
          <li class="ticket">
            <p>AUG 4, 2025</p>
            <p>Seol, South Korea</p>
            <button data-text="BUY">BUY</button>
          </li>
        </ul>
      </div>
    </section>
    <section class="footer-section" id="social">
      <div class="header">
        <div class="title"><h2>Social Media</h2></div>
        <div class="title"><h2>Music</h2></div>
        <div class="title"></div>
      </div>
      <div class="links">
        <div class="social-media">
          <a href="" data-text="Instagram">Instagram</a>
          <a href="" data-text="X/Twitter">X/Twitter</a>
          <a href="" data-text="Tiktok">Tiktok</a>
          <a href="" data-text="Facebook">Facebook</a>
          <a href="" data-text="YouTube">YouTube</a>
        </div>
        <div class="music">
          <a href="" data-text="Spotify">Spotify</a>
          <a href="" data-text="Apple Music">Apple Music</a>
          <a href="" data-text="Deezer">Deezer</a>
          <a href="" data-text="Yandex Music">Yandex Music</a>
        </div>
        <div class="important">
          <a href="" data-text="Terms of Use">Terms of Use</a>
          <a href="" data-text="Privacy Policy">Privacy Policy</a>
          <a href="" data-text="Safe Surf">Safe Surf</a>
          <a href="" data-text="Cookies">Cookies</a>
        </div>
      </div>
      <div class="credits">
        <p>@2025 Angels of Delusion</p>
      </div>
    </section>
  </div>
    <script type="module" src="src/main.js"></script>
</body>
</html>