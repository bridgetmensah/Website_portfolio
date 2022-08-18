<?php

/*
| -------------------------------------------------------------------------
| Configure Sylynder Database Root Path
| -------------------------------------------------------------------------
| This path is where you will store
| All your JSON files
|
 */

$config['sylynder_db_path'] = (env('database.sylynder.path')) ? ROOTPATH . env('database.sylynder.path') : PACKAGEPATH . 'SylynderDb' .DS. 'Storage';
