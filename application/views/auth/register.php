<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Request Demo</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    body {
	  background-image: linear-gradient(#f4fcc4, #f4fcc4, #dff67a, #dff67a, #d9f74d, #d9f74d, #daf948);
	  }
    
    .title {
        width: 300px;
        height: 132px;
        font-size: 40px;
        color: #205707;
        float: left;
        margin-top: 200px;
        margin-left: 100px;
        position: fixed;
        font-family: Poppins;
        line-height: 66px;
        }
    .box1{
        width:750px;
        height:750px;
        background:#c6e537;
        border-radius: 15px;
        float: right;
        margin-right: 50px;
        margin-top: 150px;
        margin-bottom: 200px;
        }
    .row {
        margin-left: 50px;
        margin-top: 50px;
        padding: 0 15px;
        box-sizing: border-box;
	}
	.col_half {
		width: 50%;
		float: left;
	}
    input{
        height: 50px;
        font-size: 18px;
        border-radius: 10px;
        padding-left: 10px;
        margin-bottom: 20px;
        color: #205707;
        }
    p{
        color: #205707;
        font-family: sans-serif;
        margin-bottom: 15px;
        }
    select {
        width: 250px;
        height: 50px;
        font-size: 18px;
        border-radius: 10px;
        margin-bottom: 20px;
        color: #205707;
        padding-left: 25px;
        }
 
    #submit-btn {
        background: #205707;
        border: none;
        border-radius: 30px;
        box-shadow: 0px 1px 8px #f4fcc4;
        cursor: pointer;
        color: white;
        font-family: "Raleway SemiBold", sans-serif;
        height: 70px;
        margin: 0 auto;
        transition: 0.25s;
        width: 200px;
        margin-top: 20px;
        }
        
    * {
        padding: 0px;
        margin: 0px;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
        }

    nav {
        background-color: #eefbb6;
        height: 80px;
        width: 100%;
        position: fixed;
        }

        /* label.logo {
          color: green;
          font-size: 35px;
          line-height: 80px;
          padding: 0 100px;
          font-weight: bold;
        } */

    img {
          height: 80px;
          width: 300px;
          margin-left: 5px;
        }

    nav ul {
          float: right;
          margin-right: 20px;
        }

    nav ul li {
          display: inline-block;
          line-height: 80px;
          margin: 0 20px 20px;
        }

    nav ul li a {
          color: #086404;
        }

    /*Alert*/
    .alert {
    padding: 20px;
    background-color: green; /* Red */
    color: white;
    margin-bottom: 15px;
    position: absolute;
  }
    </style>
    </head>
    
<body>
     <nav>
      <!-- <label class="logo">Greenie Web</label> -->
         <a href="main.html">
      <img src="images/Greenie Web Logo Header.png" alt="Greenie Web" />
             </a>
      <ul>
        <li><a href="main.html#aboutus">About Us</a></li>
        <li><a href="main.html#importance">Importance of Greenifying</a></li>
        <li><a href="main.html#howdoes">How does it work?</a></li>
        <li>
          <a href="demo.html"><span style="border-radius: 5px; background: #cee29b; padding: 5px;">Request Demo</span></a>
        </li>
      </ul>
    </nav>
    
    <div class="title">
        <strong style="font-weight:bolder">Sign Up to Request Demo</strong>
    <a href="main.html">
    <img src="images/Greenie Monster with shadow.png" style="width: 250px; height: 300px;margin-right: 100px;">
    </a>
    </div>
    
    <div class="box1">
      <?= $this->session->userdata('alert'); ?>
        <form action="<?= base_url(); ?>auth/act_register" method="POST">
        <div class="row clearfix">
            <div class="col_half">
              <div class="input_field"> <span></span>
                  <p><b>First Name</b><b style="color: darkred">*</b></p>
                <input type="text" name="name" id="name"placeholder="First Name" required />
              </div>
            </div>
            <div class="col_half">
              <div class="input_field"> <span></span>
                  <p><b>Last Name</b><b style="color: darkred">*</b></p>
                <input type="text" name="name1" id="name1" placeholder="Last Name" required />
              </div>
            </div>
            <p><b>Work Email</b><b style="color: darkred">*</b></p>
                <input style="width: 580px" type="text" name="email" type="email" placeholder="example@projectflux.co" required />
            <div class="col_half">
              <div class="input_field"> <span></span>
                  <p><b>Phone Number</b><b style="color: darkred">*</b></p>
                <input type="text" name="phone" type="number" id="phone" placeholder="(555) 555-5555" required />
              </div>
            </div>
            <div class="col_half">
              <div class="input_field"> <span></span>
                  <p><b>Country</b><b style="color: darkred">*</b></p>
                <input type="text" name="country" id="country" placeholder="Your Country" required />
              </div>
            </div>
            <p><b>Company</b><b style="color: darkred">*</b></p>
        <input style="width: 580px" type="text" name="company" id="company" placeholder="Project Flux(Global) Pte. Ltd" required />
            <div class="col_half">
              <div class="input_field"> <span></span>
                  <div class="col_half">
              <div class="input_field"> <span></span>
                  <p><b>Department</b></p>
                <select name="department" id="department">
                <option value="">-- Please select one --</option>
                <option value="it">Dev/Engineering/IT</option>
                <option value="sales">Sales</option>
                <option value="support">Support & Success</option>
                <option value="marketing">Marketing</option>
                <option value="finance">Finance/Legal/Ops</option>
                <option value="hr">HR/People</option>
                <option value="strategy">Strategy/Biz Dev</option>
            </select>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col_half">
              <div class="input_field"> <span></span>
                  <p><b>Role</b></p>
                <select name="role" id="role">
                <option value="">-- Please select one --</option>
                <option value="cxo">CXO</option>
                <option value="vp">VP</option>
                <option value="director">Director</option>
                <option value="manager">Manager</option>
                <option value="contributor">Contributor</option>
                  </select>
              </div>
            </div>
            <p style="color: darkred">Fields marked with an asterisk(*)</p>
            <p>Already have an account? <a href="<?= base_url(); ?>auth/login"> Log in</a></p>
            
            <button id="submit-btn" type="submit" name="submit" class="button">Sign Up</button>
            </div>
   
    </form>
    </div>
    </body>



</html>