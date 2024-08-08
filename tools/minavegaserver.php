<?php
// Copyright (C) 2004-2024 Murilo Gomes Julio
// SPDX-License-Identifier: GPL-2.0-only

// Mestre da Info
// Site: https://www.mestredainfo.com.br

$sock = socket_create_listen(0);
socket_getsockname($sock, $addr, $port);
echo $port;
socket_close($sock);