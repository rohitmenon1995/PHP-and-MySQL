<?php
class FormBuilder {
    
  function __construct($action="",$method="post"){
      echo "<form action='$action' method='$method'>";
      
  }  
    //Sets a name box with any label of your choice
  public function SetFieldBox($data,$label) {
      
      echo "<label for='$label'> $label </label> <input type='text' name='$data' id='$label'><br>";
      return $data;
    }
    //Sets a clickable radio button
  public function SetCheckBox($data,array $label) {
      foreach ($label as $value){
      echo "<input type='checkbox' name='$data' value='$value'>
      <label for='$value'>$value</label><br>";}
      return $data;
  }
    //Sets a drop down menu with 2 variables:an array of values for each option and the title of the dropdown
  public function SetDropDown($data,array $valarray,$label)
       {echo "<label for='dropdown' >$label</label>
      <select name='$data' id='dropdown'>";
foreach ($valarray as $value) {
                echo "<option value='$value'> $value </option>";
            }echo "</select>";
            return $data;
        }
      
      
  
  public function SetSubmitBtn($bootstrapclass) {
      echo "<button type='submit' name='submit' class='$bootstrapclass'>Submit </button><br>";
  }
  
  private function CreateDate($start,$end) {
      echo "<input type='date' id='start' name='starting'
       value='$start'><br>;
      <input type='date' id='end' name='ending'
       value='$end'><br>";
      
  }
  public function DateRange($start,$end){
      $this->CreateDate($start,$end);
      $s=strtotime($start);
     $e=strtotime($end);
      
      if ($s < $e ){
          echo "The date is from $start to $end";
      }
      else {
          echo "Choose an appropriate date range";
      }
      }
  public function CloseForm(){
      echo "</form>";
  }
 
  

}