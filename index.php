<?php
session_start();       

if(isset($_SESSION['page_view'])){
    $_SESSION['page_view'] = $_SESSION['page_view']+ 1;
}else{
    $_SESSION['page_view'] = 1;
}
echo "Total page views = ". $_SESSION['page_view'];

?>
