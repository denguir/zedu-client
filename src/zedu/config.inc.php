<?php

define('INSTALL_DIR', dirname(__FILE__));

// base de données principale
define('NOM', 'root');
define('MDP', $_ENV["MYSQL_ROOT_PASSWORD"]);
define('SERVEUR', $_ENV["MYSQL_HOST"]);
define('BASE', $_ENV["MYSQL_DATABASE"]);
