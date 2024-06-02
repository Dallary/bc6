<?php
function dif_XSS($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}