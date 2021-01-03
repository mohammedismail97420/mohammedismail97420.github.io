function getAndUpdate() {
  var tit = document.getElementById("title").value;
  if (tit != "") {
    document.getElementById("title").placeholder = "Enter item";
    document.getElementById("title").classList.remove("error");
    if (localStorage.getItem("itemsJson") == null) {
      itemJsonArray = [];
      itemJsonArray.unshift([tit]);
      localStorage.setItem("itemsJson", JSON.stringify(itemJsonArray));
    } else {
      itemJsonArrayStr = localStorage.getItem("itemsJson");
      itemJsonArray = JSON.parse(itemJsonArrayStr);
      itemJsonArray.unshift([tit]);
      localStorage.setItem("itemsJson", JSON.stringify(itemJsonArray));
    }
    update();
  } else {
    document.getElementById("title").placeholder = "Enter item to add";
    document.getElementById("title").classList.add("error");
  }
}

function update() {
  if (localStorage.getItem("itemsJson") == null) {
    itemJsonArray = [];
    localStorage.setItem("itemsJson", JSON.stringify(itemJsonArray));
  } else {
    itemJsonArrayStr = localStorage.getItem("itemsJson");
    itemJsonArray = JSON.parse(itemJsonArrayStr);
  }

  let listcontainer = document.getElementById("list-container");
  let str = "";
  itemJsonArray.forEach((element, index) => {
    str += `
            <div class="list shadow">
            <span>${element}</span>
            <button onclick="deleted(${index})" class="remove-btn">×</button>
            </div>`;
  });
  listcontainer.innerHTML = str;
  document.getElementById("title").value = "";
}
var add = document.getElementById("add");
if (add) {
  add.addEventListener("click", getAndUpdate);
}
var tit = document.getElementById("title");
tit.addEventListener("keyup", function (event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("add").click();
  }
});
update();
function deleted(itemIndex) {
  itemJsonArrayStr = localStorage.getItem("itemsJson");
  itemJsonArray = JSON.parse(itemJsonArrayStr);
  itemJsonArray.splice(itemIndex, 1);
  localStorage.setItem("itemsJson", JSON.stringify(itemJsonArray));
  update();
}
function clearStorage() {
  if (localStorage.getItem("itemsJson") == null) {
    alert("Nothing to clear");
  } else {
    if (confirm("Are you sure?")) {
      localStorage.clear();
      update();
    }
  }
}

if ("serviceWorker" in navigator) {
  navigator.serviceWorker
    .register("sw.js", {
      scope: "/", // <--- THIS BIT IS REQUIRED
    })
    .then(
      function (registration) {
        // Registration was successful
        console.log(
          "ServiceWorker registration successful with scope: ",
          registration.scope
        );
      },
      function (err) {
        // registration failed :(
        console.log("ServiceWorker registration failed: ", err);
      }
    );
}

let deferredPrompt;
const addBtn = document.querySelector(".add-button");
addBtn.style.display = "none";


window.addEventListener("beforeinstallprompt", (e) => {
  // Prevent Chrome 67 and earlier from automatically showing the prompt
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
  // Update UI to notify the user they can add to home screen
  addBtn.style.display = "block";

  addBtn.addEventListener("click", (e) => {
    // hide our user interface that shows our A2HS button
    addBtn.style.display = "none";
    // Show the prompt
    deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice.then((choiceResult) => {
      if (choiceResult.outcome === "accepted") {
        console.log("User accepted the A2HS prompt");
      } else {
        console.log("User dismissed the A2HS prompt");
      }
      deferredPrompt = null;
    });
  });
});