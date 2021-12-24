const path = require('path');
const express = require('express');
const ejs = require('ejs');
const bodyParser = require('body-parser');
const app = express();

// database connection
const mysql = require('mysql');
const connection=mysql.createConnection({
    host:'localhost',
    user:'root',
    password:'',
    database:'node_crud'
});
 
connection.connect(function(error){
    if(!!error) console.log(error);
    else console.log('Database Connected!');
}); 


//set views file
app.set('views',path.join(__dirname,'views'));
 
//set view engine
app.set('view engine', 'ejs');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
 


app.get('/',(req,res)=>{
    // res.send('index.html');
    let sql = "SELECT * FROM users";
    
    let query = connection.query(sql,(err,rows)=>{
        if(err) throw err;
    
 
    res.render('user_index',{   
        title:'Crud app using node js',
        user:rows
        
    
    });
})
});

app.get('/add',(req,res)=>{
    res.render('user_add',{   
        title:'Crud app using node js',
        
        
    
    });;
});


app.post('/save',(req,res)=>{
   let data = {name: req.body.name,email: req.body.email,phone_no: req.body.phone_no};
    let sql =  "INSERT  INTO users SET ?";
      let query = connection.query(sql,data,(err,results)=>{
         if(err) throw err;
         res.redirect('/');
      });
    });  
 
// Server Listening
app.listen(3600, () => {
    console.log('Server is running at port 3800');
});
 

 
