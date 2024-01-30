<div class="col-lg-6">
    <div class="p-lg-5 p-4">
        <div>
            <h5 class="text-primary">Register Account</h5>
            <p class="text-muted">Get your Booking account now.</p>
        </div>

        <div class="mt-4">
                <div class="mb-3">
                    <label>Email Address</label>
                    <input id="email" placeholder="User Email" class="form-control" type="email"/>
                </div>

                <div class="mb-3">
                    <label>First Name</label>
                    <input id="firstName" placeholder="First Name" class="form-control" type="text"/>
                </div>
                <div class="mb-3">
                    <label>Last Name</label>
                    <input id="lastName" placeholder="Last Name" class="form-control" type="text"/>
                </div>
                <div class="mb-3">
                    <label>Mobile Number</label>
                    <input id="mobile" placeholder="Mobile" class="form-control" type="mobile"/>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input id="password" placeholder="User Password" class="form-control" type="password"/>
                </div>
                <div class="mt-4">
                    <button class="btn btn-success w-100" onclick="onRegistration()">Sign Up</button>
                </div>
        </div>

        <div class="mt-5 text-center">
            <p class="mb-0">Already have an account ? <a href="{{ '/userLogin' }}" class="fw-semibold text-primary text-decoration-underline"> Signin</a> </p>
        </div>
    </div>
</div>

<script>


    async function onRegistration() {

          let email = document.getElementById('email').value;
          let firstName = document.getElementById('firstName').value;
          let lastName = document.getElementById('lastName').value;
          let mobile = document.getElementById('mobile').value;
          let password = document.getElementById('password').value;

          if(email.length===0){
              errorToast('Email is required')
          }
          else if(firstName.length===0){
              errorToast('First Name is required')
          }
          else if(lastName.length===0){
              errorToast('Last Name is required')
          }
          else if(mobile.length===0){
              errorToast('Mobile is required')
          }
          else if(password.length===0){
              errorToast('Password is required')
          }
          else{
              let res=await axios.post("/user-registration",{
                  email:email,
                  firstName:firstName,
                  lastName:lastName,
                  mobile:mobile,
                  password:password
              })
              if(res.status===200 && res.data['status']==='success'){
                  successToast(res.data['message']);
                  setTimeout(function (){
                      window.location.href='/userLogin'
                  },2000)
              }
              else{
                  errorToast(res.data['message'])
              }
          }
      }
  </script>
