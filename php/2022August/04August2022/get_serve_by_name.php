<?php
    echo getservbyname("imap", "tcp"); //http,https, ftp,imap,pop3, ssh
    echo "<br>";
    echo getservbyport("80", "tcp"); //http,https, ftp,imap,pop3, ssh



?>