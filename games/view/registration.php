<?php
// So I don't have to deal with unset $_REQUEST['user'] when refilling the form
// You can also take a look at the new ?? operator in PHP7

$_REQUEST['user']=!empty($_REQUEST['user']) ? $_REQUEST['user'] : '';
$_REQUEST['password']=!empty($_REQUEST['password']) ? $_REQUEST['password'] : '';
?>
<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="utf-8">
                <link rel="stylesheet" type="text/css" href="style.css" />
                <title>Games</title>
        </head>
        <body>
                <header><h1>Games</h1></header>
                <!--
                <nav>
                        <ul>
                        <li> <a href="">Class</a>
                        <li> <a href="">Profile</a>
                        <li> <a href="">Logout</a>
                        </ul>
                </nav>
                -->
                <main>
                        <h1>Registration</h1>
                        <form action="index.php" method="post">
                                <legend>Register</legend>
                                <table>
                                        <!-- Trick below to re-fill the user form field -->
                                        <tr><th><label for="user">User</label></th><td><input type="text" name="user" value="<?php echo($_REQUEST['user']); ?>" /></td></tr>
                                        <tr><th><label for="password">Password</label></th><td> <input type="password" name="password" /></td></tr>
                                        <tr><th>&nbsp;</th><td><input type="submit" name="submit" value="register" /></td></tr>
                                        <tr><th>&nbsp;</th><td><?php echo(view_errors($errors)); ?></td></tr>
                                </table>
                        </form>
                        <form action="index.php" method="post">
                                <input type="submit" name="new" value="login"/>
                        </form>
                </main>
                <footer>
                </footer>
        </body>
</html>
