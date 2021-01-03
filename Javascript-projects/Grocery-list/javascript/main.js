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
