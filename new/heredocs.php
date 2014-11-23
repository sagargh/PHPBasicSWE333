<?php

$post = array(
		'author'  => 'Alamgir Kabir',
		'title'   => 'My First Post',
		'body'    => 'Here is the body',
		'publish-date' => '5-11-2014',
		'category' => 'personal'
		);

$email = "<h1>{$post['title']}</h1><p>By: {$post['author']}</p><div>{$post['body']}"; 
//echo $email; //My First Post....

$email = "<h1>{$post['title']}</h1>";
$email .="<p>By: {$post['author']}</p>";
$email .="<div>{$post['body']}</div>";
//echo $email;

//output will be same as previous

$email = sprintf("<h1>%s</h1><p>%s</p><div>%s</div>",$post['title'],$post['author'],$post['body']);
//echo $email;//output as previous
extract($post);
// $email = <<<EOT
// <h1>{$post['title']}</h1>
// <p>By: {$post['author']} with the {$post['category']} category </p>


// <div>{$post['body']}</div>
// EOT;
// echo $email;//output will be same


//echo $body;//Here is the body
//thats means we can use all variables by using extract()

$email = <<<EOT
<h1>$title</h1>
<p>By: $author with the $category </p>


<div>$body</div>
EOT;
echo $email;//output will be same



