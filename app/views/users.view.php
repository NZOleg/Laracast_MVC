<?php include "partials/head.php"; ?>


    <h1>All Users</h1>


      <ul>
<?php foreach ($users as $user): ?>

    <li><?=$user->name;?></li>

<?php endforeach; ?>
    </ul>
<h1>Submit your Name</h1>

    <form action="/users" method="POST">

        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>


<?php include "partials/footer.php"; ?>