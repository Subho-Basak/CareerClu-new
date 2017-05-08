<?php

function validateInput($param) {
    return !is_null($param) && isset($param);
}

?>