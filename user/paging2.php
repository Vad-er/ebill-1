<?php
      // range of num links to show
       $range = 3;
echo "<div class=\"col-md-offset-5\">";
       // if not on page 1, don't show back links
       if ($currentpage > 1) {
          // show << link to go back to page 1
          echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><span class=\"badge badge-custom-primary\">FIRST</a> ";
          // get previous page num
          $prevpage = $currentpage - 1;
          // show < link to go back to 1 page
          echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><span class=\"badge badge-custom-primary\">PREVIOUS</a> ";
       } // end if 

       // loop to show links to range of pages around current page
       for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
          // if it's a valid page number...
          if (($x > 0) && ($x <= $totalpages)) {
             // if we're on current page...
             if ($x == $currentpage) {
                // 'highlight' it but don't make a link
                echo " [<b><span class=\"badge badge-custom-success\">$x</b>] ";
             // if not current page...
             } else {
                // make it a link
                echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'><span class=\"badge badge-custom-primary\">$x</a> ";
             } // end else
          } // end if 
      } // end for
                     
       // if not on last page, show forward and last page links        
       if ($currentpage != $totalpages && $totalpages!=0 && $totalpages<=5) {
          // get next page
          $nextpage = $currentpage + 1;
           // echo forward link for next page 
          echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'><span class=\"badge badge-custom-primary\">NEXT</a> ";
          // echo forward link for lastpage
          echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'><span class=\"badge badge-custom-primary\">LAST</a> ";
       } // end if
       /****** end build pagination links ******/
echo "</div>";
 ?>
