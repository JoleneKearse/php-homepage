<?php include "header_inc.php"; ?>
  <header>
    <?php 
      date_default_timezone_set("America/Toronto");
      $current_hour = date("H"); 
      if ($current_hour < 12) {
        $time_of_day = "morning";
      } elseif ($current_hour < 18) {
        $time_of_day = "afternoon";
      } else {
        $time_of_day = "evening";
      }
    ?>
    <h1 class="title">Good <?php echo $time_of_day; ?>, Jolene!</h1>
  </header>
  <main>
      <?php include "clock.php"; ?>
<?php include "footer_inc.php"; ?>

