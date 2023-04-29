
const searchBar = document.querySelector(".search-chatsystem input"),
searchIcon = document.querySelector(".search-chatsystem button"),
usersList = document.querySelector(".users-list-chatsystem");



//The first three lines use the document.querySelector method to select elements from the HTML page. 
//The first line selects an input element with a class of search.
// The second line selects a button element with a class of search. 
//The third line selects an element with a class of users-list.


searchIcon.onclick = ()=>{
  searchBar.classList.toggle("show");
  searchIcon.classList.toggle("active");
  searchBar.focus();
  if(searchBar.classList.contains("active")){
    searchBar.value = "";
    searchBar.classList.remove("active");
  }
}



searchBar.onkeyup = ()=>{
  let searchTerm = searchBar.value;
  console.log("Pamith");

  if(searchTerm != ""){
    searchBar.classList.add("active");
  }else{
    searchBar.classList.remove("active");
  }

  let xhr = new XMLHttpRequest()
  
  xhr.open('POST', 'http://localhost/Cropfello/public/Chat/search',true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          usersList.innerHTML = data;
        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}

///When a key is pressed in the search bar, another event listener is triggered
// that sets up an XMLHttpRequest object to send a POST request to php/search.php.
// The onload event fires when the response to the request is received. 
//If the readyState property of the response is equal to XMLHttpRequest.
//DONE and the status property is equal to 200 (which means the response was successful),
// the response data is assigned to the innerHTML property of the usersList element.




setInterval(() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "http://localhost/Cropfello/public/Chat/chat", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          if(!searchBar.classList.contains("active")){
            usersList.innerHTML = data;
          }
        }
    }
  }
  xhr.send();
}, 500);

