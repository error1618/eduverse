const { Console } = require('console');
const express = require('express');
const app = express();
const http = require('http');
const server = http.createServer(app);
const { Server } = require("socket.io");
const io = new Server(server,{
    cors: {origin:"*"}
});


app.get('/', (req, res) => {
  res.sendFile(__dirname + '/index.html');
});




io.on('connection', (socket) => {
  socket.join(socket.userID);
  console.log('connected base');
  // send existing users to client 
  const users = [];
  
    socket.on('connections', (message) =>{
      io.use((socket, next) => {
        const id = socket.handshake.auth.ID;
        if (!id) {
          return next(new Error("invalid username"));
        }
        socket.ID = id;
        next();
      });
      let currentid = socket.id;
      socket.broadcast.emit("user connected", {
        // new user connected we should send him all existing users and then send 'him' other existing users
        userID:  socket.id,
        ID: message.ID,
      });
      for (let [id, socket] of io.of("/").sockets) {
        if(currentid!=id){
          users.push({
          userID: id,
          ID: socket.handshake.auth.ID,
        });
      }
    }
      // if there is users send else no.  
      if(users.length>0){
        socket.emit("users", users);
      }
      })
      
      socket.on('disconnect', (st) =>{
        console.log("bro connect !")
        socket.broadcast.emit("user disconnected", socket.ID);
      })

      socket.on('groupchat', ({message,to,server_id}) =>{
        console.log(message,to)
        console.log(server_id)
        console.log("shine")
        let target = server_id;
        for (let [id, socket] of io.of("/").sockets) {
          if(socket.handshake.auth.ID==to){
            target = id;
            break;
          }
        }
        socket.to(target).to(socket.userID).emit('receiveMessage',{
          message: message,
          from: socket.ID,
          to: to,
          server:server_id
          });

        
          socket.to(target).to(socket.userID).emit('Notification',{
            message: message,
            from: socket.ID,
            to: to
            });

        console.log("he"+socket.ID+" "+to)
    
    })

});

server.listen(3001, () => {
  console.log('listening on *:3001');
});

