<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Form Project</title>
</head>

<body>
     
    <div class="container" style="padding: 50px">
        <form method="POST" action="#">
            
           <!-- first row -->
            <div class="row" >
                <div class="col">
                    <label for="firstnameBox" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstnameBox" placeholder="First name">
                </div>
                <div class="col">
                    <label for="lastnameBox" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastnameBox" placeholder="Last name">
                </div>
            </div>
           
            <!-- Second row -->
            <div class="row" style="padding-top: 20px">
                <div class="col-12">
                    <label for="addressBox" class="form-label">Address</label>
                    <input type="text" class="form-control" id="addressBox" placeholder="Address">
                </div>
            </div>

            <!-- Third row -->
            <div class="row" style="padding-top: 20px">

                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="City">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">

                        <option>Alaska</option>
                        <option>Louisiana</option>
                        <option selected>Michigan</option>
                        <option>Montana</option>
                        <option>New York</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip" placeholder="Zip">
                </div>

            </div>

            <!-- Fourth row -->
            <div class="form-check form-check-inline" style="padding: 20px">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="maleRadio">
                <label class="form-check-label" for="maleRadio">
                    Male
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="femaleRadio" checked>
                <label class="form-check-label" for="femaleRadio">
                    Female
                </label>
            </div>

            <!-- Last row -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>


        </form>

    </div>

</body>

</html>