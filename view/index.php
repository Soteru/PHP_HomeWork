<html>
<head>
    <meta charset="UTF-8">
    <title>ToDo List</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/floating-labels/floating-labels.css" rel="stylesheet">
</head>
<body>
<div id="user" class="form-signin fixed-top">
    <?php
    if(isset($_SESSION['user'])) { ?>
    <h3 class="clr">Hello, <?php echo $_SESSION['user']; ?>!</h3>
<hr>
    <form method="POST" action="./logout.php">
        <input type="hidden" name="login" value=" <?php echo $_SESSION['user']; ?> ">
        <button class=" btn-sm btn-outline-danger " type="submit">Logout</button>
    </form>
</div>

<div class="form-signin">
    <?php if(isset($_SESSION['user'])) { ?>
        <?php if(!empty($todoModel->getTodos())) { ?>
            <ul class="input-group">
                <?php foreach ($todoModel->getTodos() as $i => $todo) { ?>
                    <li class="col-sm-7" >
                        <?php if ($todo['status']) { echo '<s>'; } ?>
                        <?php echo $todo['text']; ?>
                        <?php if ($todo['status']) { echo '</s>'; } ?>
                    </li>
                    <form method="POST" action="status.php">

                        <input type="hidden" name="index" value="<?php echo $i; ?>">
                        <input type="submit" class=" btn btn-outline-dark  " value="Change Status">

                    </form>
                <?php } ?>
            </ul>
        <?php }else{ ?>
            <h5 class="h5 mb-2 font-weight-normal text-center "><?php echo 'Your Todo List is empty!';?></h5>
        <?php } } ?>
    <form method="POST" action="/">
        <input type="text" name="text" class="form-control">
        <input type="submit" class=" btn-outline-primary btn-sm btn-block " value="Add Todo">
    </form>
</div>
<fieldset>
<?php } else { ?>
    <a href="/login.php" class=" btn btn-outline-success btn-block " role="button" aria-pressed="true">Login</a><br>
    <a href="/register.php" class=" btn btn-outline-success btn-block " role="button" aria-pressed="true">Register</a>

<?php } ?>
</fieldset>

</body>
</html>