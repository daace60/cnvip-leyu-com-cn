<?php

/**
 * Renders an HTML link card for a promotional link.
 *
 * @param string $url         The target URL.
 * @param string $title       The title text for the card.
 * @param string $description A short description.
 * @param string $keyword     A keyword to highlight.
 * @return string Escaped HTML string.
 */
function renderLinkCard(
    string $url = 'https://cnvip-leyu.com.cn',
    string $title = '乐鱼体育 — 精彩赛事尽在掌握',
    string $description = '汇聚全球顶级体育赛事，实时比分、深度数据，畅享极致观赛体验。',
    string $keyword = '乐鱼体育'
): string {
    $safeUrl = htmlspecialchars($url, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $safeTitle = htmlspecialchars($title, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $safeDesc = htmlspecialchars($description, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $safeKeyword = htmlspecialchars($keyword, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    $html = '<div class="link-card">' . "\n";
    $html .= '    <a href="' . $safeUrl . '" target="_blank" rel="noopener noreferrer">' . "\n";
    $html .= '        <div class="card-content">' . "\n";
    $html .= '            <span class="card-keyword">' . $safeKeyword . '</span>' . "\n";
    $html .= '            <h3 class="card-title">' . $safeTitle . '</h3>' . "\n";
    $html .= '            <p class="card-description">' . $safeDesc . '</p>' . "\n";
    $html .= '        </div>' . "\n";
    $html .= '    </a>' . "\n";
    $html .= '</div>' . "\n";

    return $html;
}

/**
 * Example usage: renders a default link card.
 */
function exampleLinkCardUsage(): void {
    $cardHtml = renderLinkCard();
    echo $cardHtml;
}

// Uncomment the line below to see the rendered card:
// exampleLinkCardUsage();