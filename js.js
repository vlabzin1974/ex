
function d(x){
  var test=document.getElementById('test');
  var inTest = document.createElement('i');
  inTest.innerHTML = x;
  test.appendChild(inTest);
}

$('#bColl').click(function(){
  $('#coll').fadeIn( 5000);
});

$( "#clickme" ).click(function() {
  $( "#book" ).hide( "slow", function() {
    alert( "Animation complete." );
  });
});

/*
 $("#bColl").click(function(){
 $("#frm").hide(4000);
 });*/
/*var myRequest = new XMLHttpRequest();
myRequest.onreadystatechange = function(){
 dw('Called');
 dw(myRequest.readyState);
 dw(myRequest.responseText);
};*/

//myRequest.open('GET', 'http://autosalon163.ru', true);
/*myRequest.open('GET', 'simple.txt', true);
myRequest.send(null);*/

/*var inputTxt = document.getElementById('txt');

 document.getElementById('frm').onsubmit = function(){
 if(document.getElementById('txt').value==""){
 document.getElementById('error').innerHTML = "pole pustoe";
 return false;
 }
 };
 //var p = document.forms.frm.name;

 var bColl = document.getElementById('bColl');
 var coll = document.getElementById('coll');

 bColl.onclick = function(){
 if(coll.style.display !='none'){
 coll.style.display ='none';
 } else {
 coll.style.display ='block'
 }
 };*/
