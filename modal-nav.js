 // Get the modal

 var modal_notification = document.getElementById("myModal-notification");


 // Get the button that opens the modal

 var btn_notification = document.getElementById("myBtn-notification");
 

 // When the user clicks the button, open the modal 

btn_notification.onclick = function () {
    modal_notification.style.display = "block";
}

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function (event) {
    
     if (event.target == modal_notification) {
        modal_notification.style.display = "none";
    }
 }