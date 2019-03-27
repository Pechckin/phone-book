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


  function rem(phone) {
    $.ajax({
              url:"delete.php",
              type:"POST",
              dataType: "text",
              data: "phone="+phone,
              success:function(result) {
                  OnReload();
                  //alert('ok');
              }
            });
};


