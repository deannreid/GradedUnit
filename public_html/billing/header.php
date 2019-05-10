<?php
// we generate the navbar components in case they weren't before
if ($page->navbar == array()) {
    $page->navbar = $presets->GenerateNavbar();
}

if (!$user->islg()) { // if it's not logged in we hide the user menu
    unset($page->navbar[count($page->navbar) - 1]);
}
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>XenoHost - Fast | Reliable | Affordable</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="../assets/css/hosting.css" rel="stylesheet" media="all">
    <script src="../assets/js/modernizr.js"></script>
</head>


<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php"> <img src="../assets/images/logo.png" alt="logo"></a> 
            </div>          
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
<?php
    foreach ($page->navbar as $key => $v) {
                        //Single Button Item
        if ($v[0] == 'item') {
            echo "  <li" . ($v[1]['class'] ? " class='" . $v[1]['class'] . "'" : "") . ">
                    <a href='" . $v[1]['href'] . "'>" . $v[1]['name'] . "</a></li>
            ";
        } else if ($v[0] == 'dropdown') {
            echo "  <li class='dropdown".
                    ($v['class'] ? " " . $v['class'] : "") . "'" . ">
                    <a href='#' class='dropdown' data-toggle='dropdown'>" . $v['name'] . " <b class='caret'></b></a>
                    <ul class='dropdown-menu'>
            ";
            foreach ($v[1] as $k => $v) {
                    echo"  <li" .
                            ($v['class'] ? " class='" . $v['class'] . "'" : "") . ">
                            <a href='" . $v['href'] . "'>" . $v['name'] . "</a></li>
                        ";
                }
                echo"
                    </li> 
                    </ul>
                ";
        }
    }
    if (!$user->islg()) {
        echo "
                <a class=\"btn btn-large\" href=\"$set->url/login.php\">Login</a>
                <a class=\"btn btn-success\" href=\"$set->url/register.php\">Sign Up</a>
        ";
    }

    echo "
        </div>
	</div>
        </nav>
    ";


    if ($user->data->banned) {

        // we delete the expired banned
        $_unban = $db->getAll("SELECT `userid` FROM `" . MLS_PREFIX . "banned` WHERE `until` < " . time());
        if ($_unban){
            foreach ($_unban as $_usr) {
                $db->query("DELETE FROM `" . MLS_PREFIX . "banned` WHERE `userid` = ?i", $_usr->userid);
                $db->query("UPDATE `" . MLS_PREFIX . "users` SET `banned` = '0' WHERE `userid` = ?i", $_usr->userid);
            }
        }

        $_banned = $user->getBan();
        if ($_banned){
            $options->error(
                "You were banned by <a href='$set->url/profile.php?u=$_banned->by'>" . $user->showName($_banned->by) . "</a> for `<i>" . $options->html($_banned->reason) . "</i>`.
                 Your ban will expire in " . $options->tsince($_banned->until, "from now.") . "
            ");
        }

        if ($user->islg() && $set->email_validation && ($user->data->validated != 1)) {
            $options->fError("Your account is not yet acctivated ! Please check your email !");
        }

        if (isset($_SESSION['success'])) {
            $options->success($_SESSION['success']);
            unset($_SESSION['success']);
        }
        
        if (isset($_SESSION['error'])) {
            $options->error($_SESSION['error']);
            unset($_SESSION['error']);
        }
flush(); // we flush the content so the browser can start the download of css/js