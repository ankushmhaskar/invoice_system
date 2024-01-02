<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $("#customer_name").on("change", function() {
            var selectd_customer = $(this).val();
            $.ajax({
                type: "POST",
                url: '/create_order',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    selectd_customer: selectd_customer
                }
            }).done(function(response) {
                // alert(msg);
                var customer = response.customer;
                $('#customerDetails').html('<p class="m-0">Name: ' + customer.customer_name + '</p><p class="m-0">Email: ' + customer.email + '</p><p class="m-0">Address: ' + customer.address + '</p><p class="m-0">Contact: ' + customer.mobile_num + '</p>');
            });
        });
    });
</script>

</body>

</html>
