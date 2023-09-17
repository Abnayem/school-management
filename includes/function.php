<?php


function get_the_classes($db_conn)
{
  
    $output = array();
    $query = mysqli_query($db_conn,'SELECT * FROM classes');
    while($row = mysqli_fetch_object($query))
    {
      $output[]=$row;
    }
    return $output;
  }


  function get_the_section($db_conn)
{
  
    $output = array();
    $query = mysqli_query($db_conn,'SELECT * FROM sections');
    while($row = mysqli_fetch_object($query))
    {
      $output[]=$row;
    }
    return $output;
  }

?>


?>