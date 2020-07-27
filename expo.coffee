#!/usr/bin/coffee

found = (x,i) ->
    if i ** 2 == x then return true else return false

expo = (x) ->
    console.log "checking #{x}"
    return false unless x >= 0
    i = 0
    check x,i while i++ and not found x , i
    return true

console.log expo -1
console.log expo 4
console.log expo 5

class b
    constructor: (name) ->
        @name = name

class a extends b
    say_hi: ->
        console.log "Hi I'm #{@name}"

log = console.log

a_ = "hello there".split ''
b = "pizza penis".split ''
c = "kek rekt desu".split '' 

log  ...[... a_, ... b, ... c ]

jon = new a 'jon' 
jon.say_hi()
