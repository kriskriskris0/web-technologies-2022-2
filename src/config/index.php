<?php
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');


define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASS', '');
define('DB', 'webis');

include "../engine/db.php";
include "../engine/controller.php";
include "../engine/render.php";
include "../models/catalog.php";
include "../models/menu.php";
include "../models/news.php";
include "../models/feedback.php";