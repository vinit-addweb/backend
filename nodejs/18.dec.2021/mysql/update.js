var mysql = require('mysql');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "pypractice"  
});  
con.connect(function(err) {  
if (err) throw err;  
var sql = "UPDATE pythonn SET address  = 'Delhi' WHERE address = 'Allahabad'";  
con.query(sql, function (err, result) {  
if (err) throw err;  
console.log(result.affectedRows + " record(s) updated");  
});  
}); 
