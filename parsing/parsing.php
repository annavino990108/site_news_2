<?php
function Habr()
     {
	$file=file_get_contents('https://habr.com/ru/all/');
	$doc = phpQuery::newDocument($file);
	 foreach ($doc->find('.posts_list .post_preview') as $article) {
			$article=pq($article);
			$img=$article->find('.js-mediator-article img')->attr('src');
			$title=$article->find('.post__title')->html();
			$time=$article->find('.post__time')->html();
			$a=$article->find('.post__title a')->attr('href');

			echo "<div class='card'>";
			echo "<div class='row1'><a href='$a'>";
			if($img==''){echo "<img src='images/logo_habr.jpg' class='pic_news'>";}
			echo "<img src='$img'class='pic_news'></a>";
			echo "</div>";
			echo "<div class='container'>";
			echo "<div class='row2'>";
			echo "<h4 id='title'><a href='$a'>".($title)."</a></h4>";
			echo "</div>";
			echo "<div class='row3'>";
		 	echo '<p id="date"><i>'.($time).'</i></p>';
		 	echo '<p id="date"><i>Habr.com</i></p>';
		 	echo "</div>";
		 	echo "</div>";
		 	echo "</div>";
 }}

 function Horror()
     {
	$file=file_get_contents('http://horrorzone.ru/category/movie-news');
	$doc = phpQuery::newDocument($file);
	 foreach ($doc->find('.content-wrap div .') as $article) {
			$article=pq($article);
			$img=$article->find('img')->attr('data-src');
			$title=$article->find('.title a')->html();
			$time=$article->find('p i')->html();
			$a=$article->find('.title a')->attr('href');

		 	echo "<div class='card'>";
			echo "<div class='row1'><a href='$a'>";
			if($img==''){echo "<img data-src='images/horror.png' class='pic_news'>";}
			echo "<img src='$img'class='pic_news'></a>";
			echo "</div>";
			echo "<div class='container'>";
			echo "<div class='row2'>";
			echo "<h4 id='title'><a href='$a'>".($title)."</a></h4>";
			echo "</div>";
			echo "<div class='row3'>";
		 	//echo '<p id="date"><i>'.($time).'</i></p>';
		 	echo '<p id="date"><i>Horrorzone.ru</i></p>';
		 	echo "</div>";
		 	echo "</div>";
		 	echo "</div>";
 }}

 function Kt()
     {
	$file=file_get_contents('https://kostroma.today/');
	$doc = phpQuery::newDocument($file);
	 foreach ($doc->find('.news-container .news-line .item-news') as $article) {
			$article=pq($article);
			$img=$article->find('.content-post a div')->attr(style);
			$title=$article->find('.short-post-body h3')->html();
			$time=$article->find('.short-post-body .data-post span')->html();
			$a=$article->find('.content-post a')->attr('href');

		 	echo "<div class='card'>";
			echo "<div class='row1'><a href='$a'>";
			if($img==''){echo "<img src='images/logo_habr.jpg' class='pic_news'>";}
			echo "<div class='pic_news_fon' style='$img'></div></a>";
			echo "</div>";
			echo "<div class='container'>";
			echo "<div class='row2'>";
			echo "<h4 id='title'><a href='$a'>".($title)."</a></h4>";
			echo "</div>";
			echo "<div class='row3'>";
		 	echo '<p id="date"><i>'.($time).'</i></p>';
		 	echo '<p id="date"><i>Kostroma.today</i></p>';
		 	echo "</div>";
		 	echo "</div>";
		 	echo "</div>";
 }}

 function Newsru()
     {
	$file=file_get_contents('https://www.newsru.com/');
	$doc = phpQuery::newDocument($file);
	 foreach ($doc->find('.left-feed-item') as $article) {
			$article=pq($article);
			$img=$article->find('.left-feed-img img')->attr('src');
			$title=$article->find('.left-feed-title a')->html();
			$time=$article->find('.post__time')->html();
			$a=$article->find('.left-feed-img a')->attr('href');
			if (strpos($a, 'https') == 0) {$a='https://www.newsru.com/'.$a;}

			echo "<div class='card'>";
			echo "<div class='row1'><a href='$a'>";
			if($img==''){echo "<img data-src='images/horror.png' class='pic_news'>";}
			echo "<img src='$img'class='pic_news'></a>";
			echo "</div>";
			echo "<div class='container'>";
			echo "<div class='row2'>";
			echo "<h4 id='title'><a href='$a'>".($title)."</a></h4>";
			echo "</div>";
			echo "<div class='row3'>";
		 	echo '<p id="date"><i>'.($time).'</i></p>';
		 	echo '<p id="date"><i>Newsru.com</i></p>';
		 	echo "</div>";
		 	echo "</div>";
		 	echo "</div>";
 }}

 function Sports()
     {
	$file=file_get_contents('https://www.sports.ru/');
	$doc = phpQuery::newDocument($file);
	 foreach ($doc->find('.material-list_last-item_border_none .material-list__item') as $article) {
			$article=pq($article);
			$img=$article->find('.material-list__item-img ')->attr('src');
			$title=$article->find('h2')->html();
			$time=$article->find('time')->html();
			$a=$article->find('h2 a')->attr('href');

		 	echo "<div class='card'>";
			echo "<div class='row1'><a href='$a'>";
			if($img==''){echo "<img src='images/logo_sports.png' class='pic_news' >" ;}
			echo "<img src='$img'class='pic_news'></a>";
			echo "</div>";
			echo "<div class='container'>";
			echo "<div class='row2'>";
			echo "<h4 id='title'><a href='$a'>".($title)."</a></h4>";
			echo "</div>";
			echo "<div class='row3'>";
		 	echo '<p id="date"><i>'.($time).'</i></p>';
		 	echo '<p id="date"><i>Sports.ru</i></p>';
		 	echo "</div>";
		 	echo "</div>";
		 	echo "</div>";
 }}

 function Yandex()
     {
	$file=file_get_contents('https://news.yandex.ru/?clid=2064395&win=168');
	$doc = phpQuery::newDocument($file);
	 foreach ($doc->find('.stories-set__items .stories-set__item .story_view_compact') as $article) {
			$article=pq($article);
			$img=$article->find('.story__topic .story__image .story__image-container img')->attr('src');
			$title=$article->find('.story__title a')->html();
			$a=$article->find('.story__title a')->attr('href');
			$time=$article->find('.story__info .story__date')->html();

			if (strpos($a, 'https') == 0) {$a='https://news.yandex.ru'.$a;}

			echo "<div class='card'>";
			echo "<div class='row1'><a href='$a'>";
			if($img==''){echo "<img src='images/logo_sports.png' class='pic_news' >" ;}
			echo "<img src='$img'class='pic_news'></a>";
			echo "</div>";
			echo "<div class='container'>";
			echo "<div class='row2'>";
			echo "<h4 id='title'><a href='$a'>".($title)."</a></h4>";
			echo "</div>";
			echo "<div class='row3'>";
		 	echo '<p id="date"><i>'.($time).'</i></p>';
		 	echo '<p id="date"><i>Yandex.ru</i></p>';
		 	echo "</div>";
		 	echo "</div>";
		 	echo "</div>";
 }}
?>