<section>
  <!-- <?php
    date_default_timezone_set("America/Toronto");
    $current_time = date("h:i a");
  ?> -->
  <h2 class="clock-text"><span id="clock"></span></h2>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
    const updateClock = () => {
      const now = new Date();
      const hours = now.getHours().toString().padStart(2, '0');
      const minutes = now.getMinutes().toString().padStart(2, '0');
      const timeString = `${hours}:${minutes}`;

      document.getElementById('clock').textContent = timeString;
    };
    updateClock();
    setInterval(updateClock, 60000);
});

  </script>