<?php include ('./includes/title.inc.php');
$errors = array();
$missing = array();
$to = 'example@mail.rr';
$subject = 'Feedback';
$expected = array('name', 'email', 'comments', 'subscribe');
$required = array('name', 'comments');
require('./includes/mailprocess.inc.php')
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta>
    <title>Title<?php if (isset($title)){echo "&#8212;{$title}";} ?></title>
</head>
<body>
    <h2>Contact us</h2>
    <?php if ($missing || $errors){ ?>
    <p class="warning">Please fix the item(s) indicated</p>
    <?php } ?>
    <form id="feedback" method="post" action="">
        <p>
            <label for="name">Name:
            <?php if ($missing && in_array('name', $missing)) { ?>
                <span class="warning">Please enter your name</span>
                <?php } ?>
            </label>
            <input name="name" id="name" type="text" class="formbox">
        </p>
        <p>
            <label for="email">Email:
                <?php if ($missing && in_array('email', $missing)) { ?>
                    <span class="warning">Please enter your email</span>
                <?php } ?>
            </label>
            <input name="email" id="email" type="text" class="formbox">
        </p>
        <p>
            <label for="comments">Comments:
                <?php if ($missing && in_array('comments', $missing)) { ?>
                    <span class="warning">Please enter your comments</span>
                <?php } ?>
            </label>
            <textarea name="comments" id="comments" cols="60" rows="8"></textarea>
        </p>

    <fieldset id="subscribe">
        <h2>Subscribe to newsletter?</h2>
        <?php if ($missing && in_array('subscribe', $missing)) {?>
        <span class="warning">Please make a selection</span>
        <?php } ?>
        <p>
            <input name="subscribe" type="radio" value="Yes" id="subscribe_yes"
                <?php
                if ($_POST && $_POST['subscribe'] == 'Yes') {
                    echo 'checked';
                } ?>>
            <label for="subscribe_yes">Yes</label>
            <input name="subscribe" type="radio" value="No" id="subscribe_no"
                <?php
                if (!$_POST && $_POST['subscribe'] == 'No') {
                    echo 'checked';
                } ?>>
            <label for="subscribe_no">No</label>
        </p>
    </fieldset>
        <p>
            <input name="send" id="send" type="submit" value="Send message">
        </p>
    </form>
    <pre>
        <?php
        if ($_POST) {print_r($_POST);}
        ?>
    </pre>
</body>