<?php
$sock = socket_create_listen(0);
socket_getsockname($sock, $addr, $port);
echo $port;
socket_close($sock);