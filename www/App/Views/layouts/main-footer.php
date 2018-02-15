  <!-- end content -->

    <!-- scripts -->
    <?php
      if(isset($this->view->script)) {
        foreach($this->view->scripts as $script) {
          echo "<script src='$script'></script>";
      }
      }

    ?>
    <!-- end scripts -->
</body>
</html>