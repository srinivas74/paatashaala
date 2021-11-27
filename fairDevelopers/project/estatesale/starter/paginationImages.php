<?php
include ("connection.php");
if (function_exists('mysqli_query')) {
    $query = mysqli_query($conn, "select count(*) from `realestate_plots_images`  where is_deleted=false");
    $row = mysqli_fetch_row($query);
} else {
    $query = mysql_query("select count(*) from `realestate_plots_images`  where is_deleted=false");
    $row = mysql_fetch_row($query);
}

$rows = $row[0];

$page_rows = 6;

$last = ceil($rows / $page_rows);

if ($last < 1) {
    $last = 1;
}

$pagenum = 1;

if (isset($_GET['pn'])) {
    $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}

if ($pagenum < 1) {
    $pagenum = 1;
} else if ($pagenum > $last) {
    $pagenum = $last;
}

$limit = 'LIMIT ' . ($pagenum - 1) * $page_rows . ',' . $page_rows;
if (function_exists('mysqli_query')) {
    $nquery = mysqli_query($conn, "select * from `realestate_plots_images`  where is_deleted=false $limit");
} else {
    $nquery = mysql_query("select * from `realestate_plots_images`  where is_deleted=false $limit");
}
$paginationCtrls = '';

if ($last != 1) {

    if ($pagenum > 1) {
        $previous = $pagenum - 1;
        $paginationCtrls .= '<li><a class="page-numbers" href="' . $_SERVER['PHP_SELF'] . '?pn=' . $previous . '" class="btn btn-default">Previous</a> </li>&nbsp; &nbsp; ';

        for ($i = $pagenum - 4; $i < $pagenum; $i ++) {
            if ($i > 0) {
                $paginationCtrls .= '<li><a class="page-numbers" href="' . $_SERVER['PHP_SELF'] . '?pn=' . $i . '" class="btn btn-default">' . $i . '</a> </li>&nbsp; ';
            }
        }
    }

    $paginationCtrls .= '' . $pagenum . ' &nbsp; ';

    for ($i = $pagenum + 1; $i <= $last; $i ++) {
        $paginationCtrls .= '<li><a class="page-numbers" href="' . $_SERVER['PHP_SELF'] . '?pn=' . $i . '" class="btn btn-default">' . $i . '</a></li> &nbsp; ';
        if ($i >= $pagenum + 4) {
            break;
        }
    }

    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp;<li> <a class="page-numbers" href="' . $_SERVER['PHP_SELF'] . '?pn=' . $next . '" class="btn btn-default">Next</a> </li>';
    }
}

?>