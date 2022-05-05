
let names = [

"Paris",
"Istanbul", 	
"Moscou",
"Bakou", 
"Calcutta",	
"Bangkok", 	
"Singapour", 
"Melbourne", 
"Sydney", 	
"Fiji", 	
"Hawaï", 
"Alaska", 
"San Francisco", 
"Tijuana", 	
"Chicago", 
"Mexico", 	
"New York",	
"Bogota", 
"Brasilia", 	
"Îles du Cap Vert",



  ];

  let sortedNames = names.sort();
  

  let input = document.getElementById("input");

  input.addEventListener("keyup", (e) => {

    removeElements();
    for (let i of sortedNames) {
   
  
      if (
        i.toLowerCase().startsWith(input.value.toLowerCase()) &&
        input.value != ""
      ) {

        let listItem = document.createElement("li");
    
        listItem.classList.add("list-items");
        listItem.style.cursor = "pointer";
        listItem.setAttribute("onclick", "displayNames('" + i + "')");
  
        let word = "<b>" + i.substr(0, input.value.length) + "</b>";
        word += i.substr(input.value.length);
      
        listItem.innerHTML = word;
        document.querySelector(".list").appendChild(listItem);
      }
    }
  });
  function displayNames(value) {
    input.value = value;
    removeElements();
  }
  function removeElements() {

    let items = document.querySelectorAll(".list-items");
    items.forEach((item) => {
      item.remove();
    });
  }






