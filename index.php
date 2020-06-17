<div id="eyecatch">
      <p>estra inc.</p>
    </div>

    <nav class="menu-content">
      <p class="menu-title">estra inc.</p>
      <ul class="menu-content_inner">
        <li><a href="#">home</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">service</a></li>
        <li><a href="#">works</a></li>
        <li><a href="#">price</a></li>
        <li><a href="#">contact</a></li>
      </ul>
    </nav>

    <div id="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <main id="main">
      <div id="news" class="wrap">
        <h2 class="section-title">news</h2>
        <ul class="news-contain">
          <li class="news-list">
            <p class="news-date">2020/01/01</p>
            <a href="" class="news-category">New</a>
            <a href="" class="news-title"
              >プログラミングコーチングスクールCOACHTECHをリリース</a
            >
          </li>
          <li class="news-list">
            <p class="news-date">2020/01/01</p>
            <a href="" class="news-category">New</a>
            <a href="" class="news-title"
              >プログラミングコーチングスクールCOACHTECHをリリースたくさんの生徒様にご利用いただいております。</a
            >
          </li>
          <li class="news-list">
            <p class="news-date">2020/01/01</p>
            <a href="" class="news-category">New</a>
            <a href="" class="news-title"
              >プログラミングコーチングスクールCOACHTECHをリリース</a
            >
          </li>
        </ul>
      </div>

      <div id="about" class="wrap">
        <h2 class="section-title">about</h2>
        <div class="flex">
          <div class="about-left">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg2.jpg" alt="" />
          </div>
          <div class="about-right">
            <h3>estra inc.</h3>
            <p>
              私たちestra
              incは、お客様の満足度を徹底的に追及することで、お客様・市場・時代のニーズを的確に捉え、事業の拡大と周辺ビジネスによる差別化、業界における圧倒的な地位の確立を図るべく積極的な事業活動を行っています。
            </p>
            <ol>
              <li>コーチング事業</li>
              <li>プログラミング事業</li>
              <li>SaaS事業</li>
            </ol>
            <a class="about-page-button">詳細ページ</a>
          </div>
        </div>
      </div>

      <div id="business">
        <h2 class="section-title">service</h2>
        <div class="flex business-wrap">
          <div class="business-cat">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business-icon.png" alt="" />
            <h3>ビジネスA</h3>
            <p>
              ビジネスの説明が入ります。ビジネスの説明が入ります。ビジネスの説明が入ります。ビジネスの説明が入ります。
            </p>
          </div>

          <div class="business-cat">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business-icon.png" alt="" />
            <h3>ビジネスB</h3>
            <p>
              ビジネスの説明が入ります。ビジネスの説明が入ります。ビジネスの説明が入ります。ビジネスの説明が入ります。
            </p>
          </div>

          <div class="business-cat">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business-icon.png" alt="" />
            <h3>ビジネスC</h3>
            <p>
              ビジネスの説明が入ります。ビジネスの説明が入ります。ビジネスの説明が入ります。ビジネスの説明が入ります。
            </p>
          </div>
        </div>
      </div>

      <div id="article" class="wrap">
        <h2 class="section-title">blog</h2>
        <div class="flex">
          <a class="article-cat">
            <img src="img/article_article.jpeg" alt="" />
            <h3>社長の言葉が入ります</h3>
            <p class="category-tag">カテゴリー</p>
            <p class="date-tag">タグ</p>
          </a>

          <a class="article-cat">
            <img src="img/article_article.jpeg" alt="" />
            <h3>社長の言葉が入ります</h3>
            <p class="category-tag">カテゴリー</p>
            <p class="date-tag">タグ</p>
          </a>
          <a class="article-cat">
            <img src="img/article_article.jpeg" alt="" />
            <h3>社長の言葉が入ります</h3>
            <p class="category-tag">カテゴリー</p>
            <p class="date-tag">タグ</p>
          </a>
        </div>
      </div>

      <div id="company" class="mgb-50">
        <h2 class="section-title">company</h2>

        <table class="contain">
          <tr>
            <th>会社名</th>
            <td>株式会社estra</td>
          </tr>
          <tr>
            <th>代表社名</th>
            <td>福場凛太郎</td>
          </tr>
          <tr>
            <th>本社所在地</th>
            <td>東京都渋谷区1-1</td>
          </tr>
          <tr>
            <th>従業員数</th>
            <td>100名</td>
          </tr>

          <tr>
            <th>電話番号</th>
            <td>0120-000-0000</td>
          </tr>
          <tr>
            <th>FAX</th>
            <td>0120-000-0000</td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td>rintaro@estra.inc</td>
          </tr>
          <tr>
            <th>資本金</th>
            <td>1000万円</td>
          </tr>
          <tr>
            <th>事業内容</th>
            <td>コーチング</td>
          </tr>
        </table>
      </div>

      <div class="contact">
        <h2 class="section-title">contact</h2>
        <form class="form" method="post">
          <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="user_name" />
          </div>
          <div>
            <label for="mail">E-mail:</label>
            <input type="email" id="mail" name="user_mail" />
          </div>
          <div>
            <label for="tell">Tell:</label>
            <input type="tell" id="tell" name="user_name" />
          </div>
          <div>
            <label for="msg">Message:</label>
            <textarea id="msg" name="user_message"></textarea>
          </div>
          <div class="button-submit">
            <button class="button" type="submit">Button</button>
          </div>
        </form>
      </div>
    </main>
    <?php get_footer(); ?>