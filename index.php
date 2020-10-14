<?php

require("./autoload.php");

use Directors\LazyDirector;

LazyDirector::getUsers("AllUsers");
echo LazyDirector::toString();

LazyDirector::getUsers("NewUsers");
echo LazyDirector::toString();

LazyDirector::getUsers("BlockedUsers");
echo LazyDirector::toString();

LazyDirector::getUsers("AllUsers");
echo LazyDirector::toString();