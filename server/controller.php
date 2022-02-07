<?php
  include __DIR__ . '/db.php';
  header('Content-Type: application/json');

  if(!empty($_GET['stato']) && !empty($_GET['marca'])){
      $marca = $_GET['marca'];
      $stato = $_GET['stato'];
      if ($stato === 'all' && $marca === 'all'){
        echo json_encode([
        'results' => $autousate,
        'length' => count($autousate)]);
      } else {

      $filteredarray = $autousate;
      if ($stato !== 'all'){
        $filteredarray = [];
        foreach($autousate as $auto){
          if ($auto['stato'] == $stato){
            $filteredarray[] = $auto;
          };
        }
      }
      if ($marca !== 'all'){
        $newfilter = [];
        foreach($filteredarray as $auto){
          if($auto['marca'] == $marca){
            $newfilter[] = $auto;
          }
        }
        $filteredarray = $newfilter;
      }
      echo json_encode([
                'results' => $filteredarray,
                'length' => count($filteredarray),
            ]);
    }
}
?>