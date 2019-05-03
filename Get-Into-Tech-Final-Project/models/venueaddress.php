<?php
  class Venueaddress {

    // we define 3 attributes
    public $venueID;
    public $venueName;
    public $street;
    public $postcode;
    public $contact;
    public $location;
    

    public function __construct($venueID,$venueName, $street, $postcode, $contact, $location) {
      $this->venueID = $venueID;
      $this->venueName = $venueName;
      $this->street = $street;
      $this->postcode = $postcode;
      $this->contact = $contact;
      $this->location = $location;
      
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM venueaddress');
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $venueaddress) {
        $list[] = new Venueaddress($venueaddress['venueID'], $venueaddress['venueName'], $venueaddress['street'], $venueaddress['postcode'], $venueaddress['contact'], $venueaddress['location']);
      }
      return $list;
    }

    public static function find($venueID) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $venueID = intval($venueID);
      $req = $db->prepare('SELECT * FROM venueaddress WHERE venueID = :venueID');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('venueID' => $venueID));
      $venueaddress = $req->fetch();
if($venueaddress){
      return new Venueaddress($venueaddress['venueID'], $venueaddress['venueName'], $venueaddress['street'], $venueaddress['postcode'], $venueaddress['contact'], $venueaddress['location']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }

public static function update($venueID) {
    $db = Db::getInstance();
    $req = $db->prepare("Update venueaddress set venueName=:venueName, street=:street, postcode=:postcode, contact=:contact, location=:location where venueID=:venueID");
$req->bindParam(':venueID', $venueID);
$req->bindParam(':venueName', $venueName);
$req->bindParam(':street', $street);
$req->bindParam(':postcode', $postcode);
$req->bindParam(':contact', $contact);
$req->bindParam(':location', $location);


// set name and price parameters and execute
    if(isset($_POST['venueName'])&& $_POST['venueName']!=""){
        $filteredVenueName = filter_input(INPUT_POST,'venueName', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['street'])&& $_POST['street']!=""){
        $filteredStreet = filter_input(INPUT_POST,'street', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['postcode'])&& $_POST['postcode']!=""){
        $filteredPostcode = filter_input(INPUT_POST,'postcode', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['contact'])&& $_POST['contact']!=""){
        $filteredContact = filter_input(INPUT_POST,'contact', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
        if(isset($_POST['location'])&& $_POST['location']!=""){
        $filteredLocation = filter_input(INPUT_POST,'location', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    

$venueName = $filteredVenueName;
$street = $filteredStreet;
$postcode = $filteredPostcode;
$contact = $filteredContact;
$location = $filteredLocation;

$req->execute();

//upload product image if it exists
        if (!empty($_FILES[self::InputKey]['venueName'])) {
		Venueaddress::uploadFile($venueName);
	}

    }
    
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into venueaddress(venueName, street, postcode, contact, location) values (:venueName, :street, :postcode, :contact, :location)");
    
    $req->bindParam(':venueName', $venueName);
    $req->bindParam(':street', $street);
    $req->bindParam(':postcode', $postcode);
    $req->bindParam(':contact', $contact);
    $req->bindParam(':location', $location);
    

// set parameters and execute
    if(isset($_POST['venueName'])&& $_POST['venueName']!=""){
        $filteredVenueName = filter_input(INPUT_POST,'venueName', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
        if(isset($_POST['street'])&& $_POST['street']!=""){
        $filteredStreet = filter_input(INPUT_POST,'street', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
        if(isset($_POST['postcode'])&& $_POST['postcode']!=""){
        $filteredPostcode = filter_input(INPUT_POST,'postcode', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
        if(isset($_POST['contact'])&& $_POST['contact']!=""){
        $filteredContact = filter_input(INPUT_POST,'contact', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['location'])&& $_POST['location']!=""){
        $filteredLocation = filter_input(INPUT_POST,'location', FILTER_SANITIZE_SPECIAL_CHARS);
    }
     
    
$venueName = $filteredVenueName;
$street = $filteredStreet;
$postcode = $filteredPostcode;
$contact = $filteredContact;
$location = $filteredLocation;

$req->execute();

//upload product image
//comment out this too
Venueaddress::uploadFile($venueName);
    }

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling

//comment out upload
public static function uploadFile(string $venueName) {

	if (empty($_FILES[self::InputKey])) {
		//die("File Missing!");
                trigger_error("File Missing!");
	}

	if ($_FILES[self::InputKey]['error'] > 0) {
		trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
	}


	if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
	}

	$tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "C:/xampp/htdocs/SkyEventBlog/views/images/";
	$destinationFile = $path . $venueName . '.jpeg';

	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
}

public static function remove($venueID) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $venueID = intval($venueID);
      $req = $db->prepare('delete FROM venueaddress WHERE venueID = :venueID');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('venueID' => $venueID));
  }
  
}
?>