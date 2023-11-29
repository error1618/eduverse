<div class="row">
<script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>
@php $lang= $_COOKIE['selectedLanguage'] ?? 'en' @endphp


<script>
  let socket = null;

document.addEventListener('DOMContentLoaded', function() {

  let ip = '127.0.0.1';
  let port = '3000';
  socket = io(ip+':'+port);

  socket.auth = {ID:parseInt('{{auth()->id()}}')};
  socket.emit('connections',socket.auth)
  

  socket.on("user connected", (user) => {
        window.livewire.emit('userConnected',{ status: 'connected', id: user.ID });
        console.log(user);
        //document.getElementById(user.ID).innerHTML+='&nbsp;&nbsp;&nbsp;&nbsp;<span style="display: inline-block;border-radius: 50%;height: 8px;width: 8px;background-color: #5cff54;" class="dot"></span>';            
    });


  // on user on try sending a request to
    socket.on("users", (users) => {
      for(let i = 0 ; i<users.length ; i++){
        window.livewire.emit('userConnected', { status: 'connected', id: users[i].ID });
        console.log(users[i].ID )
        //document.getElementById(users[i].ID).innerHTML+='<span style="display:inline-block;border-radius: 50%;height: 8px;width: 8px;background-color: #5cff54;;" class="dot"></span>';                    
        }
    })
    
    
   

   socket.on("disconnect", (user) => {
    window.livewire.emit('userConnected',{ status: 'disconnect', id: user.ID });
      //document.getElementById(user.ID).innerHTML+='&nbsp;&nbsp;&nbsp;&nbsp;<span style="display: inline-block;border-radius: 50%;height: 8px;width: 8px;background-color: #5cff54;" class="dot"></span>';            
   });
  })

</script>



      

<div class="col-12 col-xl-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">
              
              @if ($lang == 'fr') My Groups
                @elseif ($lang == 'en') Mon Groups
                @elseif ($lang == 'es') مجموعاتي
                @endif

              </h6>
            </div>
            <div class="card-body p-3">
              <ul class="list-group">
              @foreach ($groups as $group)

                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                  <div class="avatar me-3">
                    <img src="../assets/img/kal-visuals-square.jpg" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">{{$group->name}}</h6>
                    <p class="mb-0 text-xs">last message here</p>
                  </div>
                  <a wire:click="$emit('showMessages', {{ $group->id }})"  class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">
                    @if ($lang == 'fr') Reply
                    @elseif ($lang == 'en') Réponder
                    @elseif ($lang == 'es') الرد
                    @endif
                  </a>
                </li>
                @endforeach
            </ul>
            </div>
          </div>
        </div>

        <div class="col-12 col-xl-4 chat-ui">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Conversations</h6>
              
            </div>
            <div class="card-body p-3">
              <ul class="list-group">
              <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
              @if ($selected)
                    <div class="top-bar" id="chat-close">
                              <div class="name">{{$selected['name']}}</div>                            
                    </div>
                    <div id='chat-body' class="chat-body">
                        @foreach ($messages as $m)
          
                            @if ( $m->sender_id != auth()->id() )
                                <div class="message received">
                                    <p class='message__bubble bubble' >{{$m->message}}</p>
                                </div>
                            @else
                                <div class="message sent">
                                    <div>{{App\Models\User::find( $m->sender_id)->name }}</div>
                                    <p class='message__bubble bubble'>{{$m->message}}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="bottom-bar">
                        <div class="chat">
                        <!--wire:model.debounce.500ms="text"  wire:click="sendMessages" wire:keydown.enter="sendMessages" -->
                        <input class='inpc' id="inputmess" type="text" placeholder="Type a message..." />
                        <button class ="btnc" style="color: #5488ff;"  wire:model.debounce.50ms="text" id='inputmess-btn' type="submit"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </div>
                    @if (Route::has('login'))
                    @push('scripts')
                    @endpush

                    <script>
                    function scrollDown(){
                        document.getElementById('chat-body').scrollTop = document.getElementById('chat-body').scrollHeight;
                        console.log('du')
                    }
                    scrollDown();

                    // socket.on("connected");
                    document.getElementById("inputmess").addEventListener("keypress",function(e){
                    let mssg = this.value;
                    if(e.which == 13 && !e.shiftKey){
                    // user sends message     
                    window.livewire.emit('sendMessages',mssg);
                    socket.emit("chat",{'message':mssg,'to':"{{$selected->id}}"})
                    //  document.getElementById("ccm").innerHTML += `<div class="outgoing"><div class="bubble">${mssg}</div></div>`;
                    this.value = "";
                    //document.getElementById("chat-body").innerHTML += `<div class="message sent"><p class="message__bubble bubble">${mssg}</p></div>`;
                    scrollDown()
                    return false; 
                    }
                    setTimeout( ()=>{scrollDown() } , 900 )
                    }) 

                    document.getElementById('inputmess-btn').onclick  = ()=>{
                    let mssg = document.getElementById("inputmess").value;
                    // user sends message     
                    window.livewire.emit('sendMessages',mssg);
                    socket.emit("chat",{'message':mssg,'to':"{{$selected->id}}"})
                    //  document.getElementById("ccm").innerHTML += `<div class="outgoing"><div class="bubble">${mssg}</div></div>`;
                    document.getElementById("inputmess").value = "";
                    //document.getElementById("chat-body").innerHTML += `<div class="message sent"><p class="message__bubble bubble">${mssg}</p></div>`;
                    setTimeout( ()=>{scrollDown() } , 900 )
                    }



                    socket.on('receiveMessage',({message,to,from})=>{
                        // if opened panned user then read it normally
                        if(document.getElementById("chatbox")){ 
                        if(from == parseInt('{{$selected["id"]}}') && parseInt("{{auth()->id()}}") == parseInt(to)){
                        window.livewire.emit('receivedMessage',from,message,'0');
                        console.log("Received message CURRENT USER")
                        // document.getElementById("chat-body").innerHTML += `<div class="message received"><p class="message__bubble bubble">${message}</p></div>`;
                        window.livewire.hook('element.updated', function(el, component) {
                            console.log(el,component);
                            scrollDown()                       
                        });
                        }else if ( parseInt("{{auth()->id()}}") == parseInt(to) && (from != parseInt('{{$selected["id"]}}') || !'{{$selected["id"]}}') )  {  
                        let userame = document.getElementById(""+from+"").innerText;
                        console.log("Received message OTHER USER");
                        window.livewire.emit('receivedMessage',from,message,'1');        
                        }
                    }
                    })


                    </script>
                    @endif



                    @endif
                </li>
                </ul>
            </div>
          </div>
        </div>




</div>


