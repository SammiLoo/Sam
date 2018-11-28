<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exam Docket</title>
  <link rel="stylesheet" href="style4.css">
</head>

<body>
  Name: <br>
  Candidate No: <br>
  <br>Listed below are the examinations paper which, according to our records, you will be taking at the end of the current semester. Please examine the list carefully.<br>
  <br><table>
    <tr>
      <th>Module Code</th>
      <th>Module Title</th>
      <th>Date of Exam</th>
      <th>Time of Exam</th>
      <th>Duration</th>
      <th>Room</th>
    </tr> 
  </table>

  <?php
  if(!empty($_POST['EEEE3026']))
  {
    echo("<table><tr><td>H53PJ3 (EEEE3026)</td><td>Third Year Project</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['EEEE3051']))
  {
    echo("<table><tr><td>H63BPE (EEEE3051)</td><td>Business Planning</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['group1a']))
  {
    echo("<table><tr><td>H63END (EEEE3031)</td><td>Electronic Design</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['group1b']))
  {
    echo("<table><tr><td>H63VLS (EEEE3032)</td><td>VLSI Design</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['group1c']))
  {
    echo("<table><tr><td>H63SSD (EEEE3030)</td><td>Solid State Devices</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['group1d']))
  {
    echo("<table><tr><td>H63TCE (EEEE3033)</td><td>Telecommunication Electronics</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['group2a']))
  {
    echo("<table><tr><td>H63EMA (EEEE3034)</td><td>Electrical Machines</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['group2b']))
  {
    echo("<table><tr><td>H63EDR (EEEE3036)</td><td>Energy Conversion for Motor and Generator Drives</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['group2c']))
  {
    echo("<table><tr><td>H63PED (EEEE3035)</td><td>Power Electronic Design</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['group2d']))
  {
    echo("<table><tr><td>H63REN (EEEE3054)</td><td>Renewable Generation Technologies and Contorl</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['group2e']))
  {
    echo("<table><tr><td>H63PNW (EEEE3044)</td><td>Power Networks</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['group3a']))
  {
    echo("<table><tr><td>H63CSD (EEEE3037)</td><td>Control System Design</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['group3b']))
  {
    echo("<table><tr><td>H63FWA (EEEE3038)</td><td>Fields Waves and Antennas</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['group4a']))
  {
    echo("<table><tr><td>H63BPE (EEEE3051)</td><td>Digital Communications</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['group4b']))
  {
    echo("<table><tr><td>H63BPE (EEEE3051)</td><td>Web Based Computing</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['group4c']))
  {
    echo("<table><tr><td>H63BPE (EEEE3051)</td><td>Embedded Computing</td><td></td><td></td><td></td><td></td>");
  }
  if(!empty($_POST['group4d']))
  {
    echo("<table><tr><td>H63BPE (EEEE3051)</td><td>Visual Information Computing</td><td></td><td></td><td></td><td></td>");
  }

  ?>

  <table>
    <tr>
      <td><?php echo $_POST['code'];?></td>
      <td><?php echo $_POST['title'];?></td>
      <td></td>
      <td></td>
      <td></td>      
      <td></td>
    </tr>
  </table>  
  

</body>
</html>