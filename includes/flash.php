<?php
declare(strict_types=1);

function session_retrieve_var(string $var): mixed
{
    if (!isset($_SESSION[$var])) {
        return NULL;
    }

    $tmp = $_SESSION[$var];
    unset($_SESSION[$var]);

    return $tmp;
}

function session_render_var(string $var, ?string $tag = "p", ?string $selector = ""): void
{
    $value = session_retrieve_var($var);

    if (!isset($value)) {
        return;
    }

    echo "<" . tag . " class=" . "$selector >" . $value . "</tag>";
}
