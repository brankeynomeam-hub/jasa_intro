<?php
$url = "https://dl.dafont.com/dl/?f=speed_beast";
$zipFile = "speed_beast.zip";

$options = [
    "http" => [
        "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36\r\n" .
                    "Referer: https://www.dafont.com/\r\n" .
                    "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8\r\n"
    ]
];

$context = stream_context_create($options);
$data = file_get_contents($url, false, $context);

if ($data !== false) {
    file_put_contents($zipFile, $data);
    echo "Download success, size: " . strlen($data) . " bytes\n";
    
    // Extract zip
    $zip = new ZipArchive;
    if ($zip->open($zipFile) === TRUE) {
        $zip->extractTo('public/fonts/speed_beast/');
        $zip->close();
        echo "Extracted successfully.\n";
    } else {
        echo "Failed to open zip.\n";
    }
} else {
    echo "Failed to download.\n";
}
unlink($zipFile);
?>
