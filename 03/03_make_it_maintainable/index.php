<?php
declare(strict_types=1);

/*
    Lab Two – Make It Maintainable (Refactored)

    One thing I learned from this lab is that moving repeated HTML patterns into
    small functions makes future updates faster and reduces mistakes in my course project.
*/

// --------------------
// "Config" / Data
// --------------------
$pageTitle = "My PHP Page";
$year = (int)date("Y");

$navItems = [
    "Home" => "#home",
    "About" => "#about",
    "Contact" => "#contact",
];

// --------------------
// Helpers (behavior)
// --------------------
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}

function renderNav(array $items): string
{
    $html = "<ul>\n";
    foreach ($items as $label => $href) {
        $html .= "    <li><a href=\"" . e((string)$href) . "\">" . e((string)$label) . "</a></li>\n";
    }
    $html .= "</ul>\n";
    return $html;
}

function renderFooter(int $year): string
{
    return "<footer>\n    <p>&copy; " . $year . "</p>\n</footer>\n";
}

// --------------------
// Page output (structure)
// --------------------
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= e($pageTitle) ?></title>
</head>
<body>

<h1>Welcome</h1>

<nav>
    <?= renderNav($navItems) ?>
</nav>

<?= renderFooter($year) ?>

</body>
</html>
