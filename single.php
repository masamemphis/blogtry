<?php get_header(); ?>
<?php // ブログ記事を表示する start ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php // タイトルを表示する start ?>
    <h1 class="blog-detail__title"><?php the_title(); ?></h1>
    <?php // タイトルを表示する end ?>

    <?php // アイキャッチ画像を表示する start ?>
    <?php if(has_post_thumbnail()): ?>
    <div class="blog-detail__image">
        <img src="<?php the_post_thumbnail_url('large'); ?>">
    </div>
    <?php endif; ?>
    <?php // アイキャッチ画像を表示する end ?>

    <?php // 本文を表示する start ?>
    <div class="blog-detail__body">
        <div class="blog-content"><?php echo the_content(); ?></div>
    </div>
    <?php // 本文を表示する end ?>

<?php endwhile; endif; ?>
<?php // ブログ記事を表示する end ?>
    <div id="pager-autopagerize">
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