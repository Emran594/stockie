<div class="col-lg-6">
    <div class="p-lg-5 p-4">
        <div>
            <h5 class="text-primary">Welcome Back !</h5>
            <p class="text-muted">Sign in to continue to Bookie.</p>
        </div>
        <div class="mt-4">
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter username">
                </div>

                <div class="mb-3">
                    <div class="float-end">
                        <a href="" class="text-muted">Forgot password?</a>
                    </div>
                    <label class="form-label" for="password">Password</label>
                    <label for="password" class="form-label">Email</label>
                    <input type="password" class="form-control" id="email" name="password" placeholder="Enter Password">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                </div>

                <div class="mt-4">
                    <button class="btn btn-success w-100" type="submit">Sign In</button>
                </div>

            </form>
        </div>

        <div class="mt-5 text-center">
            <p class="mb-0">Don't have an account ? <a href="{{ url('/user-registration') }}" class="fw-semibold text-primary text-decoration-underline"> Signup</a> </p>
        </div>
    </div>
</div>


<script>

    async function SubmitLogin() {
              let email=document.getElementById('email').value;
              let password=document.getElementById('password').value;
  
              if(email.length===0){
                  errorToast("Email is required");
              }
              else if(password.length===0){
                  errorToast("Password is required");
              }
              else{
                  showLoader();
                  let res=await axios.post("/user-login",{email:email, password:password});
                  hideLoader()
                  if(res.status===200 && res.data['status']==='success'){
                      window.location.href="/dashboard";
                  }
                  else{
                      errorToast(res.data['message']);
                  }
              }
      }
  
  </script>