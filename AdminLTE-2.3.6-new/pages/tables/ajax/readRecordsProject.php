<?php /*
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<form method="post" name="template" action="invoice.php">';
	$data .= '<table class="table table-bordered table-striped">
						<tr>
						<th> </th>
							<th>id</th>
					  <th>project_name</th>
                      <th>project_desc</th>
                      <th>project_company_id</th>
					  <th>project_price</th>
					  <th>project_team</th>
					  <th>project_status</th>
					  <th>user_id</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>';

	$query = "SELECT * FROM projects";

	if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }

    // if query results contains rows then featch those rows 
    if(mysql_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysql_fetch_assoc($result))
    	{
    		$data .= '<tr>
			<td><input type="checkbox" name="checkboxName[]" value='. $row['id'] . '></td>
				<td>'. $row['id'] . '</td>
			     <td>'. $row['project_name'] . '</td>
				 <td>'. $row['project_desc'] . '</td>
				 <td>'. $row['project_company_id'] . '</td>
				 <td>'. $row['project_price'] . '</td>
				 <td>'. $row['project_team'] . '</td>
				 <td>'. $row['project_status'] . '</td>
                <td>'. $row['user_id'] . '</td>
				
				<td>
					<button onclick="GetProjectDetails('.$row['id'].')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteProject('.$row['id'].')" class="btn btn-danger">Delete</button>
				</td>
    		</tr>';
    		
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }
	
    $data .= '</table>';
	$data .= '<input type="submit" value="INVOICE" >';
	$data .= '</form>';

    echo $data;*/
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>ID</th>
					  <th>Project Name</th>
                      <th>Project Desc</th>
                      <th>Project Company ID</th>
					  <th>Project Price</th>
					  <th>Project Team</th>
					  <th>Project Status</th>
					  <th>User ID</th>
							<th>Actions</th>
					
						</tr>';

	$query = "SELECT * FROM projects";

	if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }

    // if query results contains rows then featch those rows 
    if(mysql_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysql_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'. $row['id'] . '</td>
			     <td>'. $row['project_name'] . '</td>
				 <td>'. $row['project_desc'] . '</td>
				 <td>'. $row['project_company_id'] . '</td>
				 <td>'. $row['project_price'] . '</td>
				 <td>'. $row['project_team'] . '</td>
				 <td>'. $row['project_status'] . '</td>
                <td>'. $row['user_id'] . '</td>
				
				<td>
				<button onclick="ViewProject('.$row['id'].')" class="btn btn-info">View</button>
					<button onclick="GetProjectDetails('.$row['id'].')" class="btn btn-warning">Update</button>
			
					<button onclick="DeleteProject('.$row['id'].')" class="btn btn-danger">Delete</button>
				</td>
    		</tr>';
    		
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>