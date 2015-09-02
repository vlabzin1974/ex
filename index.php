<?php
header('Content-Type: charset-utf-8');
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <script type="text/javascript" src="jquery.2.1.4.js"></script>
  <style type="text/css">
    #test i{display:block}
  </style>
</head>
<body>
<!--1 2 3 -->
<div id="r">

</div>
<?php

?>
<script type="text/javascript">
  function d(x){
    var test=document.getElementById('test');
    var inTest = document.createElement('i');
    inTest.innerHTML = x;
    test.appendChild(inTest);
  }

  $(document).ready(function(){
      $.ajax({
        type: "GET",
        //url: 'http://photo-market.org/items.json?widget=true',
        url: 'composer.json',
        success: function(data) {
          $.each(data, function(index, item) {
            //item_url = 'http://photo-market.org/items/' + item.id
            d(item);
            //$('#r').append('');
          });
        }
      });

  });
</script>

<style type="text/css">
#coll{display:none}
</style>
<div class="w" id="w">
  <span id="sp">sspann</span>
  <p>text1 asdfasdfrwer</p>
  <p>text2 <a href="#" id="link">Linkyy</a></p>
  <p>text3</p>
</div>

<ul id="ul1">
  <li>list1</li>
  <li>list2</li>
  <li>list3</li>
  <li>list4</li>
</ul>

----------------------

--------------------------
<?php

class Database {

  private $_connection;
  static private $_instance;

  public static function getInstance(){
    if(!self::$_instance){
      self::$_instance = new self();
    }
    return self::$_instance;
  }

  public function __construct() {
    $this->_connection = new mysqli('localhost', 'root', '', 'laravel');
    if($this->_connection->connect_error)
      trigger_error('Failed to connect to MySQL: ' . $this->_connection->connect_error, E_USER_ERROR);
  }

  public function getConnection() {
    return $this->_connection;
  }

  private function __clone(){

  }
}

$db = Database::getInstance();
$mysqli = $db->getConnection();
$sql = "SELECT * FROM posts";
$result = $mysqli->query($sql);*/

/*echo '<pre>';
print_r($result->fetch_fields());
echo '</pre>';*/
/*echo $result->num_rows;
while($row = $result->fetch_assoc()){
  echo '<pre>';
  print_r($row);
  echo '</pre>';
}

/*class A {
  private $aa;
  protected $bb = [];
  public static $cc;
  const NUM= '10';

  public function __construct($data){
    return $this->aa = $data;
  }

  public function dd($array){
    foreach($array as $k => $v){
      $this->bb[$k] = $v;
    }
    return $this->bb;
  }

  public static function ee($data) {
    if(is_int($data)){
      self::$cc = $data;
    } else {
      self::$cc = false;
    }
    return self::$cc;
  }
}


$obj = new A('5');
$obj->dd([1=>'one','2'=>'dva']);
*/
/*echo '<pre>';
var_dump($obj);
echo '</pre>';*/
?>
<h4 id="bColl">Text</h4>
<div id="coll">text text text text text text text text text text text text text text text text text text text text text text text
  text
  text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text </div>
<form id="frm" action="" method="get">
  <label for="txt">Введите</label>
  <input type="text" name="n" id="txt"><br>
  <input type="submit">
  <span id="error"></span>
</form>
<span id="test"></span>
<script type="text/javascript" src="js.js"></script>

</body>
</html>

