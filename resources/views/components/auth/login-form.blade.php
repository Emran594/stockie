<div class="col-lg-6">
    <div class="p-lg-5 p-4">
        <div>
            <h5 class="text-primary">Welcome Back !</h5>
            <p class="text-muted">Sign in to continue to Bookie.</p>
        </div>
        <div class="mt-4">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" placeholder="User Email" class="form-control" type="email"/>
                </div>

                <div class="mb-3">
                    <div class="float-end">
                        <a href="{{ url('/sendOtp') }}" class="text-muted">Forgot password?</a>
                    </div>
                    <label class="form-label" for="password">Password</label>
                    <input id="password" placeholder="User Password" class="form-control" type="password"/>
                </div>
                <div class="mt-4">
                    <button onclick="SubmitLogin()" class="btn btn-success w-100">Sign In</button>
                </div>
        </div>

        <div class="mt-5 text-center">
            <p class="mb-0">Don't have an account ? <a href="{{ url('/userRegistration') }}" class="fw-semibold text-primary text-decoration-underline"> Signup</a> </p>
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
                 // showLoader();
                  let res=await axios.post("/user-login",{email:email, password:password});
                //  hideLoader()
                  if(res.status===200 && res.data['status']==='success'){
                      window.location.href="/dashboard";
                  }
                  else{
                      errorToast(res.data['message']);
                  }
              }
      }

  </script>
