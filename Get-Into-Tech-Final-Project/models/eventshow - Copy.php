<?php
  class Eventshow {

    // we define 3 attributes
      //these can be any values, they dont have to be the same 
    public $eventID;
    public $eventName;
    public $eventDate;
    public $eventTime;
    public $eventRunningTime;
    public $eventDescription;
    public $eventURL;
    public $eventBookingURL;
    public $eventPrice;
    public $venueID_FK;
    public $authorID_FK;
    public $imageURL;
    public $videoURL;

    public function __construct($eventID,$eventName,$eventDate, $eventTime, $eventRunningTime, $eventDescription,$eventURL,$eventBookingURL,$eventPrice,$venueID_FK,$authorID_FK,$imageURL,$videoURL) {
      $this->eventID = $eventID;
      $this->eventName = $eventName;
      $this->eventDate = $eventDate;
      $this->eventTime = $eventTime;
      $this->eventRunningTime = $eventRunningTime;
      $this->eventDescription = $eventDescription;
      $this->eventURL = $eventURL;
      $this->eventBookingURL = $eventBookingURL;
      $this->eventPrice = $eventPrice;
      $this->venueID_FK = $venueID_FK;
      $this->authorID_FK = $authorID_FK; 
      $this->imageURL = $imageURL;
      $this->videoURL = $videoURL;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM eventshow');
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $eventshow) {
         //this need to be in the same order as the _constructor above
        $list[] = new Eventshow($eventshow['eventID'], $eventshow['eventName'], $eventshow['eventDate'], $eventshow['eventTime'], $eventshow['eventRunningTime'], $eventshow['eventDescription'], $eventshow['eventURL'], $eventshow['eventBookingURL'], $eventshow['eventPrice'], $eventshow['venueID_FK'], $eventshow['authorID_FK'],$eventshow['imageURL'], $eventshow['videoURL']);
      }
      return $list;
    }

//    public static function find($eventID) {
//      $db = Db::getInstance();
//      //use intval to make sure $id is an integer
//      $eventID = intval($eventID);
//      $req = $db->prepare('SELECT * FROM eventshow WHERE eventID = :eventID');
//      //the query was prepared, now replace :id with the actual $id value
//      $req->execute(array('eventID' => $eventID));
//      $eventshow = $req->fetch();
//if($eventshow){
//      return new Eventshow($eventshow['eventID'], $eventshow['eventName'], $eventshow['eventDate'], $eventshow['eventTime'], $eventshow['eventRunningTime'], $eventshow['eventDescription'], $eventshow['eventURL'], $eventshow['eventBookingURL'], $eventshow['eventPrice'], $eventshow['venueID_FK'], $eventshow['authorID_FK'], $eventshow['imageURL'], $eventshow['videoURL']);
//    }
//    else
//    {
//        //replace with a more meaningful exception
//        throw new Exception('A real exception should go here');
//    }
//    }
    
        public static function find($eventID) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $eventID = intval($eventID);
      $req = $db->prepare('SELECT eventshow.eventID, eventshow.eventName, eventshow.eventDescription, eventshow.eventURL, eventshow.eventBookingURL, eventshow.eventPrice, eventshow.imageURL, eventshow.videoURL, eventshow.eventDate, eventshow.eventTime, eventshow.eventRunningTime, venueaddress.venueName, venueaddress.street, venueaddress.postcode, eventshow.venueID_FK '
              . 'FROM eventshow '
              . 'JOIN venueaddress '
              . 'ON eventshow.venueID_FK = venueaddress.venueID '
              . 'WHERE eventshow.eventID = :eventID');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('eventID' => $eventID));
      $eventshow = $req->fetch();
