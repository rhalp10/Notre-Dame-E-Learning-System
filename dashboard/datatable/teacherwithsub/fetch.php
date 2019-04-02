<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * ";
$query .= " FROM `room_assign` `roa` LEFT JOIN `record_teacher_detail` `rtd` ON `roa`.`rtd_ID` = `rtd`.`rtd_ID` LEFT JOIN `ref_section` `rsec` ON `roa`.`section_ID` = `rsec`.`section_ID` LEFT JOIN `ref_semester` `rsem` ON `roa`.`sem_ID` = `rsem`.`sem_ID`";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE roa_ID LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR rtd_FName LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR rtd_MName LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR rtd_LName LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR sem_Start LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR sem_End LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
  $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
  $query .= 'ORDER BY roa_ID DESC ';
}
if($_POST["length"] != -1)
{
  $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $conn->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
  $sem_Start =  date_create($row['sem_Start']);
  $sem_End = date_create($row['sem_End']);
  $sub_array = array();
  $sub_array[] = $row['roa_ID'];
  $sub_array[] = $row['rtd_FName'].' '.$row['rtd_MName'].' '.$row['rtd_LName'];
  $sub_array[] = $row['section_Name'];
  $sub_array[] = date_format($sem_Start,"Y").' - '. date_format($sem_End,"Y");
  $sub_array[] = '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$row["roa_ID"].'" class="update_assign">Update</a></li><li><a href="#" id="'.$row["roa_ID"].'" class="delete_assign">Delete</a></li></ul></div>';
  // $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
  $data[] = $sub_array;
}
$output = array(
  "draw"        =>  intval($_POST["draw"]),
  "recordsTotal"    =>  $filtered_rows,
  "recordsFiltered" =>  get_total_all_records(),
  "data"        =>  $data
);
echo json_encode($output);

?>



        
