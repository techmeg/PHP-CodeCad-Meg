<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Document</title>

  <style>
    header {
      background: #e3e3e3;
      padding: 2em;
      text-align: center;
    }
  </style>
</head>

<body>
  <h1> Task for the day. </h1>
  <ul>

    <li> <strong>Task Name: </strong><?= ucwords($task['title']); ?> </li>
    <li> <strong>Due Date: </strong><?= ucwords($task['due']); ?> </li>
    <li> <strong>Person Responsible: </strong><?= ucwords($task['assigned_to']); ?> </li>
    <li> <strong>Status: </strong><?= ucwords($task['completed'] ? "&#9989" : "Incomplete"); ?> </li>


  </ul>

</body>

</html>