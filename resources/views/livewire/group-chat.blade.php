<div class="row">




<script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>
@php $lang= $_COOKIE['selectedLanguage'] ?? 'en' @endphp

@if ($selected)
             <div id="popupContainer" class="popup">
                <div class="popup-content">
                    <span id="closePopup" class="close-popup">&times;</span>
                    <h2>@if ($lang=='en') Members @elseif($lang=='fr')Members@elseif($lang=='es')الأعضاء@endif</h2>
                    <ul class="list-group">
                          @foreach ($selected->getGroupMembers() as $id)
                                <li class="list-group-item">
                                <img  style="width: 50px !important;height: 50px;" id="profile-picture" src="../{{App\Models\User::find( $id )->profile_photo_path}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm prf-im">
                                        {{App\Models\User::find( $id )->name }} 
                                        @if(auth()->id()==$selected->admin_id)
                                        <a   wire:click="$emit('removeUser', {{ $id }})"  class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">
                                        @if ($lang=='en') remove @elseif($lang=='fr')supprimer@elseif($lang=='es')ازالة@endif
                                        </a>
                                        @endif
                                </li>
        
                          @endforeach
                    </ul>
                </div>
            </div>
@endif

<script>
  let socket = null;

document.addEventListener('DOMContentLoaded', function() {

  let ip = '127.0.0.1';
  let port = '3001';
  socket = io(ip+':'+port);

  socket.auth = {ID:parseInt('{{auth()->id()}}')};
  socket.emit('connections',socket.auth)
  socket.on("user connected", (user) => {
        window.livewire.emit('userConnected',{ status: 'connected', id: user.ID });
        console.log(user);
        console.log("hi u connected")
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

                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2" style="justify-content: space-between;">
                
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">{{$group->name}}</h6>
                    <p class="mb-0 text-xs">  @if ($lang == 'en') created by
                    @elseif ($lang == 'en') créé par 
                    @elseif ($lang == 'es') يتم إدارته من قبل 
                    @endif
                    <b> {{App\Models\User::find( $group->admin_id )->name }} </b></p>
                  </div>
                  <div>  
                      <a wire:click="$emit('showMessages', {{ $group->id }})"  class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">
                        @if ($lang == 'en') Reply
                        @elseif ($lang == 'en') Réponder
                        @elseif ($lang == 'es') الرد
                        @endif
                      </a>
                      <a wire:click="$emit('leaveGroup', {{ $group->id }})" class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;" style="color:red;padding:0" >
                        @if ($lang == 'en') Leave
                        @elseif ($lang == 'en') quitter
                        @elseif ($lang == 'es') الخروج
                        @endif
                      </a>
                  </div>
                </li>
                @endforeach
            </ul>
            </div>
          </div>
        </div>

        <div class="col-12 col-xl-4 chat-ui">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">
              @if ($selected)
                    {{$selected['name']}}                         
                  
             @else
                    @if ($lang == 'en') Conversations
                    @elseif ($lang == 'en') Conversations
                    @elseif ($lang == 'es') المحادثات
                    @endif

              @endif

            </h6>

            
            @if ($selected)
                    <a  id="popupbtn" class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">
                    @if ($lang == 'en') Members
                    @elseif ($lang == 'en') Members
                    @elseif ($lang == 'es') الأعضاء
                    @endif
                    </a>

                    <script>
                      
                      document.getElementById("closePopup").addEventListener("click", function() {
                        document.getElementById("popupContainer").classList.remove("active"); 
                      });
                      
                      document.getElementById('popupbtn').onclick = ()=>{
                        console.log("hii")
                        document.getElementById("popupContainer").classList.add("active"); 
                         
                      }
                                        </script>
            
            @endif

                    
            </div>
            <div class="card-body p-3">
              <ul class="list-group">
              
              <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 chtview">
              @if ($selected)
                  
                    <div id='chat-body' class="chat-body" style="width: 100%;">
                        @foreach ($messages as $m)
          
                            @if ( $m['sender_id'] != auth()->id() )
                            <div>{{App\Models\User::find( $m['sender_id'])->name }}</div>   
                            <div class="message received">
                                <p class='message__bubble bubble' >{{$m['message']}}</p>
                                </div>
                            @else
                                <div class="message sent">
                                   
                                    <p class='message__bubble bubble'>{{$m['message']}}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                        <div class="chat">
                        <!--wire:model.debounce.500ms="text"  wire:click="sendMessages" wire:keydown.enter="sendMessages" -->
                        <input class='inpc' id="inputmess" type="text" placeholder="Type a message..." />
                        <button class ="btnc" style="color: #5488ff;"  wire:model.debounce.50ms="text" id='inputmess-btn' type="submit"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    @if (Route::has('login'))
                    <script>
                    function scrollDown(){
                        document.getElementById('chat-body').scrollTop = document.getElementById('chat-body').scrollHeight;
                    }
                    scrollDown();
                    // socket.on("connected");
                    document.getElementById("inputmess").addEventListener("keypress",function(e){
                          let mssg = this.value;
                          if(e.which == 13 && !e.shiftKey){
                          // user sends message     
                          window.livewire.emit('sendMessages',mssg);
                          socket.emit("groupchat",{'message':mssg,'to':"{{auth()->id()}}",'server_id':"{{$selected->id}}"})
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
                        socket.emit("groupchat",{'message':mssg,'to':"{{auth()->id()}}",'server_id':"{{$selected->id}}"})
                        document.getElementById("inputmess").value = "";
                        setTimeout( ()=>{scrollDown() } , 900 )
                    }


                    socket.on('receiveMessage',({message,to,from,server})=>{
                        // if opened panned user then read it normally
                        if("{{$selected}}"){ 
                          if( parseInt(server) == parseInt('{{$selected->id}}')){
                            window.livewire.emit('receivedMessage',from,message,server);
                            window.livewire.hook('element.updated', function(el, component) {
                                scrollDown()                       
                            });
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


