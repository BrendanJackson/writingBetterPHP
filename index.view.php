<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 9/30/16
 * Time: 12:21 AM
 * Things I'll display on screen
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Writing Better PHP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <h1>My Todo List</h1>
    <ul>

  <?php foreach ($tasks as $task) : ?>
    <?php if($task->completed) : ?>
      <s>
    <?php endif; ?>

    <li><?= $task->description ?></li>

      <?php if($task->completed) : ?>
      </s>
    <?php endif; ?>
  <?php endforeach;?>
    </ul>
</body>
</html