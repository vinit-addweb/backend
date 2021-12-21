var fs = require("fs");

fs.readFile('index2.txt',function(err,data) {
    if(err)return console.error(err);
    console.log(data.toString());
});

console.log("End");