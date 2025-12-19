<?php
echo $_SERVER['HTTP_FLY_CLIENT_IP']
  ?? explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'] ?? '')[0]
  ?? $_SERVER['REMOTE_ADDR'];
