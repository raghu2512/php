<?php
	
	if(isset($_POST['language']))
		{
			  $varLanguage = $_POST['language'];
  			  $errorMessage = "";

  				if(empty($varLanguage))
					  {

						    $errorMessage = "<li>You forgot to select a Language!</li>";

					  }
 
 				 if($errorMessage != "")
					  {
 						   echo("<p>There was an error with your form:</p>\n");
						    echo("<ul>" . $errorMessage . "</ul>\n");

					  }

				  else
					  
					  {
					    

					    switch($varLanguage)
    						{

							      case "English": echo "Hello";; 
							      break;
      							  case "Hindi": echo "Namaste";; 
      							  break;
      							  case "Chinese": echo "Nǐ hǎo";; 
      							  break;
      							  case "Japnese": echo "Kon'nichiwa"; 
      							  break;
       							  default: echo("Error!"); 
      							  exit(); 
      							  break;
    						}
    			
     

				    exit();
					  }

		}

?>

<html>
<head>
<title>hello</title>
</head>
<body>
<form class="form-signin" method="POST">
    <select name="language">
        <option selected="selected">Choose one</option>
        <?php
        $language = array("English", "Hindi", "Chinese", "Japnese");
        
        foreach($language as $lan){
        ?>
        <option value="<?php echo ($lan); ?>"><?php echo $lan; ?></option>
        <?php
        }
        ?>
    </select>
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>                  