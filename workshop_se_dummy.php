<html>
<body>
    <form name="form">
        <input type="date" name="date1">
        <input type="date" name="date2">
         <input type="submit" onclick="validation()">
    </form>
</body>
<script type="text/javascript">
    function validation()
    {
    var date1 = form.date1.value;
    var date2 = form.date2.value;
    if(date1>date2){
        document.write("hii");
    }
    if(date1<date2){
        document.write("hello");
    }
    
}

</script>
</html>