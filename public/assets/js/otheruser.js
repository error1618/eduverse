

document.getElementById('befr').onclick = ()=>{
  console.log("{{$userOther->id}}")
  befriend(document.querySelector('meta[name="user-id"]').getAttribute("content"))
}



document.getElementById("closePopup").addEventListener("click", function() {
  document.getElementById("popupContainer").classList.remove("active"); 
});

document.getElementById('popupbtn').onclick = ()=>{
  document.getElementById("popupContainer").classList.add("active"); 
   
}

async function  befriend(id){
        const response = await fetch("users/message?id="+id, {
          method: "GET",
          headers: {
            'Content-Type': 'application/json',
            "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content"),
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
          },
          credentials: "same-origin",
        }
        ).then((R)=>{
          window.location.href = "/profile"; 
        }).catch((e)=>{
          console.log(e)
        });  
        console.log(response);
   
}

