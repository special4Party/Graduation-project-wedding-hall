var a=0;
function show(){
    if(a==1){
        document.getElementById("showw").style.display("inline");
        return a=0;
    }else{
        document.getElementById("showw").style.display("none");
        return a=1;
    }
}