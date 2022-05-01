const express = require("express")
const mysql = require('mysql')
const multer  = require('multer')
const {v4: uuidv4} = require("uuid")

const app = express()

var pool  = mysql.createPool({
  connectionLimit : 10,
  host            : '127.0.0.1',
  user            : 'root',
  password        : '',
  database        : 'app'
});


// ##############################
app.get("/api-get-all-users", (req, res) => {
  pool.query('SELECT user_id, user_name, user_last_name, user_email FROM users', function (error, rows, fields) {
    // console.log("error", error);
    // console.log("fields", fields);
    // console.log("pool", pool);
    if (error){ return res.status(500).json({"info":"cannot get users"}) }
    return res.json(rows)
  })
})

// ##############################
app.listen(3000, err => {
  if(err){console.log("Server cannot liste"); return}
  console.log("Server listening ...")
})