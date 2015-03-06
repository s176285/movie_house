<?php

function connect_db() {
   $result = new mysqli('sbazy', 's176285', 'E35mCG3Z', 's176285');
   if (!$result) {
      throw new Exception('Polaczenie nie powiodlo sie');
   } else {
      return $result;
   }
}

?>
