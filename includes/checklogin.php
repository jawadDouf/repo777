<?php
if (!$_SESSION['login']) {
    header('location: ../Randez-vous.php');
}