<?php
  define('BASE_DIR', dirname(__FILE__));
  require_once(BASE_DIR.'/config.php');
  
  function sys_cmd($cmd) {
    if(strncmp($cmd, "reboot", strlen("reboot")) == 0) {
      shell_exec('sudo reboot');
    } else if(strncmp($cmd, "shutdown", strlen("shutdown")) == 0) {
      shell_exec('sudo poweroff');
    } else {
      // unknown
    }
  }


  if(isset($_GET['cmd'])) {
    $cmd=$_GET['cmd'];
    sys_cmd($cmd);
  }

?>
