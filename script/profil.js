function modify(id){
   var obj_p=document.getElementById("p-"+id);
   txt=obj_p.textContent;
   obj_p.style.display="none";
   var textbox=document.getElementById("text-nom");
    textbox.style.display="inline";
    textbox.focus();
    textbox.value=txt;

}