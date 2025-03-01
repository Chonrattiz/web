<?php

declare(strict_types=1);

function renderView(string $template, string $nav ,array $data = []): void
{
   include TEMPLATES_DIR . '/' . $nav . '.php';
    include TEMPLATES_DIR . '/' . $template . '.php';
   // include TEMPLATES_DIR . '/footer.php';
}
