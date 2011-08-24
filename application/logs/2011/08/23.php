<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-23 16:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Projektid/Sketches/QuickThoughts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-08-23 16:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Projektid/Sketches/QuickThoughts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#3 {main}
2011-08-23 17:00:56 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/dash.php [ 10 ]
2011-08-23 17:00:56 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/dash.php [ 10 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/application/classes/controller/dash.php(10): Kohana_Core::error_handler(8, 'Undefined index...', '/data/Dropbox/P...', 10, Array)
#1 [internal function]: Controller_Dash->action_index()
#2 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dash))
#3 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#6 {main}
2011-08-23 17:01:20 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'www-data'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-08-23 17:01:20 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'www-data'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /data/Dropbox/Projektid/Sketches/QuickThoughts/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /data/Dropbox/Projektid/Sketches/QuickThoughts/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('designs')
#3 /data/Dropbox/Projektid/Sketches/QuickThoughts/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /data/Dropbox/Projektid/Sketches/QuickThoughts/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /data/Dropbox/Projektid/Sketches/QuickThoughts/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /data/Dropbox/Projektid/Sketches/QuickThoughts/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /data/Dropbox/Projektid/Sketches/QuickThoughts/application/classes/controller/dash.php(12): Kohana_ORM::factory('design')
#8 [internal function]: Controller_Dash->action_index()
#9 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dash))
#10 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#13 {main}
2011-08-23 17:06:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Design::get() ~ APPPATH/classes/model/design.php [ 35 ]
2011-08-23 17:06:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Design::get() ~ APPPATH/classes/model/design.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-23 17:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-08-23 17:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#3 {main}
2011-08-23 17:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL c4ca4238a0b923820dcc509a6f75849b was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-08-23 17:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL c4ca4238a0b923820dcc509a6f75849b was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#3 {main}
2011-08-23 17:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dash/look/c4ca4238a0b923820dcc509a6f75849b was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-08-23 17:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dash/look/c4ca4238a0b923820dcc509a6f75849b was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#3 {main}
2011-08-23 17:24:21 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 119 ~ SYSPATH/classes/kohana/route.php [ 392 ]
2011-08-23 17:24:21 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 119 ~ SYSPATH/classes/kohana/route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/data/Dropbox/P...', 392, Array)
#1 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/route.php(392): preg_match('#^(?:(?P<contro...', 'dash/look/c4ca4...', NULL)
#2 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(567): Kohana_Route->matches('dash/look/c4ca4...')
#3 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(785): Kohana_Request::process_uri('dash/look/c4ca4...', Array)
#4 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(198): Kohana_Request->__construct('/dash/look/c4ca...', NULL)
#5 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(108): Kohana_Request::factory()
#6 {main}
2011-08-23 17:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dash/look/c4ca4238a0b923820dcc509a6f75849b was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-08-23 17:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dash/look/c4ca4238a0b923820dcc509a6f75849b was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#3 {main}
2011-08-23 17:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dash/look/c4ca4238a0b923820dcc509a6f75849b was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-08-23 17:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dash/look/c4ca4238a0b923820dcc509a6f75849b was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#3 {main}
2011-08-23 17:33:21 --- ERROR: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/model/design.php [ 13 ]
2011-08-23 17:33:21 --- STRACE: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/model/design.php [ 13 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/application/classes/model/design.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/data/Dropbox/P...', 13, Array)
#1 /data/Dropbox/Projektid/Sketches/QuickThoughts/application/classes/controller/dash.php(16): Model_Design->upload(Array)
#2 [internal function]: Controller_Dash->action_index()
#3 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dash))
#4 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-23 17:33:44 --- ERROR: ErrorException [ 8 ]: Undefined index: screenshot ~ APPPATH/classes/model/design.php [ 13 ]
2011-08-23 17:33:44 --- STRACE: ErrorException [ 8 ]: Undefined index: screenshot ~ APPPATH/classes/model/design.php [ 13 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/application/classes/model/design.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/data/Dropbox/P...', 13, Array)
#1 /data/Dropbox/Projektid/Sketches/QuickThoughts/application/classes/controller/dash.php(16): Model_Design->upload(Array)
#2 [internal function]: Controller_Dash->action_index()
#3 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dash))
#4 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-23 17:38:32 --- ERROR: Kohana_Exception [ 0 ]: Directory DOCROOT/assets/uploads must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2011-08-23 17:38:32 --- STRACE: Kohana_Exception [ 0 ]: Directory DOCROOT/assets/uploads must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/application/classes/model/design.php(13): Kohana_Upload::save(Array, '9f6975ea13', '/data/Dropbox/P...')
#1 /data/Dropbox/Projektid/Sketches/QuickThoughts/application/classes/controller/dash.php(16): Model_Design->upload(Array)
#2 [internal function]: Controller_Dash->action_index()
#3 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dash))
#4 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-23 17:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL c13f3e913f was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-08-23 17:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL c13f3e913f was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#3 {main}
2011-08-23 17:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL c13f3e913f was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-08-23 17:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL c13f3e913f was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /data/Dropbox/Projektid/Sketches/QuickThoughts/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#3 {main}
2011-08-23 17:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Projektid/Sketches/QuickThoughts/assets/uploads/5e1f14ae4b.Array ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-23 17:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Projektid/Sketches/QuickThoughts/assets/uploads/5e1f14ae4b.Array ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-23 17:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Projektid/Sketches/QuickThoughts/assets/uploads/5e1f14ae4b.Array ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-23 17:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Projektid/Sketches/QuickThoughts/assets/uploads/5e1f14ae4b.Array ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-23 17:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Projektid/Sketches/QuickThoughts/assets/uploads/5e1f14ae4b.Array ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-23 17:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Projektid/Sketches/QuickThoughts/assets/uploads/5e1f14ae4b.Array ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /data/Dropbox/Projektid/Sketches/QuickThoughts/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-23 17:47:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH/views/dash/view.php [ 20 ]
2011-08-23 17:47:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH/views/dash/view.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}