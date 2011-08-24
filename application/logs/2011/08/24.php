<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-24 16:57:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Auth::$auth ~ APPPATH/classes/controller/auth.php [ 20 ]
2011-08-24 16:57:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Auth::$auth ~ APPPATH/classes/controller/auth.php [ 20 ]
--
#0 /data/Dropbox/Projektid/Sketches/kohana-twitter/application/classes/controller/auth.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/data/Dropbox/P...', 20, Array)
#1 [internal function]: Controller_Auth->action_login()
#2 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#3 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /data/Dropbox/Projektid/Sketches/kohana-twitter/index.php(109): Kohana_Request->execute()
#6 {main}
2011-08-24 16:57:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 43 ]
2011-08-24 16:57:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 43 ]
--
#0 /data/Dropbox/Projektid/Sketches/kohana-twitter/application/views/template.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/data/Dropbox/P...', 43, Array)
#1 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/view.php(61): include('/data/Dropbox/P...')
#2 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/view.php(343): Kohana_View::capture('/data/Dropbox/P...', Array)
#3 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /data/Dropbox/Projektid/Sketches/kohana-twitter/index.php(109): Kohana_Request->execute()
#9 {main}
2011-08-24 16:58:31 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
2011-08-24 16:58:31 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
--
#0 /data/Dropbox/Projektid/Sketches/kohana-twitter/application/classes/controller/auth.php(36): Kohana_Auth->hash('admin')
#1 [internal function]: Controller_Auth->action_login()
#2 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#3 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /data/Dropbox/Projektid/Sketches/kohana-twitter/index.php(109): Kohana_Request->execute()
#6 {main}
2011-08-24 17:16:32 --- ERROR: ErrorException [ 1 ]: Class 'Auth_Database' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
2011-08-24 17:16:32 --- STRACE: ErrorException [ 1 ]: Class 'Auth_Database' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-24 17:34:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Post::post() ~ APPPATH/classes/controller/dash.php [ 16 ]
2011-08-24 17:34:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Post::post() ~ APPPATH/classes/controller/dash.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-24 17:35:30 --- ERROR: ErrorException [ 8 ]: Undefined index: post ~ APPPATH/classes/controller/dash.php [ 16 ]
2011-08-24 17:35:30 --- STRACE: ErrorException [ 8 ]: Undefined index: post ~ APPPATH/classes/controller/dash.php [ 16 ]
--
#0 /data/Dropbox/Projektid/Sketches/kohana-twitter/application/classes/controller/dash.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/data/Dropbox/P...', 16, Array)
#1 [internal function]: Controller_Dash->action_index()
#2 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dash))
#3 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /data/Dropbox/Projektid/Sketches/kohana-twitter/index.php(109): Kohana_Request->execute()
#6 {main}
2011-08-24 17:45:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/dash/index.php [ 8 ]
2011-08-24 17:45:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/dash/index.php [ 8 ]
--
#0 /data/Dropbox/Projektid/Sketches/kohana-twitter/application/views/dash/index.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/data/Dropbox/P...', 8, Array)
#1 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/view.php(61): include('/data/Dropbox/P...')
#2 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/view.php(343): Kohana_View::capture('/data/Dropbox/P...', Array)
#3 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /data/Dropbox/Projektid/Sketches/kohana-twitter/application/views/template.php(62): Kohana_View->__toString()
#5 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/view.php(61): include('/data/Dropbox/P...')
#6 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/view.php(343): Kohana_View::capture('/data/Dropbox/P...', Array)
#7 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Dash))
#10 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /data/Dropbox/Projektid/Sketches/kohana-twitter/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /data/Dropbox/Projektid/Sketches/kohana-twitter/index.php(109): Kohana_Request->execute()
#13 {main}
2011-08-24 17:46:59 --- ERROR: ErrorException [ 1 ]: Call to undefined function now() ~ APPPATH/views/dash/index.php [ 12 ]
2011-08-24 17:46:59 --- STRACE: ErrorException [ 1 ]: Call to undefined function now() ~ APPPATH/views/dash/index.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}