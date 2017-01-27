<?php
  echo '<table class="rss-table">';
  $dom = domxml_open_file("../news.xml");;
  $array_element = $dom->get_elements_by_tagname('item');

if ($array_element)
{
    for ($i=0;$i<count($array_element);$i++)
    {
		echo '<tr>';
		echo '<td>';
		
		$links = $array_element[$i]->get_elements_by_tagname('link');
		$link = $links[0]->get_content();
        $titles = $array_element[$i]->get_elements_by_tagname('title');
		$title = $titles[0]->get_content();
        $descriptions = $array_element[$i]->get_elements_by_tagname('description');
		$description = $descriptions[0]->get_content();
        $pubDate = $array_element[$i]->get_elements_by_tagname('pubDate');
		$pubDate = $pubDate[0]->get_content();
		$pubDate = strftime("%d-%m-%Y", strtotime($pubDate));
		
		echo '<p class="rss-title"><a href="' . $link . '">';
		echo $title;	
		echo '</a></p>';

		echo '<p class="rss-description">';	
		echo $description;
		echo '</p>';	
		
		echo '<p class="rss-date">';	
		echo $pubDate;
		echo '</p>';			
	
		echo '</td>';
		echo '</tr>';		
    }
}  
  echo '</table>';
?>
