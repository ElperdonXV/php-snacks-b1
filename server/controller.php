<?php
  include __DIR__ . '/db.php';
  header('Content-Type: application/json');

  if(!empty($_GET['stato'])){

      $stato = $_GET['stato'];
      if ($stato === 'all'){
        echo json_encode([
        'results' => $autousate,
        'length' => count($autousate)]);
      } else {

      $filteredarray = [];
      if ($stato !== 'all'){
        foreach($autousate as $auto){
          if ($auto['stato'] == $stato){
            $filteredarray[] = $auto;
          };
        }
      }
      echo json_encode([
                'results' => $filteredarray,
                'length' => count($filteredarray),
            ]);
    }
}
?>