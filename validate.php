<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
</head>
<script>
    $(document).ready(function() {
        $('#form1').validate({
            rules: {
                fn: {
                    required: true,
                    minlength: 3,
                    maxlength: 30,
                    pattern: /^[a-zA-Z ]+$/
                },
                email: {
                    required: true,
                    email: true,
                },
                pswd: {
                    required: true,
                    minlength: 8,
                    maxlength: 20,
                    pattern: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%#*?&])[A-Za-z\d@$!%*?#&]{8,20}$/
                },
                gen: {
                    required: true,
                }
            },
            messages: {
                fn: {
                    required: "fullname is required field",
                    minlength: "fullname must contain atleast 3 characters",
                    maxlength: "fullname cannot exceed 30 characters",
                    pattern: "fullname should contain only alphabetical characters and spaces"

                },
                email: {
                    required: "email is required field",
                    email: "email should be in a valid format"
                },
                pswd: {
                    required: "Password is required field",
                    minlength: "Password must contain atleast 8 characters",
                    maxlength: "Password cannot exceed 20 characters",
                    pattern: "Password should contain at least 8 characters, including uppercase, lowercase, digits, and special characters"
                },
                gen: {
                    required: "Gender is required field"
                }
            },
            errorElement: "div",
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                if (element.attr('name') == "gen") {
                    error.insertAfter('#gen-error');
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid').removeClass('is-valid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).addClass('is-valid').removeClass('is-invalid');
            }
        });
    });
</script>

<body>
    <div class="container">
        <form action="/action_page.php" id="form1">
            <div class="mb-3 mt-3">
                <label for="nm" class="form-label">Name:</label>
                <input type="text" class="form-control" id="nm" placeholder="Enter Name" name="fn">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <div>
                <label for="pwd" class="form-label">Select Gender:</label><br>
                <input type="radio" id="pwd" name="gen" value="male">Male
                <input type="radio" id="pwd" name="gen" value="female">Female
                <span id="gen-error"></span>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>