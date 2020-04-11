
<!Doctype html>

<html lang="en">
<head>
  <meta charset="uTF-8">
  <title>Document</title>

</head>

<body>

  <h1>Task for the day</h1>

  <ul>

      <li>
          <strong>Name:</strong><?=$task['title'];?>
      </li>

      <li>
          <strong>Dute Date:</strong><?=$task['due'];?>
      </li>

      <li>
          <strong>Person responsible:</strong><?=$task['Assigned_to'];?>
      </li>

      <li>

        <strong>Assignment completed:</strong>

        <?php if($task['Completed']) : ?>

          <span class="icon">&#9989;</span>
        <?php else: ?>

          <span class="icon">&#9940;</span>


    <?php  endif;?>


      </li>

  </ul>

</body>

</html>
