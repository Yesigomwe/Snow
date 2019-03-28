<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <header>
        <div class="navbar">
            <div class="navbar-expand-xl">
                <h2>Snow's Assignment guys</h2>
            </div>
        </div>
    </header>

    <section style="padding-left: 20px;padding-right: 2px">
        <h style ="font-size: larger" ><b>BioData</b></h>
    <div class="row">
        <div class="col-6">
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for ="name"> userName</label>
                    <input class="form-control" type="text" name="userName" id ="name" required>
                </div>
                <div class="form-group">
                    <label for ="email"> Email</label>
                    <input class="form-control" type="email" name="email" id ="email" required>
                </div>
                <div class="form-group">
                    <label for ="contact"> PhoneNumber</label>
                    <input class="form-control" type="number" name="contact" id ="contact" required>
                </div>
                <div class="form-group">
                    <label for ="Address"> Address</label>
                    <input class="form-control" type="text" name="address" id ="address" required>
                </div>
                <button type = "Submit" class="btn btn-primary" name="Submit">Submit</button>
            </form>
        </div>
    </div>
    </section>
    </body>
</html>