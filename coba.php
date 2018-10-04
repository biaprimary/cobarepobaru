class Student {
  static function name() {
    echo "Hello Brother";
  }
}

Student::name();

class Student {
  function name() {
    echo "Hello Brother";
  }
}


$student = new Student;
$student->name();

class Player {
  private $name;

  function __construct() {
    echo "Object Player success created";
  }

  function set_name($name) {
    $this->$name;
  }

  function get_name(){
    return $this->name;
  }
}

//use class Player
$player_one = new Player; //this will display "Object Player Success Created"

$player_one->set_name("Joni"); //set value $name with "Joni"
echo $player_one->get_name(); //will display "Joni"
echo $player_one->name; //will fatal error
