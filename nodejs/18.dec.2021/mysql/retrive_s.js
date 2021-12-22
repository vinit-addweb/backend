var mysql = require('mysql');


var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "pypractice"
});


con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT * FROM pythonn WHERE email LIKE 'a%'", function (err, result) {
    if (err) throw err;
    console.log(result);
  });
});
