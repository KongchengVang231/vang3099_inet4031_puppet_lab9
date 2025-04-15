<?php
phpinfo()
?>

file { '/var/www/html/phpinfo.php':
  source => '/home/vang3099/vang3099_inet4031_puppet_lab9/phpinfo.php',
  notify  => Service['apache2'],
  require => [Package['apache2']]

}
