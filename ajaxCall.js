//POST REQUEST
$(document).ready(function () {
  $("#postMessage").click(function (e) {
    e.preventDefault();
    //serialize form data
    // let url = $("form").serialize();
    // console.log("url  : ",url);
    //let url2 = $("form").serializeArray();
    //console.log("url2 : ",url2);
    // let url3 = $("form").serializeJSON();
    // console.log("url3 : ",url3);
    // //function to turn url to an object
    // function getUrlVars(url) {
    //     let myJson = {};
    //     let hashes = url.split("&");
    //     for (let i = 0; i < hashes.length; i++) {
    //     let hash;
    //     hash = hashes[i].split("=");
    //     myJson[hash[0]] = hash[1];
    //   }
    //   return JSON.stringify(myJson);
    // }
    //pass serialized data to function
    // let test = getUrlVars(url);
    // console.log("test : ",test);
    //post with ajax
    $.ajax({
      type: "POST",
      url: "http://127.0.0.1:8080/15-api/api/post/create.php",
      data: $("form").serializeJSON(),
      ContentType: "application/json",
      success: function () {
        alert("successfully posted");
      },
      error: function () {
        alert("Could not be posted");
      },
    });
  });
});

//GET REQUEST
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("getMessage").onclick = function () {
    let req;
    req = new XMLHttpRequest();
    req.open("GET", "http://127.0.0.1:8080/15-api/api/post/read.php", true);
    req.send();
    req.onload = function () {
      let json = JSON.parse(req.responseText);
      //limit data called
      let dataLimit = json.filter(function (val) {return val.id >= 4;});
      let html = "";
      //loop and display data
      dataLimit.forEach(function (val) {
        let keys = Object.keys(val);
        html += "<div class = 'cat'>";
        keys.forEach(function (key) {
          html += "<strong>" + key + "</strong>: " + val[key] + "<br>";
        });
        html += "</div><hr><br>";
      });
      //append in message class
      document.getElementsByClassName("message")[0].innerHTML = html;
    };
  };
});
