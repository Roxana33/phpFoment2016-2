<html>
<head>
<title>Pruebas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>

<?php
class Table {
  private $matrix = array();
  private $rowNumber;
  private $columnNumber;
  private $initValue;
  private $incremental;

  public function __construct($rowNumber, $columnNumber, $initValue, $incremental) {
    $this->rowNumber = $rowNumber;
    $this->columnNumber = $columnNumber;
    $this->initValue = $initValue;
    $this->incremental = $incremental;

    $this->loadValues();
  }

  public function drawTable() {
    $this->tableBegin();
    for($i=0; $i < $this->rowNumber; $i++) {
      $this->rowBegin();
      for($j=0; $j < $this->columnNumber; $j++) {
        $this->showTable($i, $j);
      }
      $this->rowEnd();
    }
    $this->tableEnd();
  }

  private function loadValues() {
    for($i = 0; $i < $this->rowNumber; $i++) {
      for($j = 0; $j < $this->columnNumber; $j++) {
        $this->matrix[$i][$j] = $this->initValue;
        $this->initValue += $this->incremental;
      }
    }
  }

  private function tableBegin() {
    echo '<table class="w3-table w3-bordered w3-striped w3-border w3-hoverable">';
  }

  private function rowBegin() {
    echo '<tr>';
  }

  private function showTable($row, $column) {
    echo '<td>'.$this->matrix[$row][$column].'</td>';
  }

  private function rowEnd() {
    echo '</tr>';
  }

  private function tableEnd() {
    echo '</table>';
  }

  public function getRowNumber() {
    return $this->rowNumber;
  }

  public function getColumnNumber() {
    return $this->columnNumber;
  }
}

$tabla1 = new Table(20, 12, 5, 10);
$tabla1->drawTable();
echo "<br>Size: " . $tabla1->getRowNumber() . " x " . $tabla1->getColumnNumber();
?>

</body>
</html>