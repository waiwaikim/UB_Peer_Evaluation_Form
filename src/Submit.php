<?php include('submissionSQL.php'); ?>

<?php
  if (isset($_POST['submit'])) {
  # echo "YOOOO";
  $email = $_COOKIE["email"];
  // echo $email;
  #$team = array(); //getTeamates($email);
  #array_push($team, "jmsiegel");
  #array_push($team, "lukemcda");
  #array_push($team, "fengmaot");
  #array_push($team, "waiwaiki");
  $team = getTeammates($email);  
  // writeSubmission("jmsiegel@buffalo.edu", "waiwaiki@buffalo.edu", "1", "2", "0", "1", "3");
  // echo "success";
  // foreach($team as $result) {
    // echo $result, '<br>';
  // }
  
  $role = "0";
  foreach($team as $name) {
   // echo $name; 
   // if (empty($_POST["role'.$name.'"]) || empty($_POST["leadership'.$name.'"]) || 
    //empty($_POST["participation'.$name.'"]) || empty($_POST["prof'.$name.'"]) ||
    //empty($_POST["quality'.$name.'"])) {
      // echo "Please enter all scores";
    //}
    //break;
   $index1 = "role" . $name;
    // $index = "0";
    // echo $index;
    // break;
    // if(isset($_POST[index1]) //{
      $role = $_POST[index1] . "YO";
      echo $role;
      break;
    // }
    
    //$leadership = $_POST["leadership'.$name.'"];
    //$participation = $_POST["participation'.$name.'"];
    //$prof = $_POST["prof'.$name.'"];
    //$quality = $_POST["quality'.$name.'"];
    
        // echo "submission success";
  }
  
  // echo $role;
}

  //   if (!empty($_POST["role0'.$name.'"])) {
  //     $role = 0;
  //   } else if(!empty($_POST["role1'.$name.'"])) {
  //     $role = 1;
  //   } else if(!empty($_POST["role2'.$name.'"])) {
  //     $role = 2;
  //   } else if(!empty($_POST["role3'.$name.'"])) {
  //     $role = 3;
  //   } else {
  //     echo "please make sure to check at least one box for every teammate";
  //   }

  //   if (!empty($_POST["leadership0'.$name.'"])) {
  //     $leadership = 0;
  //   } else if(!empty($_POST["leadership1'.$name.'"])) {
  //     $leadership = 1;
  //   } else if(!empty($_POST["leadership2'.$name.'"])) {
  //     $leadership = 2;
  //   } else if(!empty($_POST["leadership3'.$name.'"])) {
  //     $leadership = 3;
  //   } else {
  //     echo "please make sure to check at least one box for every teammate";
  //   }

  //   if (!empty($_POST["participation0'.$name.'"])) {
  //     $participation= 0;
  //   } else if(!empty($_POST["participation1'.$name.'"])) {
  //     $participation = 1;
  //   } else if(!empty($_POST["participation2'.$name.'"])) {
  //     $participation = 2;
  //   } else if(!empty($_POST["participation3'.$name.'"])) {
  //     $participation = 3;
  //   } else {
  //     echo "please make sure to check at least one box for every teammate";
  //   }

  //   if (!empty($_POST["prof0'.$name.'"])) {
  //     $prof = 0;
  //   } else if(!empty($_POST["prof1'.$name.'"])) {
  //     $prof = 1;
  //   } else if(!empty($_POST["prof2'.$name.'"])) {
  //     $prof = 2;
  //   } else if(!empty($_POST["prof3'.$name.'"])) {
  //     $prof = 3;
  //   } else {
  //     echo "please make sure to check at least one box for every teammate";
  //   }

  //   if (!empty($_POST["quality0'.$name.'"])) {
  //     $quality = 0;
  //   } else if(!empty($_POST["quality1'.$name.'"])) {
  //     $quality = 1;
  //   } else if(!empty($_POST["quality2'.$name.'"])) {
  //     $quality = 2;
  //   } else if(!empty($_POST["quality3'.$name.'"])) {
  //     $quality = 3;
  //   } else {
  //     echo "please make sure to check at least one box for every teammate";
  //   }


  // }     
?>
