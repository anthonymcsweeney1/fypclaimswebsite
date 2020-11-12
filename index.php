
	
	<?php

try {
  $conn = new PDO("sqlsrv:server = tcp:fyserver1.database.windows.net,1433; Database = FYP", "azureBIS", "LokiKovex3!");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
