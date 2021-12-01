funtion fetchg(){

let data = new URLSehParans();

data.append("performer1", document.getElementbyId("male").value);
data.append("performer2", document.getElementbyId("male2").value);
data.append("performer3", document.getElementbyId("fmale").value);
data.append("performer4", document.getElementbyId("fmale2").value);

fetch ("voting page.php",{
method:"post",
body:data
})
.then (function(response){
return reponse.text();
})
.then (function(text){
console. log(text);
})
.catch (function(error){
console.log(error);
});

return false;
}