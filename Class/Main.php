<?php
include('C:/xampp/htdocs/Michael Fasanya/config/DB_Connection.php');

class main{

      private $SERVER;
      private $USERNAME;
      private $PASSWORD;
      private $DATABASE;
      public  $RESULTS;
      public $STATUS;


public function __construct(){

  $this->SERVER=SERVER;

  $this->USERNAME=USERNAME;

  $this->PASSWORD=PASSWORD;

  $this->DATABASE=DATABASE;

  $this->RESULTS;

  $this->STATUS;
}


public function get_records($PARAM){

  if ($this->filter_Dangerous_Input($PARAM)!='true'){

         $this->STATUS="You entered a wrong Input";}else {

         $this->connect();

         $sql = "SELECT locations.location_name as location,department.department_name,
         bookings.start_date as booking_starts,bookings.end_date as booking_ends,
         discounts.start_date as discounts_starts,discounts.end_date as discounts_ends,
         discounts.percentage as discounts_percentage,employee.first_name as emp_firstName,
         employee.last_name as emp_LastName,employee.age as emp_age,price_bands.start_date as price_starts,
         price_bands.end_date as price_ends,
         price_bands.price as price_band_price,property_name,near_beach,accepts_pets,sleeps,beds
         FROM locations
         INNER JOIN department ON locations.__pk=department.__pk
         INNER JOIN bookings ON locations.__pk=bookings.__pk
         INNER JOIN employee ON department.__pk=employee._fk_department
         INNER JOIN price_bands ON locations.__pk=price_bands._fk_property
         INNER JOIN properties ON locations.__pk=properties._fk_location
         INNER JOIN discounts ON locations.__pk=discounts.__pk
         where  location_name LIKE '$PARAM%' OR property_name LIKE '$PARAM%'
         ";

         $result = $this->conn->query($sql);

         $this->RESULTS=$result;
         }

}

Public function filter_Dangerous_Input($PARAM){
/*codes to sanitize and filter for unwanted inputs,
if input is clean return true*/

return 'true';

}

private function connect(){
  $this->conn = mysqli_connect($this->SERVER,$this->USERNAME,$this->PASSWORD,$this->DATABASE);
// Check connection
if (!$this->conn) {
  die("Connection failed: " . mysqli_connect_error());
    }
}

}
