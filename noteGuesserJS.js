document.getElementById("aBtn").addEventListener("click", function(){buttonClick('A')});
document.getElementById("bBtn").addEventListener("click", function(){buttonClick('B')});
document.getElementById("cBtn").addEventListener("click", function(){buttonClick('C')});
document.getElementById("dBtn").addEventListener("click", function(){buttonClick('D')});
document.getElementById("eBtn").addEventListener("click", function(){buttonClick('E')});
document.getElementById("fBtn").addEventListener("click", function(){buttonClick('F')});
document.getElementById("gBtn").addEventListener("click", function(){buttonClick('G')});
var globalMargin = newNote();

function buttonClick(guess){
  console.log(globalMargin);
  if(guess == convertMarginToNote(globalMargin)){
    console.log("Correct")
    document.getElementById("results").innerHTML = "Correct! The note is " + convertMarginToNote(globalMargin);
    document.getElementById("results").style.backgroundColor = "green";
  } else{
    console.log("Wrong");
    document.getElementById("results").innerHTML = "Incorrect. The note is " + convertMarginToNote(globalMargin);
    document.getElementById("results").style.backgroundColor = "red";
  }
  globalMargin=newNote();
}

function newNote() {
  var note = document.getElementById('note')
  var newMarginTop = (27.5 * Math.floor(Math.random()*8)) + 35;
  console.log(newMarginTop)
  note.style.marginTop = newMarginTop + `px`
  //note.style.marginTop = `2vh`
  console.log(convertMarginToNote(newMarginTop));
  return(newMarginTop);
}

function convertMarginToNote(margin){
  var p = ((margin-35) / 27.5) //finds notes position on the staff, 1 is the topmost, 9 is the bottom, but minus 1 for the array
  const notes = ["F","E","D","C","B","A","G","F","E"]
  return notes[p];
}