function zvacsiclick() {
    document.getElementById("demo").style.fontSize = "25px";    
  }


  function zmensiclick() {
    document.getElementById("demo").style.fontSize = "16px";   
  }


  function dragStart(event) {
    event.dataTransfer.setData("Text", event.target.id);
  }
  
  function dragging(event) {
    
  }
  
  function allowDrop(event) {
    event.preventDefault();
  }
  
  function drop(event) {
    event.preventDefault();
    var data = event.dataTransfer.getData("Text");
    event.target.appendChild(document.getElementById(data));
    document.getElementById("demo").style.fontSize = "25px"; 
  }