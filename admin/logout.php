<?php

// sessiooni lõpetamine (peale seda kaob juurdepääs kasutusõigust kontrollivetele lehtedele)

session_start();
unset($_SESSION['kasutaja']);
header("Location:index.php");

?>