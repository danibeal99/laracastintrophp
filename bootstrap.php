<?php

require 'config.php';

require 'database/connections.php';

require 'database/QueryBuilder.php';

return new QueryBuilder(connection::make());
