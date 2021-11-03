<div id="photo-search">
    <h2>Search:</h2>
    <form action="<?php get_permalink(); ?>" id="searchform" method="get">
        <div>
            <label for="s" class="screen-reader-text">Search for:</label>
            <input type="text" id="search" name="search" value="" />
            <input type="hidden" name="post_type" value="photo_group" /> 
            <input type="submit" value="Search" id="searchsubmit" />
        </div>
    </form>
	



<?php


if ( isset( $_REQUEST[ 'search' ] ) ) {
          // run search query
          $query = $_REQUEST[ 'search' ];
          
          
		//echo $query;
		
		
		require_once 'openai.php';

$openai = New Openai();

$file = "file-q6sYJFu6AoTVHA71qhoBIFIm";



$openai->search("ada", $file, $query);
		
		
        }




?>


