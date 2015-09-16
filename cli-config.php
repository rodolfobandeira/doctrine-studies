<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once 'bootstrap.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);

