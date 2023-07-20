<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>To-Do List</title>

    <meta name="description" content="To-Do List">
    <meta name="author" content="Brent Miller">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Playfair+Display&family=Ubuntu&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="./normalize.css">
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
<form action="/markasdone" method="post"><button class="togglelist">View Incomplete</button></form>
<h1>Completed Tasks</h1>

<?php
//    echo '<pre>';
//    echo var_dump($listItems);
//    echo '</pre>';
//    exit();
echo \App\ViewHelpers\ToDoListViewHelper::generateList($listItems);
?>

</body>
</html>
