var a;
function show(){
    if(a==1){
        document.getElementById("showw").style.display("inline");
        return a=1;
    }else{
        document.getElementById("showw").style.display("none");
        return a=0;
    }
}