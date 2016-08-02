<?php
require ("src/OpenTok/OpenTok.php");
use OpenTok\OpenTok;
use OpenTok\MediaMode;
use OpenTok\ArchiveMode;
$apiKey="45622782";
$apiSecret="79d603a5cb388eadcc3345bb9621a6a55622fdd2";

$opentok = new OpenTok($apiKey, $apiSecret);
// An automatically archived session:
$sessionOptions = array(
    'archiveMode' => ArchiveMode::ALWAYS,
    'mediaMode' => MediaMode::ROUTED,
    'location' => '192.168.0.102'
);
$session = $opentok->createSession($sessionOptions);


// Store this sessionId in the database for later use
$sessionId = $session->getSessionId();
echo $sessionId;
?>