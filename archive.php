<?php get_header(); ?>
<?php // ブログの一覧を表示する start ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="blog-list__list-item">
        <a href="<?php the_permalink(); ?>" class="blog-item">
            <?php // アイキャッチを表示させる start ?>    
            <div class="blog-item__thumbnail">
                <?php if(has_post_thumbnail()): ?>
                <img class="blog-item__thumbnail-image" src="<?php the_post_thumbnail_url('large'); ?>">
                <?php endif; ?>
            </div>
            <?php // アイキャッチを表示させる end ?>
            <div class="blog-item__content">
                <?php // タイトルを表示させる start ?>
                <h3 class="blog-item__title"><?php the_title(); ?></h3>
                <?php // タイトルを表示させる end ?>
                <?php // 抜粋を表示させる start ?>
                <h3 class="blog-item__read"><?php the_excerpt(); ?></h3>
                <?php // 抜粋を表示させる end ?>
                <div class="blog-item__button">
                    <span class="blog-item__button-more">記事を読む</span>
                </div>
            </div>
        </a>
    </article>
<?php endwhile; endif; ?>
<?php // ブログの一覧を表示する end ?>    <div id="pager-autopagerize">
      <span class="pageritem">
        <a href="singlepage.html" rel="before">＜　前のページ</a>
      </span>
      <span class="pageritem">
        <a href="singlepage.html" rel="next">次のページ　＞</a>
      </span>
    </div>
  </section>
    <aside>
      <form method="get" action="https://www.maroojap.com/test/" class="search-form"> 
        <div class="flex">
          <span class="icon-search"> </span>
          <input id="sbox2"  id="s" name="s" type="text" placeholder=""/>
      </div>
      </form>
      <ul class="sub-menu">
        <h3 class="sub-title">最近の投稿</h3>
        <li><a href="singlepage.html">ページタイトル<div class="triangle"></div></a></li>
        <li><a href="singlepage.html">ページタイトル<div class="triangle"></div></a></li>
        <li><a href="singlepage.html">ページタイトル<div class="triangle"></div></a></li>
        <li><a href="singlepage.html">ページタイトル<div class="triangle"></div></a></li>
      </ul>
      <ul class="sub-menu">
        <h3 class="sub-title">カテゴリー</h3>
        <li><a href="category.html">カテゴリー名<div class="triangle"></div></a></li>
        <li><a href="category.html">カテゴリー名<div class="triangle"></div></a></li>
        <li><a href="category.html">カテゴリー名<div class="triangle"></div></a></li>
        <li><a href="category.html">カテゴリー名<div class="triangle"></div></a></li>
      </ul>

   </aside>
  </div>
  <?php get_footer();