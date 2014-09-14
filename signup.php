<!-- NOTE
SINGLE PAGE FORM ALONG WITH VALIDATION
NO PHP LEAKS BACK TO THE INDEX 
 -->
<form class="form-horizontal" role="form">
    <div class="row form-group">
        <div class="col-md-6">
            <input type="fname" class="form-control" id="fname" placeholder="First Name">
        </div>
        <div class="col-md-6">
            <input type="lname" class="form-control" id="lname" placeholder="Last Name">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="number" class="form-control" id="contactNo" placeholder="Contact No.">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox">Remember me
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-10">
            <button type="submit" class="btn btn-default">Sign in</button>
        </div>
    </div>

</form>
