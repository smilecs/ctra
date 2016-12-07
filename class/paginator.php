<?php
/**
 *
 */
include_once ("conf/db_connect.php");
connect();
  function getData( $limit = 10, $page = 1, $qery) {

    if ( $limit == 'all' ) {
        $query      = $qery;
    } else {
        $query      = $qery . " LIMIT " . ( ( $page - 1 ) * $limit ) . ", $limit";

    }
return $query;
}
  function createLinks($links, $list_class, $query, $limit  = 10, $page =1, $cat=0){
    if($limit == 'all'){
      return '';
    }
    $rs = query($query);
    $total = mysql_num_rows($rs);
    $last       = ceil( $total / $limit );

    $start      = ( ( $page - $links ) > 0 ) ? $page - $links : 1;
    $end        = ( ( $page + $links ) < $last ) ? $page + $links : $last;

    $html       = '<ul class="' . $list_class . '">';

    $class      = ( $page == 1 ) ? "disabled" : "";
    $html       .= '<li class="' . $class . '"><a href="?cat=' . $cat . '&limit=' . $limit . '&page=' . ( $page - 1 ) . '&pag=' . $_GET['pag']  . '">&laquo;</a></li>';

    if ( $start > 1 ) {
        $html   .= '<li><a href="?cat=' . $cat . '&limit=' . $limit . '&page=1&pag=' . $_GET['pag'] . '">1</a></li>';
        $html   .= '<li class="disabled"><span>...</span></li>';
    }

    for ( $i = $start ; $i <= $end; $i++ ) {
        $class  = ( $page == $i ) ? "active" : "";
        $html   .= '<li class="' . $class . '"><a href="?cat=' . $cat . '&limit=' . $limit . '&page=' . $i . '&pag=' . $_GET['pag'] . '">' . $i . '</a></li>';
    }

    if ( $end < $last ) {
        $html   .= '<li class="disabled"><span>...</span></li>';
        $html   .= '<li><a href="?cat=' . $cat . '&limit=' . $limit . '&page=' . $last . '&pag=' . $_GET['pag'] . '">' . $last . '</a></li>';
    }

    $class      = ( $page == $last ) ? "disabled" : "";
    $html       .= '<li class="' . $class . '"><a href="?cat=' . $cat . '&limit=' . $limit . '&page=' . ( $page + 1 ) . '&pag=' . $_GET['pag']  . '">&raquo;</a></li>';

    $html       .= '</ul>';

    return $html;
  }




 ?>
