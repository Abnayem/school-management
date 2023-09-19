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

  function get_posts(array $args = [],string $type = 'object')
{
    global $db_conn;
    $condition = "WHERE 0 ";
    if(!empty($args))
    {
        foreach($args as $k => $v)
        {
            $v = (string)$v;
            $condition_ar[] = "$k = '$v'";
        }
        if ($condition_ar > 0) {
            $condition = "WHERE " . implode(" AND ", $condition_ar);
        }
    };

    
    $sql = "SELECT * FROM posts $condition";

    $query = mysqli_query($db_conn,$sql);
    return data_output($query , $type);
}

  function data_output($query , $type ='object')
  {
    $output = array();
    if($type == 'object')
    {
        while ($result = mysqli_fetch_object($query)) {
            $output[] = $result;
        }
    }
    else
    {
        while ($result = mysqli_fetch_assoc($query)) {
            $output[] = $result;
        }
    }
    return $output;
  }

?>


