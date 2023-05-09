function suggestNames(str) {
    if (str.length == 0) {
        document.getElementById("output").innerHTML = "";
        return
        ;
    } else {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("output").innerHTML = this.responseText;
            }
        };
        xhr.open("POST", "citysuggest.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoder");
        xhr.send("forminput="+str);
    }
}