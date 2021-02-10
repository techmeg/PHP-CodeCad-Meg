<?php require('partials/head.php'); ?>

<!-- <h1>Submit Your Name</h1>

<form method="POST" action="/names">
  <input name="name"></input>
  <button type="submit"> Submit</button>
</form> -->

<h1>Submit New Task</h1>

<form method="POST" action="/tasks">
  <input name="task" type="text"></input>
  <button type="submit"> Submit</button>
</form>

<?php require('partials/footer.php'); ?>