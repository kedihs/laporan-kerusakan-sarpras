<?php
session_start();
session_destroy();
echo "<script>alert('Berhasil logout dari Aplikasi!'); window.location='../index.php';</script>";