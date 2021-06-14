<footer>

</footer>

</body>

<script>

    function add(n) {

        var priceId = "price" + n;

        window.price = document.getElementById(priceId).innerHTML;
        console.log(price);
        alert("Successfuly Added pls click on go to cart button");
        
    }

    function gotocart() {

        var queryString = '?price='+price;

        window.location.href = "form.html"+queryString;
        console.log(queryString);
     
       
        return false;
    }


</script>
</html>