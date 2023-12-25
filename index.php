
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!-- 
Name: <input type="text" name="name" value="<?php echo $name;?>">

E-mail: <input type="text" name="email" value="<?php echo $email;?>">

Website: <input type="text" name="website" value="<?php echo $website;?>">

Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other
 -->


<?php
-
$firstname = $_REQUEST['F_name'];
$lastname = $_REQUEST['L_name'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender-choice'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$visit = $_REQUEST['visit'];
$service = $_REQUEST['Service-name'];


if (isset($_POST['Book']))
{
    $host ="localhost";
    $user ="root";
    $password ="";
    $db ="bookappoinment";

    $conn = mysqli_connect($host,$user,$password,$db );


    $insert ="insert into users values('$firstname', '$lastname', '$age', '$gender', '$email', '$phone', '$visit' , '$service' )" ;

    mysqli_query($conn ,$insert);

    if($conn){
        echo("<h1>  our bookappoinment is done </h1>");
    }

    else{
        echo("<h1>  ERROR </h1>"); }
}



?>