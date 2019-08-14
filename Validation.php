<?php
class Validation {

    public function isFldEmpty($fldValue) {
        if ($fldValue == ""){ return TRUE;
        }
        else{ return FALSE;}   
    }
    public function isfldEmail($eval)
     {
      if ($eval == preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $eval))
              {return TRUE;}
     else {return FALSE;}
     }
}   
    



