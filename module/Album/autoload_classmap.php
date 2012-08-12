<?php
/*
 * Our getAutoloaderConfig() method returns an array that is compatible with ZF2’s AutoloaderFactory. 
 * We conﬁgure it so that we add a class map ﬁle to the ClassmapAutoloader and also add this module’s 
 * namespace to the StandardAutoloader. The standard autoloader requires a namespace and the path 
 * where to ﬁnd the ﬁles for that namespace. It is PSR-0 compliant and so classes map directly to ﬁles as per the PSR-0 rules.

As we are in development, we don’t need to load ﬁles via the classmap, so we provide an empty array 
 * for the classmap autoloader. Create autoload_classmap.php with these contents:
 */
// module/Album/autoload_classmap.php:
return array();