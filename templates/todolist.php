<!DOCTYPE html>
<html lang="eng">

<body>
<h1>To-Do List</h1>
<div class="addtolist">
    <form action="/addtolist" class="addtolistform" method="post">
        <label>Add to the list: <input type="text" name="newlistitem"></label>
        <button class="addToListButton" type="submit"> Add to List</button>
    </form>
</div>

    <?php
//    echo '<pre>';
//    echo var_dump($listItems);
//    echo '</pre>';
//    exit();
    echo \App\ViewHelpers\ToDoListViewHelper::generateList($listItems);
    ?>

</body>
</html>
