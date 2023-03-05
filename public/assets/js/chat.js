const form = document.querySelector(".typing-area"),
incoming_id = form.querySelector(".incoming_id").value,

inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");


// The first line selects the HTML element with the class name "typing-area" and assigns it to the variable form.
// The second line selects the HTML element with the class name "incoming_id" that is a child of the form element and assigns its value to the variable incoming_id.
// The third line selects the HTML element with the class name "input-field" that is a child of the form element and assigns it to the variable inputField.
// The fourth line selects the button element that is a child of the form element and assigns it to the variable sendBtn.
// The fifth line selects the HTML element with the class name "chat-box" and assigns it to the variable chatBox.


form.onsubmit = (e)=>{
    e.preventDefault();
}


//sets an event listener for the submit event on the form element and prevents
// its default behavior (i.e., submitting the form and refreshing the page).

inputField.focus();
inputField.onkeyup = ()=>{
    if(inputField.value != ""){
        sendBtn.classList.add("active");
    }else{
        sendBtn.classList.remove("active");
    }
}

// The seventh line sets focus on the inputField element.
// The eighth line sets an event listener for the keyup event on the inputField element. Whenever a key is released, this event will be triggered.
// The ninth to eleventh lines check whether the value of inputField is not an empty string. 
// If it is not empty, the active class is added to the sendBtn element; otherwise, the active class is removed from the sendBtn element.


sendBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", 'http://localhost/Cropfello/public/Chat/insert_chat', true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              inputField.value = "";
              scrollToBottom();
          }
      }
    }
    let formData = new FormData(form);
    console.log(formData);
    xhr.send(formData);
}




chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}

chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}

setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/Cropfello/public/Chat/get_chat", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            chatBox.innerHTML = data;
            if(!chatBox.classList.contains("active")){
                scrollToBottom();
              }
          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("incoming_id="+incoming_id);
}, 500);

function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
  }
  