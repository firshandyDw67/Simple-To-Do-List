// change theme 
var icon = document.getElementById("icon");

icon.onclick = function(){
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")){
        icon.src = "icon/sun.png";
    }else {
        icon.src = "icon/moon.png"; 
    }
    
}

// line through
var checkboxes = document.querySelectorAll('.checkbox');
var texts = document.querySelectorAll('.text');

checkboxes.forEach(function(checkbox, index){
    checkbox.addEventListener("change", function(){
        if(this.checked){
            texts[index].style.textDecoration = "line-through";
        }else {
            texts[index].style.textDecoration = "none";
        }
    });
});

// close button
function togglePopup(){
    document.getElementById("popup-1").classList.toggle("active");
}