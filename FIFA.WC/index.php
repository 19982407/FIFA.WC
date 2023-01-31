<?php
$scores = array();
$classement = [
  'CROATIE' => ['PTS.'  => '0', 'NUL.'  => '0', 'VIC.'  => '0', 'DEF.'  => '0', 'PERD.'  => '0', 'BUTS.F.'  => '0', 'BUTS.C.'  => '0', '+/-'  => '0'],
  'CANADA' => ['PTS.'  => '0', 'NUL.'  => '0', 'VIC.'  => '0', 'DEF.'  => '0', 'PERD.'  => '0', 'BUTS.F.'  => '0', 'BUTS.C.'  => '0', '+/-'  => '0'],
  'BELGIQUE' => ['PTS.'  => '0', 'NUL.'  => '0', 'VIC.'  => '0', 'DEF.'  => '0', 'PERD.'  => '0', 'BUTS.F.'  => '0', 'BUTS.C.'  => '0', '+/-'  => '0'],
  'MAROC' => ['PTS.'  => '0', 'NUL.'  => '0', 'VIC.'  => '0', 'DEF.'  => '0', 'PERD.'  => '0', 'BUTS.F.'  => '0', 'BUTS.C.'  => '0', '+/-'  => '0']
];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  foreach ($_POST as $key => $value) {
    $scores[$key] = $value;
  }
  for ($i = 0; $i < 12; $i += 2) {
    if (array_values($scores)[$i] > array_values($scores)[$i + 1]) {
      similar_text("MAROC", array_keys($scores)[$i], $ma);
      similar_text("CROATIE", array_keys($scores)[$i], $cr);
      similar_text("BELGIQUE", array_keys($scores)[$i], $be);
      similar_text("CANADA", array_keys($scores)[$i], $ca);
      $plusGrand = $ma;
      if ($cr > $plusGrand)
        $plusGrand = $cr;
      if ($be > $plusGrand)
        $plusGrand = $be;
      if ($ca > $plusGrand)
        $plusGrand = $ca;
      if ($plusGrand == $ma) {
        $classement['MAROC']['PTS.'] += 3;
        $classement['MAROC']['NUL.'] += 1;
        $classement['MAROC']['VIC.'] += 1;
        $classement['MAROC']['DEF.'] += 0;
        $classement['MAROC']['PERD.'] += 0;
        $classement['MAROC']['BUTS.F.'] += (int) array_values($scores)[$i];
        $classement['MAROC']['BUTS.C.'] += (int) array_values($scores)[$i + 1];
        $classement['MAROC']['+/-'] = $classement['MAROC']['BUTS.F.'] - $classement['MAROC']['BUTS.C.'];
      } elseif ($plusGrand == $cr) {
        $classement['CROATIE']['PTS.'] += 3;
        $classement['CROATIE']['NUL.'] += 1;
        $classement['CROATIE']['VIC.'] += 1;
        $classement['CROATIE']['DEF.'] += 0;
        $classement['CROATIE']['PERD.'] += 0;
        $classement['CROATIE']['BUTS.F.'] += (int) array_values($scores)[$i];
        $classement['CROATIE']['BUTS.C.'] += (int) array_values($scores)[$i + 1];
        $classement['CROATIE']['+/-'] = $classement['CROATIE']['BUTS.F.'] - $classement['CROATIE']['BUTS.C.'];
      } elseif ($plusGrand == $be) {
        $classement['BELGIQUE']['PTS.'] += 3;
        $classement['BELGIQUE']['NUL.'] += 1;
        $classement['BELGIQUE']['VIC.'] += 1;
        $classement['BELGIQUE']['DEF.'] += 0;
        $classement['BELGIQUE']['PERD.'] += 0;
        $classement['BELGIQUE']['BUTS.F.'] += (int) array_values($scores)[$i];
        $classement['BELGIQUE']['BUTS.C.'] += (int) array_values($scores)[$i + 1];
        $classement['BELGIQUE']['+/-'] = $classement['BELGIQUE']['BUTS.F.'] - $classement['BELGIQUE']['BUTS.C.'];
      } elseif ($plusGrand == $ca) {
        $classement['CANADA']['PTS.'] += 3;
        $classement['CANADA']['NUL.'] += 1;
        $classement['CANADA']['VIC.'] += 1;
        $classement['CANADA']['DEF.'] += 0;
        $classement['CANADA']['PERD.'] += 0;
        $classement['CANADA']['BUTS.F.'] += (int) array_values($scores)[$i];
        $classement['CANADA']['BUTS.C.'] += (int) array_values($scores)[$i + 1];
        $classement['CANADA']['+/-'] = $classement['CANADA']['BUTS.F.'] - $classement['CANADA']['BUTS.C.'];
      }
      similar_text("MAROC", array_keys($scores)[$i + 1], $ma);
      similar_text("CROATIE", array_keys($scores)[$i + 1], $cr);
      similar_text("BELGIQUE", array_keys($scores)[$i + 1], $be);
      similar_text("CANADA", array_keys($scores)[$i + 1], $ca);
      $plusGrand = $ma;
      if ($cr > $plusGrand)
        $plusGrand = $cr;
      if ($be > $plusGrand)
        $plusGrand = $be;
      if ($ca > $plusGrand)
        $plusGrand = $ca;
      if ($plusGrand == $ma) {
        $classement['MAROC']['PERD.'] += 1;
        $classement['MAROC']['NUL.'] += 1;
        $classement['MAROC']['BUTS.F.'] += (int) array_values($scores)[$i + 1];
        $classement['MAROC']['BUTS.C.'] += (int) array_values($scores)[$i];
        $classement['MAROC']['+/-'] = $classement['MAROC']['BUTS.F.'] - $classement['MAROC']['BUTS.C.'];
      } elseif ($plusGrand == $cr) {
        $classement['CROATIE']['PERD.'] += 1;
        $classement['CROATIE']['NUL.'] += 1;
        $classement['CROATIE']['BUTS.F.'] += (int) array_values($scores)[$i + 1];
        $classement['CROATIE']['BUTS.C.'] += (int) array_values($scores)[$i];
        $classement['CROATIE']['+/-'] = $classement['CROATIE']['BUTS.F.'] - $classement['CROATIE']['BUTS.C.'];
      } elseif ($plusGrand == $be) {
        $classement['BELGIQUE']['PERD.'] += 1;
        $classement['BELGIQUE']['NUL.'] += 1;
        $classement['BELGIQUE']['BUTS.F.'] += (int) array_values($scores)[$i + 1];
        $classement['BELGIQUE']['BUTS.C.'] += (int) array_values($scores)[$i];
        $classement['BELGIQUE']['+/-'] = $classement['BELGIQUE']['BUTS.F.'] - $classement['BELGIQUE']['BUTS.C.'];
      } elseif ($plusGrand == $ca) {
        $classement['CANADA']['PERD.'] += 1;
        $classement['CANADA']['NUL.'] += 1;
        $classement['CANADA']['BUTS.F.'] += (int) array_values($scores)[$i + 1];
        $classement['CANADA']['BUTS.C.'] += (int) array_values($scores)[$i];
        $classement['CANADA']['+/-'] = $classement['CANADA']['BUTS.F.'] - $classement['CANADA']['BUTS.C.'];
      }
    } elseif (array_values($scores)[$i] < array_values($scores)[$i + 1]) {
      similar_text("MAROC", array_keys($scores)[$i + 1], $ma);
      similar_text("CROATIE", array_keys($scores)[$i + 1], $cr);
      similar_text("BELGIQUE", array_keys($scores)[$i + 1], $be);
      similar_text("CANADA", array_keys($scores)[$i + 1], $ca);
      $plusGrand = $ma;
      if ($cr > $plusGrand)
        $plusGrand = $cr;
      if ($be > $plusGrand)
        $plusGrand = $be;
      if ($ca > $plusGrand)
        $plusGrand = $ca;
      if ($plusGrand == $ma) {
        $classement['MAROC']['PTS.'] += 3;
        $classement['MAROC']['NUL.'] += 1;
        $classement['MAROC']['VIC.'] += 1;
        $classement['MAROC']['DEF.'] += 0;
        $classement['MAROC']['PERD.'] += 0;
        $classement['MAROC']['BUTS.F.'] += (int) array_values($scores)[$i + 1];
        $classement['MAROC']['BUTS.C.'] += (int) array_values($scores)[$i];
        $classement['MAROC']['+/-'] = $classement['MAROC']['BUTS.F.'] - $classement['MAROC']['BUTS.C.'];
      } elseif ($plusGrand == $cr) {
        $classement['CROATIE']['PTS.'] += 3;
        $classement['CROATIE']['NUL.'] += 1;
        $classement['CROATIE']['VIC.'] += 1;
        $classement['CROATIE']['DEF.'] += 0;
        $classement['CROATIE']['PERD.'] += 0;
        $classement['CROATIE']['BUTS.F.'] += (int) array_values($scores)[$i + 1];
        $classement['CROATIE']['BUTS.C.'] += (int) array_values($scores)[$i];
        $classement['CROATIE']['+/-'] = $classement['CROATIE']['BUTS.F.'] - $classement['CROATIE']['BUTS.C.'];
      } elseif ($plusGrand == $be) {
        $classement['BELGIQUE']['PTS.'] += 3;
        $classement['BELGIQUE']['NUL.'] += 1;
        $classement['BELGIQUE']['VIC.'] += 1;
        $classement['BELGIQUE']['DEF.'] += 0;
        $classement['BELGIQUE']['PERD.'] += 0;
        $classement['BELGIQUE']['BUTS.F.'] += (int) array_values($scores)[$i + 1];
        $classement['BELGIQUE']['BUTS.C.'] += (int) array_values($scores)[$i];
        $classement['BELGIQUE']['+/-'] = $classement['BELGIQUE']['BUTS.F.'] - $classement['BELGIQUE']['BUTS.C.'];
      } elseif ($plusGrand == $ca) {
        $classement['CANADA']['PTS.'] += 3;
        $classement['CANADA']['NUL.'] += 1;
        $classement['CANADA']['VIC.'] += 1;
        $classement['CANADA']['DEF.'] += 0;
        $classement['CANADA']['PERD.'] += 0;
        $classement['CANADA']['BUTS.F.'] += (int) array_values($scores)[$i + 1];
        $classement['CANADA']['BUTS.C.'] += (int) array_values($scores)[$i];
        $classement['CANADA']['+/-'] = $classement['CANADA']['BUTS.F.'] - $classement['CANADA']['BUTS.C.'];
      }
      similar_text("MAROC", array_keys($scores)[$i], $ma);
      similar_text("CROATIE", array_keys($scores)[$i], $cr);
      similar_text("BELGIQUE", array_keys($scores)[$i], $be);
      similar_text("CANADA", array_keys($scores)[$i], $ca);
      $plusGrand = $ma;
      if ($cr > $plusGrand)
        $plusGrand = $cr;
      if ($be > $plusGrand)
        $plusGrand = $be;
      if ($ca > $plusGrand)
        $plusGrand = $ca;
      if ($plusGrand == $ma) {
        $classement['MAROC']['PERD.'] += 1;
        $classement['MAROC']['NUL.'] += 1;
        $classement['MAROC']['BUTS.F.'] += (int) array_values($scores)[$i];
        $classement['MAROC']['BUTS.C.'] += (int) array_values($scores)[$i + 1];
        $classement['MAROC']['+/-'] = $classement['MAROC']['BUTS.F.'] - $classement['MAROC']['BUTS.C.'];
      } elseif ($plusGrand == $cr) {
        $classement['CROATIE']['PERD.'] += 1;
        $classement['CROATIE']['BUTS.F.'] += (int) array_values($scores)[$i];
        $classement['CROATIE']['BUTS.C.'] += (int) array_values($scores)[$i + 1];
        $classement['CROATIE']['+/-'] = $classement['CROATIE']['BUTS.F.'] - $classement['CROATIE']['BUTS.C.'];
      } elseif ($plusGrand == $be) {
        $classement['BELGIQUE']['PERD.'] += 1;
        $classement['BELGIQUE']['NUL.'] += 1;
        $classement['BELGIQUE']['BUTS.F.'] += (int) array_values($scores)[$i];
        $classement['BELGIQUE']['BUTS.C.'] += (int) array_values($scores)[$i + 1];
        $classement['BELGIQUE']['+/-'] = $classement['BELGIQUE']['BUTS.F.'] - $classement['BELGIQUE']['BUTS.C.'];
      } elseif ($plusGrand == $ca) {
        $classement['CANADA']['PERD.'] += 1;
        $classement['CANADA']['NUL.'] += 1;
        $classement['CANADA']['BUTS.F.'] += (int) array_values($scores)[$i];
        $classement['CANADA']['BUTS.C.'] += (int) array_values($scores)[$i + 1];
        $classement['CANADA']['+/-'] = $classement['CANADA']['BUTS.F.'] - $classement['CANADA']['BUTS.C.'];
      }
    } elseif (array_values($scores)[$i] == array_values($scores)[$i + 1]) {
      similar_text("MAROC", array_keys($scores)[$i], $ma);
      similar_text("CROATIE", array_keys($scores)[$i], $cr);
      similar_text("BELGIQUE", array_keys($scores)[$i], $be);
      similar_text("CANADA", array_keys($scores)[$i], $ca);
      $plusGrand = $ma;
      if ($cr > $plusGrand)
        $plusGrand = $cr;
      if ($be > $plusGrand)
        $plusGrand = $be;
      if ($ca > $plusGrand)
        $plusGrand = $ca;
      if ($plusGrand == $ma) {
        $classement['MAROC']['PTS.'] += 1;
        $classement['MAROC']['NUL.'] += 1;
        $classement['MAROC']['VIC.'] += 0;
        $classement['MAROC']['DEF.'] += 1;
        $classement['MAROC']['PERD.'] += 0;
        $classement['MAROC']['BUTS.F.'] += (int) array_values($scores)[$i];
        $classement['MAROC']['BUTS.C.'] += (int) array_values($scores)[$i + 1];
        $classement['MAROC']['+/-'] = $classement['MAROC']['BUTS.F.'] - $classement['MAROC']['BUTS.C.'];
      } elseif ($plusGrand == $cr) {
        $classement['CROATIE']['PTS.'] += 1;
        $classement['CROATIE']['NUL.'] += 1;
        $classement['CROATIE']['VIC.'] += 0;
        $classement['CROATIE']['DEF.'] += 1;
        $classement['CROATIE']['PERD.'] += 0;
        $classement['CROATIE']['BUTS.F.'] += (int) array_values($scores)[$i];
        $classement['CROATIE']['BUTS.C.'] += (int) array_values($scores)[$i + 1];
        $classement['CROATIE']['+/-'] = $classement['CROATIE']['BUTS.F.'] - $classement['CROATIE']['BUTS.C.'];
      } elseif ($plusGrand == $be) {
        $classement['BELGIQUE']['PTS.'] += 1;
        $classement['BELGIQUE']['NUL.'] += 1;
        $classement['BELGIQUE']['VIC.'] += 0;
        $classement['BELGIQUE']['DEF.'] += 1;
        $classement['BELGIQUE']['PERD.'] += 0;
        $classement['BELGIQUE']['BUTS.F.'] += (int) array_values($scores)[$i];
        $classement['BELGIQUE']['BUTS.C.'] += (int) array_values($scores)[$i + 1];
        $classement['BELGIQUE']['+/-'] = $classement['BELGIQUE']['BUTS.F.'] - $classement['BELGIQUE']['BUTS.C.'];
      } elseif ($plusGrand == $ca) {
        $classement['CANADA']['PTS.'] += 1;
        $classement['CANADA']['NUL.'] += 1;
        $classement['CANADA']['VIC.'] += 0;
        $classement['CANADA']['DEF.'] += 1;
        $classement['CANADA']['PERD.'] += 0;
        $classement['CANADA']['BUTS.F.'] += (int) array_values($scores)[$i];
        $classement['CANADA']['BUTS.C.'] += (int) array_values($scores)[$i + 1];
        $classement['CANADA']['+/-'] = $classement['CANADA']['BUTS.F.'] - $classement['CANADA']['BUTS.C.'];
      }
      similar_text("MAROC", array_keys($scores)[$i + 1], $ma);
      similar_text("CROATIE", array_keys($scores)[$i + 1], $cr);
      similar_text("BELGIQUE", array_keys($scores)[$i + 1], $be);
      similar_text("CANADA", array_keys($scores)[$i + 1], $ca);
      $plusGrand = $ma;
      if ($cr > $plusGrand)
        $plusGrand = $cr;
      if ($be > $plusGrand)
        $plusGrand = $be;
      if ($ca > $plusGrand)
        $plusGrand = $ca;
      if ($plusGrand == $ma) {
        $classement['MAROC']['PTS.'] += 1;
        $classement['MAROC']['NUL.'] += 1;
        $classement['MAROC']['VIC.'] += 0;
        $classement['MAROC']['DEF.'] += 1;
        $classement['MAROC']['PERD.'] += 0;
        $classement['MAROC']['BUTS.F.'] += (int) array_values($scores)[$i + 1];
        $classement['MAROC']['BUTS.C.'] += (int) array_values($scores)[$i];
        $classement['MAROC']['+/-'] = $classement['MAROC']['BUTS.F.'] - $classement['MAROC']['BUTS.C.'];
        ;
      } elseif ($plusGrand == $cr) {
        $classement['CROATIE']['PTS.'] += 1;
        $classement['CROATIE']['NUL.'] += 1;
        $classement['CROATIE']['VIC.'] += 0;
        $classement['CROATIE']['DEF.'] += 1;
        $classement['CROATIE']['PERD.'] += 0;
        $classement['CROATIE']['BUTS.F.'] += (int) array_values($scores)[$i + 1];
        $classement['CROATIE']['BUTS.C.'] += (int) array_values($scores)[$i];
        $classement['CROATIE']['+/-'] = $classement['CROATIE']['BUTS.F.'] - $classement['CROATIE']['BUTS.C.'];
      } elseif ($plusGrand == $be) {
        $classement['BELGIQUE']['PTS.'] += 1;
        $classement['BELGIQUE']['NUL.'] += 1;
        $classement['BELGIQUE']['VIC.'] += 0;
        $classement['BELGIQUE']['DEF.'] += 1;
        $classement['BELGIQUE']['PERD.'] += 0;
        $classement['BELGIQUE']['BUTS.F.'] += (int) array_values($scores)[$i + 1];
        $classement['BELGIQUE']['BUTS.C.'] += (int) array_values($scores)[$i];
        $classement['BELGIQUE']['+/-'] = $classement['BELGIQUE']['BUTS.F.'] - $classement['BELGIQUE']['BUTS.C.'];
      } elseif ($plusGrand == $ca) {
        $classement['CANADA']['PTS.'] += 1;
        $classement['CANADA']['NUL.'] += 1;
        $classement['CANADA']['VIC.'] += 0;
        $classement['CANADA']['DEF.'] += 1;
        $classement['CANADA']['PERD.'] += 0;
        $classement['CANADA']['BUTS.F.'] += (int) array_values($scores)[$i + 1];
        $classement['CANADA']['BUTS.C.'] += (int) array_values($scores)[$i];
        $classement['CANADA']['+/-'] = $classement['CANADA']['BUTS.F.'] - $classement['CANADA']['BUTS.C.'];
      }
    }
  }
  for ($i=0; $i <3 ; $i++) { 
    uasort($classement, function($a, $b) {
      if ($a['PTS.'] == $b['PTS.']) {
          if ($a['+/-'] == $b['+/-']) {
              return $b['BUTS.F.'] - $a['BUTS.F.'];
          }
          return $b['+/-'] - $a['+/-'];
      }
      return $b['PTS.'] - $a['PTS.'];
  });
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymaus">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymaus"></script>
  <link rel="style" src="/node_madules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
<div class="container">
  <form method="post" action="">
    <table class="table  table-bordered table-dark table-striped text-center ">
      <thead>
        <tr>
          <th scope="col">23 NOV 11:00H</th>
          <th scope="col">FINALIZADO</th>
          <th scope="col">NULTIDO 9</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img class=" img-responsive" src="img/png-clipart-flag-of-morocco-moroccan-cuisine-logo-others-miscellaneous-flag-removebg-preview.png" alt="">MAROC</td>
          <td class="w-25">
            <div class="input-group  w-25 mx-auto">
              <input type="number" min="0" class="form-control" name="MAROC1" value="<?php if (isset($_POST['MAROC1'])) echo $_POST['MAROC1']; ?>">
              <span class="input-group-text">:</span>
              <input type="number" min="0" class="form-control" name="CROATIE1" value="<?php if (isset($_POST['CROATIE1'])) echo $_POST['CROATIE1']; ?>">
            </div>
          </td>
          <td><img class=" img-responsive" src="img/téléchargement-removebg-preview (3).png" alt="">CROATIE</td>
        </tr>
        <tr>
          <td>23 NOV 20:00H</th>
          <td>FINALIZADO</th>
          <td>NULTIDO 12</th>
        </tr>
        <tr>
          <td><img class=" img-responsive" src="img/578-removebg-preview.png" alt="">BELGIQUE</td>
          <td class="w-25">
            <div class="input-group  w-25 mx-auto">
              <input type="number" min="0" class="form-control" name="BELGIQUE1" value="<?php if (isset($_POST['BELGIQUE1'])) echo $_POST['BELGIQUE1']; ?>">
              <span class="input-group-text">:</span>
              <input type="number" min="0" class="form-control" name="CANADA1" value="<?php if (isset($_POST['CANADA1'])) echo $_POST['CANADA1']; ?>">
            </div>
          </td>
          <td><img class=" img-responsive" src="img/téléchargement-removebg-preview (4).png" alt="">CANADA</td>
        </tr>
        <tr>
          <td>27 NOV 14:00H</th>
          <td>FINALIZADO</th>
          <td>NULTIDO 26</th>
        </tr>
        <tr>
          <td><img class=" img-responsive" src="img/578-removebg-preview.png" alt="">BELGIQUE</td>
          <td class="w-25">
            <div class="input-group  w-25 mx-auto">
              <input type="number" min="0" class="form-control" name="BELGIQUE2" value="<?php if (isset($_POST['BELGIQUE2'])) echo $_POST['BELGIQUE2']; ?>">
              <span class="input-group-text">:</span>
              <input type="number" min="0" class="form-control" name="MAROC2" value="<?php if (isset($_POST['MAROC2'])) echo $_POST['MAROC2']; ?>">
            </div>
          </td>
          <td><img class=" img-responsive" src="img/png-clipart-flag-of-morocco-moroccan-cuisine-logo-others-miscellaneous-flag-removebg-preview.png" alt="">MAROC</td>
        </tr>
        <tr>
          <td>27 NOV 17:00H</th>
          <td>FINALIZADO</th>
          <td>NULTIDO 27</th>
        </tr>
        <tr>
          <td><img class=" img-responsive" src="img/téléchargement-removebg-preview (3).png" alt="">CROATIE</td>
          <td class="w-25">
            <div class="input-group  w-25 mx-auto">
              <input type="number" min="0" class="form-control" name="CROATIE2" value="<?php if (isset($_POST['CROATIE2'])) echo $_POST['CROATIE2']; ?>">
              <span class="input-group-text">:</span>
              <input type="number" min="0" class="form-control" name="CANADA2" value="<?php if (isset($_POST['CANADA2'])) echo $_POST['CANADA2']; ?>">
            </div>
          </td>
          <td><img class=" img-responsive" src="img/téléchargement-removebg-preview (4).png" alt="">CANADA</td>
        </tr>
        <tr>
          <td>01 Dec 1:00H</th>
          <td>FINALIZADO</th>
          <td>NULTIDO 41</th>
        </tr>
        <tr>
          <td><img class=" img-responsive" src="img/téléchargement-removebg-preview (3).png" alt="">CROATIE</td>
          <td class="w-25">
            <div class="input-group  w-25 mx-auto">
              <input type="number" min="0" class="form-control" name="CROATIE3" value="<?php if (isset($_POST['CROATIE3'])) echo $_POST['CROATIE3']; ?>">
              <span class="input-group-text">:</span>
              <input type="number" min="0" class="form-control" name="BELGIQUE3" value="<?php if (isset($_POST['BELGIQUE3'])) echo $_POST['BELGIQUE3']; ?>">
            </div>
          </td>
          <td><img class=" img-responsive" src="img/578-removebg-preview.png" alt="">BELGIQUE</td>
        </tr>
        <tr>
          <td>01 Dec 16:00H</th>
          <td>FINALIZADO</th>
          <td>NULTIDO 42</th>
        </tr>
        <tr>
          <td><img class=" img-responsive" src="img/téléchargement-removebg-preview (4).png" alt="">CANADA</td>
          <td class="w-25">
            <div class="input-group  w-25 mx-auto">
              <input type="number" min="0" class="form-control" name="CANADA3" value="<?php if (isset($_POST['CANADA3'])) echo $_POST['CANADA3']; ?>">
              <span class="input-group-text">:</span>
              <input type="number" min="0" class="form-control" name="MAROC3" value="<?php if (isset($_POST['MAROC3'])) echo $_POST['MAROC3']; ?>">
            </div>
          </td>
          <td><img class=" img-responsive" src="img/png-clipart-flag-of-morocco-moroccan-cuisine-logo-others-miscellaneous-flag-removebg-preview.png" alt="">MAROC</td>
        </tr>
      </tbody>
    </table>
    <div class="text-center" style="margin-bottom: 20px;">
    <button type="submit" class="btn btn-success">Success</button>
</div>
  </form>
  <?php
$pays = array(
  "MAROC" => 'img/png-clipart-flag-of-morocco-moroccan-cuisine-logo-others-miscellaneous-flag-removebg-preview.png',
  "CROATIE" => 'img/téléchargement-removebg-preview (3).png',
  "BELGIQUE" => 'img/578-removebg-preview.png',
  "CANADA" => 'img/téléchargement-removebg-preview (4).png'
);

echo '  <table class="table  table-striped table-hover  table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Selection</th>
      <th scope="col">PTS.</th>
      <th scope="col">NUL</th>
      <th scope="col">VIC.</th>
      <th scope="col">DEF</th>
      <th scope="col">PERD</th>
      <th scope="col">B.F.</th>
      <th scope="col">G.C</th>
      <th scope="col">+/-</th>
    </tr>
  </thead>
  <tbody>';
$i = 1;
foreach ($classement as $cle => $valeur) {
  echo "<tr><th scope='row'>$i.</th>";
  echo "<td><img class='img-responsive' src='{$pays[$cle]}' alt=''>$cle</td>";
  foreach ($valeur as $cellule) {
      echo "<td>$cellule</td>";
  }
  echo "</tr>";
  $i++;
}
echo '</tbody></table>';
  ?>
  </div>
</body>

</html>