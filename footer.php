<?php

?>
<!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/customjs.js"></script>
<script>
$( document ).ready(function() {
  $('#flat-slider').slider({
     orientation: 'horizontal',
     range:       true,
     values:      [1000,9000],
     max: 10000,
     min: 0,
     animate: "fast"
   });
});
</script>

</body>
</html>
