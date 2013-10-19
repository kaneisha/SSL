<h1>Style News Today</h1>

<?



$style = simplexml_load_file('http://www.style.com/homepage/rss');
$st = $style->channel;
echo '<div id="news">';
foreach($st->item as $news):
		$title=$news->title;
		$link=$news->link;
		$descri=$news->description;
		$date=$news->pubDate;
		
		echo '<b><a id="news_title" href="'.$link.'">'.$title.'</a></b><br>';
		echo $date . '<br>';
		echo '<p id="descrip">'.$descri.'</p><br><br>';
		
	endforeach;
echo '</div>';

?>