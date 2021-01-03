
//Get the button
//var mybutton = document.getElementById("mybtn");

// When the user scrolls down 10px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topfunc() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
//change elements colour
function changeBGC(color){
if (color=='#000000'){
		document.body.style.backgroundColor = color;
    document.getElementById('Joat_head').style.color='white';
    document.getElementById('lbl').style.color="white";
    document.getElementById('lbl_2').style.color="white";
    document.getElementById('lbl_3').style.color="white";
    document.getElementById('lbl_4').style.color="white";
    document.getElementById('lbl_5').style.color="white";
    document.getElementById('head_login').style.color="white";
    document.getElementById('lbl_pwd').style.color="white";
    document.getElementById('lbl_email').style.color="white";


	}else{
    //change element colour back
		document.body.style.backgroundColor = color;
		document.getElementById('Joat_head').style.color='black';
    document.getElementById('lbl').style.color="black";
    document.getElementById('lbl_2').style.color="black";
    document.getElementById('lbl_3').style.color="black";
    document.getElementById('lbl_3_3').style.color="black";
    document.getElementById('lbl_4').style.color="black";
    document.getElementById('lbl_5').style.color="black";
    document.getElementById('lbl_pwd').style.color="black";
    document.getElementById('lbl_email').style.color="black";


  }}

function changesize(){
// loop through the document to find all p and change the size
var i,text= document.querySelectorAll('p');
for (i=0; i< text.length; i++){
 text[i].style.fontSize='20px';

}}
function changeback(){
// loop through the document to find all <p> and change the size back
var i,text= document.querySelectorAll('p');
for (i=0; i< text.length; i++){
 text[i].style.fontSize='14px';

}}
