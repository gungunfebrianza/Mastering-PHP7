<?php
session_start();
echo session_id();
session_regenerate_id();
