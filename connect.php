$conn = new mysqli('localhost', 'root', '11111111');
$create_db = "CREATE DATABASE boboshkoma";
if ($conn->query($create_db) == TRUE){
    echo "Database succesfully created it's name is ";
}
else{
    echo "OOps smth went wrong! :(";
}
$conn->close();
$new_conn = new mysqli('localhost', 'root', '11111111');
$new_sql = "CREATE TABLE `boboshkoma`.`asd` ( `id` INT AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , 
`last_name` VARCHAR(50) NOT NULL , `patronymics` VARCHAR(50) NOT NULL , 
`group` VARCHAR(50) NOT NULL , `faculty` VARCHAR(50) NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;";

if($new_conn->query($new_sql) === TRUE){
    echo "table created successfully";
}
else{
    echo "smth went wrong";
}
$new_conn -> close();
