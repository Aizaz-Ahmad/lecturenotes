$("#calc").click(function (e) { 
  $("#calc .fa-angle-down").toggle(100);
  $("#calc .fa-angle-up").toggle(100);
  $("#calclinks").toggle(100);
});
$("#toa").click(function (e) { 
    $("#toa .fa-angle-down").toggle(100);
    $("#toa .fa-angle-up").toggle(100);
  $("#toalinks").toggle(100);
  });
  $("#coal").click(function (e) { 
    $("#coal .fa-angle-down").toggle(100);
    $("#coal .fa-angle-up").toggle(100);
  $("#coallinks").toggle(100);
  });
  $("#oop").click(function (e) { 
    $("#oop .fa-angle-down").toggle(100);
    $("#oop .fa-angle-up").toggle(100);
  $("#ooplinks").toggle(100);
  });
  $(".upload-btn").click(()=>{
      window.location  = 'upload.php';
  });
  $(".submit").click((e)=>{
      if($("#pin").val() != "5460"){
      alert("Invalid PIN");
      }
      else{
      $(".pin-form").hide();
      $(".submit").hide();
      $(".notes-form").show();
      $("#btn-upl").show();
      }
});
$("#btn-upl").click((e)=>{
      if($("#link").val() == "" || $("#name").val() == "" ){
        alert("Must Fill All fields");
        e.preventDefault();
      }
});