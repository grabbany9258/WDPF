<?php
$domain = "prothomalo.com";
$recordexists = checkdnsrr($domain, "ANY");

print_r($recordexists);
if ($recordexists) //muli line a {} is required.. single line a na holeo chole..
echo "The domain '$domain' has a DNS record!";
else
echo "The domain '$domain' does not appear to have a DNS record!";
?>