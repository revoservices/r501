<?php
unset($_SESSION);
session_destroy();
session_write_close();
echo'<script> window.location="../main"; </script> ';

?>