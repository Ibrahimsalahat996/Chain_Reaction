<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $("#contact_form").validate({
    
            rules: {
                first_name: {
                    required: true,
                    maxlength: 20,
                },
                last_name: {
                    required: true,
                    maxlength: 20,
                },
                phone: {
                    required: true,
                    minlength: 9,
                    maxlength: 13,
                    number: true
                },
              
              
            },
            messages: {
                first_name: {
                    required: "First Name is required",
                    maxlength: "First Name cannot be more than 20 characters"
                },
                last_name: {
                    required: "Last Name is required",
                    maxlength: "Last Name cannot be more than 20 characters"
                },
                
                phone: {
                    required: "Phone number is required",
                    minlength: "Phone number must be of 9 digits",
                    maxlength: "Phone number must be less than 13 digits"
                },
               
            }
        });
        $("#contact_form_sec").validate({
    
            rules: {
                first_name: {
                    required: true,
                    maxlength: 20,
                },
            
                phone: {
                    required: true,
                    minlength: 9,
                    maxlength: 13,
                    number: true
                },
              
              
            },
            messages: {
                first_name: {
                    required: "Name is required",
                    maxlength: "Name cannot be more than 20 characters"
                },
            
                
                phone: {
                    required: "Phone number is required",
                    minlength: "Phone number must be of 9 digits",
                    maxlength: "Phone number must be less than 13 digits"
                },
               
            }
        });
    });
</script>