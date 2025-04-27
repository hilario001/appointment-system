<?php
declare(strict_types=1);

function exception_handler(Throwable $ex): void
{
    http_response_code(500);
    exit();
}

function error_handler(int $no, string $str, string $file, int $line)
{
    http_response_code(500);
    exit();
}

set_error_handler("error_handler");
set_exception_handler("exception_handler");
