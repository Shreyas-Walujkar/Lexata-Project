# RMIT-Summer-2021

To replace the current search functionality with the GPT3 semantic search, 
there are two files:

1) searchform.php: [disabled; default generatepress searchform.php is being used as of 9/6/2021; instead see generatepress_child/search.php
* This file contains the php code which accepts the search term from the user and sends it to the openai.php.

2) openai.php :
* This file contains the php wrapper for openai GPT3.
* It calls the semantic search api with the file_id , search query and other parameters. 
