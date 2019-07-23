<?php
class User
{
  private $username;
  private $email;
  private $password;
  private $gender;

  public function _construct(){
  }
  

  
    
    public function set_signup($username ,$email ,$password ,$gender)
    {      $db=mysqli_connect('localhost','root','POTO','t-shirts');

      
      $o=new User;
      $error=$o->verification_signup($username ,$email);
      if(empty($error))
      {
      $sql = "INSERT INTO signup (username,email,password,gender) VALUES ('$username','$email','$password','$gender')";
        mysqli_query($db, $sql);
      }
      else
      {
        return $error;
      }
    }
    public function set_signin($email ,$password)
    {

    }
    public function get_signup()
    {

    }
    public function get_signin()
    {

    }
    public function verification_signin()
    {

    }
    public function verification_signup($username ,$email)
    {
      $db=mysqli_connect('localhost','root','POTO','t-shirts');

      $error1="";
      $error2="";
      $query = mysqli_query($db, "SELECT username From signup WHERE username='$username'");
      $query1 = mysqli_query($db, "SELECT email From signup WHERE email='$email'");
      $array= mysqli_fetch_array($query);
      $array1= mysqli_fetch_array($query1);
      if(!empty($array))
      {
        $error1="-Username is used before! <br>";
      }
      if(!empty($array1))
      {
        $error2="-Email is used before!";
      }
      return $error1.$error2;
    }
}
?>