var mysql = require('mysql');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "pypractice"  
});  
con.connect(function(err) {  
if (err) throw err;  
console.log("Connected!");  
var sql = "INSERT INTO pythonn (id,name, address, mobile, email, password 	) VALUES (12,'Ajeet Kumar', 'Allahabad','7597844434','ajeet@gmail.com','123')";  
con.query(sql, function (err, result) {  
if (err) throw err;  
console.log("1 record inserted");  
}); 
})