if($eventshow){
      return new Eventshow($eventshow['eventID'], $eventshow['eventName'], $eventshow['eventDate'], $eventshow['eventTime'], $eventshow['eventRunningTime'], $eventshow['eventDescription'], $eventshow['eventURL'], $eventshow['eventBookingURL'], $eventshow['eventPrice'], $eventshow['venueID_FK'], 1, $eventshow['imageURL'], $eventshow['videoURL']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }
    

public static function update($eventID) {
    $db = Db::getInstance();
    $req = $db->prepare("Update eventshow set eventName=:eventName, eventDate=:eventDate, eventTime=:eventTime, eventRunningTime=:eventRunningTime, eventDescription=:eventDescription, eventURL=:eventURL, eventBookingURL=:eventBookingURL, eventPrice=:eventPrice, venueID_FK=:venueID_FK, authorID_FK=:authorID_FK, imageURL=:imageURL, videoURL=:videoURL where eventID=:eventID");
$req->bindParam(':eventID', $eventID);
$req->bindParam(':eventName', $eventName);
$req->bindParam(':eventDate', $eventDate);
$req->bindParam(':eventTime', $eventTime);
$req->bindParam(':eventRunningTime', $eventRunningTime);
$req->bindParam(':eventDescription', $eventDescription);
$req->bindParam(':eventURL', $eventURL);
$req->bindParam(':eventBookingURL', $eventBookingURL);
$req->bindParam(':eventPrice', $eventPrice);
$req->bindParam(':venueID_FK', $venueID_FK);
$req->bindParam(':authorID_FK', $authorID_FK);
$req->bindParam(':imageURL', $imageURL);
$req->bindParam(':videoURL', $videoURL);

// set name and price parameters and execute
    if(isset($_POST['eventName'])&& $_POST['eventName']!=""){
        $filteredEventName = filter_input(INPUT_POST,'eventName', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['eventDate'])&& $_POST['eventDate']!=""){
        $filteredEventDate = filter_input(INPUT_POST,'eventDate', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['eventTime'])&& $_POST['eventTime']!=""){
        $filteredEventTime = filter_input(INPUT_POST,'eventTime', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['eventRunningTime'])&& $_POST['eventRunningTime']!=""){
        $filteredEventRunningTime = filter_input(INPUT_POST,'eventRunningTime', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
        if(isset($_POST['eventDescription'])&& $_POST['eventDescription']!=""){
        $filteredEventDescription = filter_input(INPUT_POST,'eventDescription', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
        if(isset($_POST['eventURL'])&& $_POST['eventURL']!=""){
        $filteredEventURL = filter_input(INPUT_POST,'eventURL', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
        if(isset($_POST['eventBookingURL'])&& $_POST['eventBookingURL']!=""){
        $filteredEventBookingURL = filter_input(INPUT_POST,'eventBookingURL', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
        if(isset($_POST['eventPrice'])&& $_POST['eventPrice']!=""){
        $filteredEventPrice = filter_input(INPUT_POST,'eventPrice', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
        if(isset($_POST['venueID_FK'])&& $_POST['venueID_FK']!=""){
        $filteredVenueID_FK = filter_input(INPUT_POST,'venueID_FK', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
        if(isset($_POST['authorID_FK'])&& $_POST['authorID_FK']!=""){
        $filteredAuthorID_FK = filter_input(INPUT_POST,'authorID_FK', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
            if(isset($_POST['imageURL'])&& $_POST['imageURL']!=""){
        $filteredImageURL = filter_input(INPUT_POST,'imageURL', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
        if(isset($_POST['videoURL'])&& $_POST['videoURL']!=""){
        $filteredVideoURL = filter_input(INPUT_POST,'videoURL', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    

    
$eventName = $filteredEventName;
$eventDate = $filteredEventDate;
$eventTime = $filteredEventTime;
$eventRunningTime = $filteredEventRunningTime;
$eventDescription = $filteredEventDescription;
$eventURL = $filteredEventURL;
$eventBookingURL = $filteredEventBookingURL;
$eventPrice = $filteredEventPrice;
$venueID_FK = $filteredVenueID_FK;
$authorID_FK = $filteredAuthorID_FK;
$imageURL = $filteredImageURL;
$videoURL = $filteredVideoURL;

$req->execute();

//upload product image if it exists
        if (!empty($_FILES[self::InputKey]['eventName'])) {
		Eventshow::uploadFile($eventName);
	}

    }
    
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into eventshow(eventName, eventDate, eventTime, eventRunningTime, eventDescription, eventURL, eventBookingURL, eventPrice, venueID_FK, authorID_FK, imageURL, videoURL) values (:eventName, :eventDate, :eventTime, :eventRunningTime, :eventDescription, :eventURL, :eventBookingURL, :eventPrice, :venueID_FK, :authorID_FK, :imageURL, :videoURL)");
    $req->bindParam(':eventName', $eventName);
    $req->bindParam(':eventDate', $eventDate);
    $req->bindParam(':eventTime', $eventTime);
    $req->bindParam(':eventRunningTime', $eventRunningTime);
    $req->bindParam(':eventDescription', $eventDescription);
    $req->bindParam(':eventURL', $eventURL);
    $req->bindParam(':eventBookingURL', $eventBookingURL);
    $req->bindParam(':eventPrice', $eventPrice);
    $req->bindParam(':venueID_FK', $venueID_FK);
    $req->bindParam(':authorID_FK', $authorID_FK);
    $req->bindParam(':imageURL', $imageURL);
    $req->bindParam(':videoURL', $videoURL);

// set parameters and execute
    if(isset($_POST['eventName'])&& $_POST['eventName']!=""){
        $filteredEventName = filter_input(INPUT_POST,'eventName', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
        if(isset($_POST['eventDate'])&& $_POST['eventDate']!=""){
        $filteredEventDate = filter_input(INPUT_POST,'eventDate', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
        if(isset($_POST['eventTime'])&& $_POST['eventTime']!=""){
        $filteredEventTime = filter_input(INPUT_POST,'eventTime', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
        if(isset($_POST['eventRunningTime'])&& $_POST['eventRunningTime']!=""){
        $filteredEventRunningTime = filter_input(INPUT_POST,'eventRunningTime', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['eventDescription'])&& $_POST['eventDescription']!=""){
        $filteredEventDescription = filter_input(INPUT_POST,'eventDescription', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['eventURL'])&& $_POST['eventURL']!=""){
        $filteredEventURL = filter_input(INPUT_POST,'eventURL', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['eventBookingURL'])&& $_POST['eventBookingURL']!=""){
        $filteredEventBookingURL = filter_input(INPUT_POST,'eventBookingURL', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['eventPrice'])&& $_POST['eventPrice']!=""){
        $filteredEventPrice = filter_input(INPUT_POST,'eventPrice', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['venueID_FK'])&& $_POST['venueID_FK']!=""){
        $filteredVenueID_FK = filter_input(INPUT_POST,'venueID_FK', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['authorID_FK'])&& $_POST['authorID_FK']!=""){
        $filteredAuthorID_FK = filter_input(INPUT_POST,'authorID_FK', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['imageURL'])&& $_POST['imageURL']!=""){
        $filteredImageURL = filter_input(INPUT_POST,'imageURL', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if(isset($_POST['videoURL'])&& $_POST['videoURL']!=""){
        $filteredVideoURL = filter_input(INPUT_POST,'videoURL', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    
    
$eventName = $filteredEventName;
$eventDate = $filteredEventDate;
$eventTime = $filteredEventTime;
$eventRunningTime = $filteredEventRunningTime;
$eventDescription = $filteredEventDescription;
$eventURL = $filteredEventURL;
$eventBookingURL = $filteredEventBookingURL;
$eventPrice = $filteredEventPrice;
$venueID_FK = $filteredVenueID_FK;
$authorID_FK = $filteredAuthorID_FK;
$imageURL = $filteredImageURL;
$videoURL = $filteredVideoURL;

$req->execute();

//upload product image
//comment out this too
Eventshow::uploadFile($eventName);
    }

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling


public static function uploadFile(string $eventName) {

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
	$destinationFile = $path . $eventName . '.jpeg';

	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
}

public static function remove($eventID) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $eventID = intval($eventID);
      $req = $db->prepare('delete FROM eventshow WHERE eventID = :eventID');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('eventID' => $eventID));
  }
  
}
?>