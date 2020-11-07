<?php
// get host name from URL
preg_match('@^(?:http://)?([^/]+)@i',
    "http://www.sdev253.net/home.html", $matches);
$hostname = $matches[1];

// get last two segments of host name
preg_match('/[^.]+\.[^.]+$/', $hostname, $matches);
echo "domain name is: {$matches[0]}\n";
?>