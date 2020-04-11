#!/usr/bin/coffee
require 'coffeescript/register'
express = require 'express'
stylus = require 'stylus'
coffee = require 'coffee-middleware'
app = express()
port = 3000

app.use stylus.middleware {
    debug: true,
    src: 'views',
    dest: 'public',
}

app.use coffee {
    src: 'views',
    dest: 'public'
}

app.set 'view engine', 'pug'
app.use express.static 'public'

app.get '/', (req,res) ->
    data = {
        title: "Hello World",
        message: "Hello there"
    }
    res.render 'index', data

app.listen port, -> console.log "listening on #{port}"