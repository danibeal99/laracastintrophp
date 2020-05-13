
<?php require ('partials/head.php'); ?>

  <!Doctype html>

<html lang="en">
<head>
  <meta charset="uTF-8">
  <title>Document</title>

</head>

<body>


    <h1>My Tasks</h1>

  <?php foreach ($tasks as $task) :?>

    <li>

      <?php if ($task->completed) : ?>

        <strike><?= $task->description; ?></strike>

      <?php else: ?>

      <?= $task->description; ?>

    <?php endif; ?>


    </li>

  <?php endforeach; ?>

  </ul>

</body>

</html>

<?php require ('partials/footer.php'); ?>
