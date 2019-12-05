function colorHover(event){
    var text = event.target;
    var classItem = text.classList;
    console.log(document.getElementsByClassName(classItem).item(0).getElementsByClassName("textImage").item(0));
    document.getElementsByClassName(classItem).item(0).getElementsByClassName("textImage").item(0).classList.add("itemHover");
}

function colorOver(event){
    var text = event.target;
    var classItem = text.classList;
    console.log(document.getElementsByClassName(classItem).item(0).getElementsByClassName("textImage").item(0));
    document.getElementsByClassName(classItem).item(0).getElementsByClassName("textImage").item(0).classList.remove("itemHover");
}

function click(event){
    var text = event.target;
    console.log(document.getElementsByClassName(classItem).item(0).getElementsByClassName("textImage").item(0));
    document.location.href("../methode/verifDoor.php?num=" + document.getElementsByClassName(classItem).item(0).getElementsByClassName("textImage").item(0).innerHTML);
}