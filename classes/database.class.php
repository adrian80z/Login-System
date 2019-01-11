<?php
	
/**********************************************************
* Author: Adrian Ziolkowski 
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126831
* Date : 2016/02/14
* Ref: 
***********************************************************/



	class Database 
	{
		
		//Attributes

		private $connect	= false;
		private $user 		= "root";
		private $passwd		= "";
		private $host		= "localhost";
		private $dbname		= "login_sys";



		//create connection
		public function __construct()
		{
			$this->connect = new mysqli($this->host, $this->user, $this->passwd);
			mysqli_select_db($this->connect,$this->dbname);
			

			//check connection
			if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
			} 

		}

		//execute query
		public function execQuery($sql)
        {
            return mysqli_query($this->connect, $sql) or die('<b>Error querying the Database:</b><br> ' . mysqli_error($this->connect));
		}
		


		public function getArrayData($sql,$fields)
        {
			$result	= mysqli_query($this->connect, $sql) or die('<b>Error querying the Database:</b><br> ' . mysqli_error($this->connect));
			$myarray = array();
			$i = 0;
			while($row = mysqli_fetch_array($result))
			{
				for($j=0;$j<sizeof($fields);$j++)
				{
					 $myarray[$i][$fields[$j]] = $row[$j];
				}
				$i++;
			}
			return $myarray;
		}



		public function getRowData($sql,$fields)
		{
			$result	= mysqli_query($this->connect, $sql) or die('<b>Error querying the Database:</b><br> ' . mysqli_error($this->connect));
			$rows = mysqli_num_rows($result);
			return $rows;
		}


		//retrive number of rows
		public function getNumRows($sql,$fields)
        {
			$result	= mysqli_query($this->connect, $sql) or die('<b>Error querying the Database:</b><br> ' . mysqli_error($this->connect));
			$rows = mysqli_num_rows($result);
			return $rows;
		}


		//close connection
		public function __destruct()
        {
			return mysqli_close($this->connect);
        }
		
	}
?>