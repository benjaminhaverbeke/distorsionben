<?php


/**Models */


require "models/Category.php";
require "models/Message.php";
require "models/Salon.php";
require "models/User.php";


/**Router */
require "config/Router.php";

/**Managers */

require "managers/AbstractManager.php";
require "managers/CategoryManager.php";
require "managers/MessageManager.php";
require "managers/SalonManager.php";
require "managers/UserManager.php;";

/**Controllers */

require "controllers/AdminController.php";
require "controllers/AuthController.php";
require "controllers/ChatController.php";
require "controllers/PageController.php";
