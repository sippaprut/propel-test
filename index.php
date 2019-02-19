<?php 
require_once dirname(__FILE__) . '/vendor/autoload.php';
require_once dirname(__FILE__) . '/generated-conf/config.php';

$title = 'PHP BOOK';
$book = new Book();
$book->setTitle($title);
$book->setISBN('1001');
$book->save();

// echo $book->getId();
//$bookQuery = new BookQuery();
// $data = BookQuery::create()
//   ->filterByTitle('Test Book')
//   ->find();

//  var_dump($data);

// foreach($data as $item) {
//     echo "Title = " . $item->getTitle();
// }


BookQuery::create()->findPk($book->getId())->delete();