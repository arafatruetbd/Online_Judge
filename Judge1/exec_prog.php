<?php
session_start();

$i = 0;
$str = '';
$selected_lang = $_POST['Language'];

include('connectdb.php');

if ($selected_lang == 'C')
{
  if ($handle = opendir('Submitted_C'))
  {
    while (false !== ($entry = readdir($handle)))
    {
      $i = $i + 1;
      if ($i == 3)
      {
        $str = $entry;
        break;
      }
    }

    closedir($handle);
  }

  // finding id of current judging file
  $query = "select judgetable.ID from judgetable,submitteddata where judgetable.ID = submitteddata.ID and 
  judgetable.judgeNo=1 and judgetable.Lang = '$selected_lang' and judgetable.FileName = '$str' and submitteddata.Verdict = 'Judging'" ;
  $result = mysql_query($query, $link) or die("Cannot Retrive From Table");
  $row = mysql_fetch_row($result);
  $id = $row['0'];

  $token = strtok($str, ".");
  $path = "Submitted_C/" . $str;
  if ($i == 3)
  {
    if (!copy($path, "code.c"))
    {
      echo "failed to copy $file...n";
    }
  }

  $cmdln = "gcc -o code.exe code.c 2>&1";
  $msg = 'No file exist';
  if ($i == 3) $msg = exec($cmdln);

  if ($msg == '')
  {
    $query = "select Problem from submitteddata where ID = $id" ;
    $result = mysql_query($query, $link) or die("Cannot Retrive From Table");
    $row = mysql_fetch_row($result);
    $Problem = $row['0'];
    $Problem1 = $Problem.'out.txt';
    $Problem2 = $Problem.'out1.txt';
    $handle = fopen ("$Problem1", "w+");
    fclose($handle);
    exec('code.exe');

    echo "<br/>Judge Output:<br/>";
    echo nl2br(file_get_contents($Problem2));

    echo "Participant Output:<br/>";
    echo nl2br(file_get_contents($Problem1));

    echo "<br/>Judge Status:<br/>";
    if (sha1_file($Problem1) == sha1_file($Problem2))
    {
      echo "Accpted";
      $query = "update submitteddata set Verdict = 'Accepted' where ID = $id" ;
      $result = mysql_query($query, $link) or die("Cannot Retrive From Table");
      unlink($path);
    }
    else
    {
      echo "Wrong Answer";
      $query = "update submitteddata set Verdict = 'Wrong Answer' where ID = $id" ;
      $result = mysql_query($query, $link) or die("Cannot Retrive From Table");
      unlink($path);
    }
  }
  else
  {
    echo "Error Occure: <br/>";
    echo $msg;
    unlink($path);
  }
}

if ($selected_lang == 'C++')
{
  if ($handle = opendir('Submitted_C++'))
  {
    while (false !== ($entry = readdir($handle)))
    {
      $i = $i + 1;
      if ($i == 3)
      {
        $str = $entry;
        break;
      }
    }

    closedir($handle);
  }

  $query = "select judgetable.ID from judgetable,submitteddata where judgetable.ID = submitteddata.ID and judgetable.judgeNo=1 and
   judgetable.Lang = '$selected_lang' and judgetable.FileName = '$str' and submitteddata.Verdict = 'Judging'" ;
  $result = mysql_query($query, $link) or die("Cannot Retrive From Table");
  $row = mysql_fetch_row($result);
  $id = $row['0'];

  $token = strtok($str, ".");
  $path = "Submitted_C++/" . $str;
  if ($i == 3)
  {
    if (!copy($path, "code.cpp"))
    {
      echo "failed to copy $file...n";
    }
  }

  $cmdln = "g++ -o code.exe code.cpp 2>&1";
  $msg = 'No file exist';
  if ($i == 3) $msg = exec($cmdln);

  if ($msg == '')
  {
    $query = "select Problem from submitteddata where ID = $id" ;
    $result = mysql_query($query, $link) or die("Cannot Retrive From Table");
    $row = mysql_fetch_row($result);
    $Problem = $row['0'];
    $Problem1 = $Problem.'out.txt';
    $Problem2 = $Problem.'out1.txt';
    $handle = fopen ("$Problem1", "w+");
    fclose($handle);
    exec('code.exe');

    echo "<br/>Judge Output:<br/>";
    echo nl2br(file_get_contents($Problem2));

    echo "Participant Output:<br/>";
    echo nl2br(file_get_contents($Problem1));

    echo "<br/>Judge Status:<br/>";
    if (sha1_file($Problem1) == sha1_file($Problem2))
    {
      echo "Accpted" ;
      $query = "update submitteddata set Verdict = 'Accepted' where ID = $id" ;
      $result = mysql_query($query, $link) or die("Cannot Retrive From Table");
      unlink($path);
    }
    else
    {
      echo "Wrong Answer";
      $query = "update submitteddata set Verdict = 'Wrong Answer' where ID = $id" ;
      $result = mysql_query($query, $link) or die("Cannot Retrive From Table");
      unlink($path);
    }
  }
  else
  {
    echo "Error Occure: <br/>";
    echo $msg;
    unlink($path);
  }
}

/*if ($selected_lang == 'Java')
{
  echo "I am in java";
  if ($handle = opendir('Submitted_Java'))
  {
    while (false !== ($entry = readdir($handle)))
    {
      $i = $i + 1;
      if ($i == 3)
      {
        $str = $entry;
        break;
      }
    }

    closedir($handle);
  }

  $query = "select judgetable.ID from judgetable,submitteddata where judgetable.ID = submitteddata.ID and judgetable.judgeNo=1 and judgetable.Lang = '$selected_lang' and judgetable.FileName = '$str' and submitteddata.Verdict = 'Judging'" ;
  $result = mysql_query($query, $link) or die("Cannot Retrive From Table");
  $row = mysql_fetch_row($result);
  $id = $row['0'];

  $token = strtok($str, ".");
  $path = "Submitted_Java/" . $str;
  if ($i == 3)
  {
    if (!copy($path, "code.java"))
    {
      echo "failed to copy $file...n";
    }
  }

  $cmdln = "javac code.java";
  $msg = 'No file exist';
  if ($i == 3) $msg = exec($cmdln);
  echo $msg;

  // $msg = exec('gcc -o test.exe test.c 2>&1');

  if ($msg == '')
  {
    exec('java code');
    /*echo "Input Data Set:<br/>";
    echo nl2br(file_get_contents('in.txt'));
    echo "<br/><br/>Output Data Set:<br/>";
    echo nl2br(file_get_contents('in.txt'));

    echo "Output:<br/>";
    echo nl2br(file_get_contents('out.txt'));
    echo "<br/>Judge Status:<br/>";
    $file1 = 'out.txt';
    $file2 = 'out1.txt';
    if (sha1_file($file1) == sha1_file($file2))
    {
      echo "Accpted in java judge1";
      $query = "update submitteddata set Verdict = 'Accepted' where ID = $id" ;
     $result = mysql_query($query, $link) or die("Cannot Retrive From Table");
      unlink($path);
    }
    else
    {
      echo "Wrong Answer in java judge1";
      $query = "update submitteddata set Verdict = 'Wrong Answer' where ID = $id" ;
      $result = mysql_query($query, $link) or die("Cannot Retrive From Table");
      unlink($path);
    }
  }
  else
  {
    echo "Error Occure: <br/>";
    echo $msg;
  }
}*/

mysql_close();
echo "<center>";
echo "<a href='index.php'> Back </a></center>"
?>

<center>
<a href  = "../login/logout.php"> Logout </a>
</center>