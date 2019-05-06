const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');

var app = express();
app.use(cors());
app.use(bodyParser.json());

const create = require('./routes/create')(app);
const getFiles = require('./routes/getFiles')(app)
const get = require('./routes/get')(app);
const update = require('./routes/update')(app);

app.listen(8000, () => {
    console.log('We are live on ' + 8000);
});