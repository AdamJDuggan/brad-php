<?php

?>


<!DOCTYPE html>
<html>
<head>
<title>
Search users
</title>
<script>
    function showSuggestion(string){
        if(string.length == 0){
            document.getElementById('output').innerHTML === "";
        }
        else{
            // AJAX
            xmlhttp = new  XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('output').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "suggest.php?q="+string, true);
            xmlhttp.send();
        }
    }
</script>
</head>
<body>
<h1>Search users</h1>
<form>
<input placeholder="Search users" type="text"
onkeyup="showSuggestion(this.value)"
/>
<p>Form suggestions: <span id="output"></span></p>
</form>
</body>
</html>