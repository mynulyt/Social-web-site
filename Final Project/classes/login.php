<?php 
class Login
{
    private $error = "";

    public function evaluate($data)
    {
        $email = addslashes($data['email']); // Fixed typo: addcslashes should be addslashes
        $password = addslashes($data['password']); // Fixed typo: addcslashes should be addslashes
        
        $query = "select * from users where email = '$email' limit 1";
        
        $DB = new Database();
        $result = $DB->read($query);

        if ($result)
        {
            $row = $result[0];
            if ($password == $row['password'])
            {
                // create session data
                $_SESSION['BGCBook_userid'] = $row['userid'];
            }
            else
            {
                $this->error .= "Wrong password<br>";
            }
        }
        else
        {
            $this->error .= "No such email was found<br>";
        }
        
        return $this->error;
    }
}
?>
