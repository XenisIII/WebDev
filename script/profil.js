function modify(id){
   var obj_p=document.getElementById("p-"+id);
   txt=obj_p.textContent;
   obj_p.style.display="none";
   var textbox=document.getElementById("text-nom");
    textbox.style.display="inline";
    textbox.focus();
    textbox.value=txt;
}
function send(id){
   var obj_t=document.getElementById("text-"+id);
   var obj_p=document.getElementById('p-'+id);
   txt=obj_t.value;
   obj_p.textContent=txt;
   obj_t.style.display='none';
   obj_p.style.display="block";
   

}