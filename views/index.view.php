
<!Doctype html>

<html lang="en">
<head>
  <meta charset="uTF-8">
  <title>Document</title>

</head>

<body>

  <nav>

    <ul>

        <li><a href="/aboutus.php">About page</a></li>

        <li><a href="/Contact.php">Contact page</a></li>

    </ul>

  </nav>

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
