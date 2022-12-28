<?php


/* Tabelle artikel  ( string $name, string $type, boolean $nullable = false, null|string $default = null, null|string $extra = null ) */
rex_sql_table::get('rex_rexstansqltest')
    ->ensureColumn(new rex_sql_column('idrexstansqltest', 'int(12)', false, null, 'AUTO_INCREMENT'))
    ->ensureColumn(new rex_sql_column('pw_vergesskey', 'varchar(255)'))
    ->ensureColumn(new rex_sql_column('updatedate', 'timestamp', false, 'CURRENT_TIMESTAMP', 'ON UPDATE CURRENT_TIMESTAMP'))
    ->ensureColumn(new rex_sql_column('createdate', 'timestamp', false, 'CURRENT_TIMESTAMP'))
    ->setPrimaryKey('idrexstansqltest')
    ->ensure();
