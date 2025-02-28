<?php
function asset($path)
{
    return BASE_URL . ltrim($path, '/');
}

function truncateText($text, $length = 70)
{
    // Ensure UTF-8 encoding is used for the substr operation
    if (strlen($text) <= $length) {
        return $text;
    }
    return mb_substr($text, 0, $length, 'UTF-8') . '...';
}

function stripTagsKeepUtf8($text)
{
    // Decode HTML entities to restore UTF-8 characters
    $decodedText = html_entity_decode($text, ENT_QUOTES, 'UTF-8');

    // Strip HTML tags
    return strip_tags($decodedText);
}

function formatVietnameseDate($mysqlDate)
{
    // Convert MySQL datetime to a timestamp
    $timestamp = strtotime($mysqlDate);

    // Define month names in Vietnamese
    $months = [
        1 => "Tháng 1",
        2 => "Tháng 2",
        3 => "Tháng 3",
        4 => "Tháng 4",
        5 => "Tháng 5",
        6 => "Tháng 6",
        7 => "Tháng 7",
        8 => "Tháng 8",
        9 => "Tháng 9",
        10 => "Tháng 10",
        11 => "Tháng 11",
        12 => "Tháng 12"
    ];

    // Format date
    $day = date("j", $timestamp);
    $month = $months[(int)date("n", $timestamp)];
    $year = date("Y", $timestamp);

    return "{$day} {$month}, {$year}";
}
