/*function replacementColor(){
                 var bg = document.getElementById("p-1");
                 alert("BACKGROUND COLOR IS CHANGED from  " + bg.style.backgroundColor);
                if ((bg.style.backgroundColor == "blue") || (bg.style.backgroundColor == "")){
                    bg.style.backgroundColor = "green";
                }
                else{
                    bg.style.backgroundColor = "blue";
                }
            }
            */

function OnReload() {
    $.ajax({
          url:"phonebook.php",
          type:"POST",
          dataType: "text",
          data: "",
          success:function(result) {
              $("#phonebook").html(result)
          }
        });
}

function OnSubmit() {
    let name = $("#name-input").val();
    let surname = $("#surname-input").val();
    let phone = $("#phone-input").val();
    if (name === "" || phone === "" || surname === "") 
        alert("Неверные данные!")
    else
        $.ajax({
          url:"answer.php",
          type:"POST",
          dataType: "text",
          data: "name="+name+"&surname="+surname+"&phone="+phone,
          success:function(result) {
              OnReload();
          }
        });
}

function Del() {
    let phone = $("#phone-input").val();
     alert("работаем")
    if (phone === "" ) 
        alert("Неверные данные!")
    else
        $.ajax({
          url:"delete.php",
          type:"POST",
          dataType: "text",
          data: "&phone="+phone,
          success:function(result) {
              OnReload();
          }
        });
}



$(function(){
  $("#submit-btn").click(OnSubmit);
  $("#reload").click(OnReload);
  $("#del").click(Del);
  });


 // function rem(phone) {
//    $.ajax({
//              url:"delete.php",
//              type:"POST",
//              dataType: "text",
//              data: "phone="+phone,
//              success:function(result) {
//                  OnReload();
//                  alert('ok');
//              }
//            });
//};


