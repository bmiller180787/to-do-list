<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Slim 4</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>

<body>
<h1>To-Do List</h1>
<div>
    <form class="addtolist" method="post" target="./todolist">
        <label>Add to the list: <input type="text"></label>
    </form>
    <?php

    foreach ($listItems as $listitem) {
echo '<p>' . $listitem->getListItem . '</p>';
echo '<button class="button" type="button">Mark as Complete</button>';

    }

    ?>
</div>
<div>

</div>

</body>
</html>