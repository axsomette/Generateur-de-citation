function startTime() {
    let today=new Date();
    let h=today.getHours();
    let m=today.getMinutes();
    let s=today.getSeconds();
    let ampm = "";
    m = checkTime(m);

    if (h > 12) {
    	h = h - 12;
    	ampm = " PM";
    } else if (h == 12){
        h = 12;
    	ampm = " AM";
    } else if (h < 12){
        ampm = " AM";
    } else {
        ampm = "PM";
    };
  
  if(h==0) {
    h=12;
  }
    
    document.getElementById('display').innerHTML = h+":"+m+ampm;
    let t = setTimeout(function(){startTime()},500);
}

function checkTime(i) {
    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

// function genQuote() {
  // let randNum = Math.floor(Math.random() * 8) + 1;
  //document.getElementById('quote').innerHTML = quotes[randNum];
  //let Quote = quotes[randNum].split(' ').join('%20');
 // Quote = tweetQuote.split('<br>').join('');
//}

//date
function startDate() {
  let d = new Date();
  let days = ["Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"];
  document.getElementById("date").innerHTML = days[d.getDay()]+" | "+[d.getMonth()+1]+"/"+d.getDate()+"/"+d.getFullYear();
}



$(document).ready(function() {
  $("#gen").click(function(){
    $.ajax({
      url: "bdd.php", 
      success: function (response) {
        $("#quote").html(response)
        
      }
  });
 
  });
});
