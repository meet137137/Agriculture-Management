<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"location_db");
?>
<!doctype html>
<html lang="en">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap1.css" >
    <link rel="stylesheet" href="secound.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="third.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
    <title>AgriHelper</title>
 
  </head>
  <body>
  <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.html"><img src="pic/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">HOME</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="secound.html" id="navbarDropdown" role="button" style="color:rgb(45, 224, 21);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Assistance schemes for farming
                    </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="third.html">Horistical Crops</a>
                  <a class="dropdown-item" href="index.php">AgriMart</a>
                  <a class="dropdown-item" href="four.html">Animal & Fishers plan</a>
            
          </div>
        </li>
                  
                  </ul>
                </div>
              </nav>
        </section>
  
 <img src="pic/hr2.jpg" class="d-block w-100"  alt="..." height=250 style="margin-top:.05cm;">
 <br>
   
 


</div>
<div class="row ">
  <div class="col-2 " >
    <div class="list-group " id="list-tab" role="tablist">
    
      <a class="list-group-item list-group-item-action active "  style="border:2px;"id="list-profile-list" data-toggle="list" href="#list-profile"
        role="tab" aria-controls="profile">PM Kishan Yojana</a>
      <a class="list-group-item list-group-item-action  " style="border:2px;" id="list-messages-list" data-toggle="list" href="#list-messages"
        role="tab" aria-controls="messages">Assistance schemes for farming</a>
      <a class="list-group-item list-group-item-action  " style="border:2px;" id="list-settings-list" data-toggle="list" href="#list-settings"
        role="tab" aria-controls="settings">Industry Projects of the Ministry of Food Processing</a>
        <a class="list-group-item list-group-item-action  " style="border:2px;" id="list-home-list" data-toggle="list" href="#list-home"
        role="tab" aria-controls="home">Krushi Amal Sahay</a>
        <a class="list-group-item list-group-item-action  " style="border:2px;" id="list-status-list" data-toggle="list" href="#list-status"
        role="tab" aria-controls="status">Check your status</a>

    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
     
      
      
      <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
       <p style="background:#333;color:#fff;height:50px;text-align:center;padding:10px"><b>PM Kishan Yojana</b></p>
       <h5>Name of the scheme</h5><p>PM-KISAN scheme means 'PM's Kisan Sanman Nidhi'.</p>
       <h5>Main purpose:</h5><p>The Government of India has announced the Prime Minister's Kisan Samman Nidhi
        Yojana as a 5% centrally-assisted scheme to assist the farming family of farming as part of increasing
        farmers' income.</p>
        <h5>Standard of assistance:</h5><p>Assistance of Rs.5 / - per year to the farming family will be available through Direct Benefit Transfer (DBT).
        Which will be paid at a distance of four months in three equal installments. In which the first installment 
        will be from 1/3/5 to 1/3/2. Thereafter another installment will be paid every four months.</p>
        <h5>Eligibility for getting help</h5><p>Husband, wife and minor children (under 18 years) who own any cultivable land individually
        or jointly (other than institutional landowners) and none of those members are eligible for assistance
        All farm families not included in this category Eligible to receive assistance.</p>
        <h5>Details required for assistance application:</h5><p>Name of the farmer, village, taluka, Aadhar number, category, IFSC code and bank account details.</p>
        <h5>What to do to benefit a farming family?</h5>
        <ul>
            <li>Interested farmers who want to avail the scheme can apply online through the service provider (https://www.digitalgujarat.gov.in/) set up in their own village.
            <li>Apply through a service provider such as Village Computer Entrepreneur (VCE), Milk Board, Co-operative Society, any other government or co-operative body / person.
            <li>The applicant will have to print the form along with the details and print the relevant contract and submit the check / passbook copy and self-certified copy of Aadhar 
            card at the data entry center for bank account details.All details / documents have to be collected by Talati. If there is no Aadhaar card number as the first installment 
            of the first year of the scheme implementation, then Aadhaar Enrollment Number, Driving License, Election Card etc. will have to be provided. But after that, the details of 
            Aadhaar card and Aadhaar seeded bank account will be mandatory.
            <li>If a person named on the land record of the land holder farmer family is not in the village or does not live in the village, other adult members of the farmer family may 
            be able to submit a contract on their behalf. For which the person making the contract must specify his / her name and relationship with the land holder under the agreement.
            <li>Applicants will be considered eligible for assistance with approval in the Gram Sabha
        </ul>
        <h5>Standards for Land Holders:</h5>
        <ul>
            <li>For the calculation of land holdings, the land holder in the position of 1/3/5 should be taken into consideration.
            <li>In the case of transfer of inheritance from the heirs due to the death of the land holder, the benefit will not be available to any new land holder for the next five years.
            <li> Land holders registered as land holders in the period from 1/3/3 to 1/3/6 will be entitled to benefit from the registration date of holding land in the land record,
            <li>In cases where the rights of ownership of cultivable land have been transferred in the period from 1/3/1 to 3/8/9 for reasons including purchase, inheritance, testamentary, gift, from the date of transfer for the first installment of Fiscal Year 1-5 For the period up to 1/4/4, four months will be eligible for benefits.
        </ul>
      
      <h5>Help is not available to:</h5>
      <p>Under the scheme, the farmer with the high economic status mentioned below will be disqualified for family benefit.
        (A) Institutional landholders
        (B) any one or more persons belonging to the land-holding farmer family, which includes any of the following.<p>
        <ol>
            <li>Persons holding all constitutional positions, current and pastCurrent and former Minister of State / Minister of State, current and former Lok Sabha / Rajya Sabha / Legislative Assembly Chairman, Chairman of the present and former District Panchayat
            <li>Current and former Minister of State / Minister of State, current and former Lok Sabha / Rajya Sabha / Legislative Assembly Chairman, Chairman of the present and former District Panchayat
            <li>Serving and retired (all) - Regular (multi-tasking staff / class-) of all autonomous and affiliated institutions of the Central and State Government, as well as local bodies, of the Ministries / Offices / Departments of the Central and State Government and all its Regional Offices, Central and State Government. All officers, employees (except 1 / Group-D)
            <li>All ages B-2/3 are retired / retired pensioners who get Rs. Receiving a pension of Rs. 5 / - or more (excluding multi-tasking staff / class-1 / group-D)
            <li>In the last assessment year, Income Tax has paid taxpayers as well as practitioners such as doctors, engineers, lawyers, chartered accountants and architects who are registered with the professional bodies and have business as a practice.
        </ol>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
      <p style="background:#333;color:#fff;height:50px;text-align:center;padding:10px"><b>Assistance schemes for farming</b></p>
      <p>Mechanization in agriculture</p>
      <p>3% of the cost of the equipment or Rs. 1 / - whichever is less than two. Maximum one num (b) 
      of power / machine-driven equipment per account is 5% of the cost of the equipment or Rs. 1 / - 
      whichever is less than two. A maximum of one account (AGR-2) per account (a) 5% of the cost of the 
      equipment on hand operated equipment or Rs. 1 / - whichever is less than two.Maximum one num (d) per 
      account is 5% of the cost of power / machine driven equipment or Rs. 1 / - whichever is less than two.
      Maximum 1 nos (AGR-3,4) per account for 3% maximum cost for bull operated equipment and 2% for ST / SC
      (AGR-6)</p>
      <p>The beneficiary has to purchase from the authorized vendor of the manufacturer included in the panel 
      prepared for the purpose of prize discovery announced at the time of account (AGR-2,3,4,6).</p>
      <p>Ingredients of Seed Sahai</p>
      <p>Assistance in Seed Village Scheme (100% Centrally Sponsored) - According to 50% of the cost of certified 
      seed required for 20 knot area, assistance should be in the limit of Rs.1500 / - for three training of seed 
      production for 50 block of seed seed farmers.</p>
      <p>Assistance in Seed Village Scheme (state sponsored)</p>
      <p>The beneficiary selected under the Seed Village Scheme should be within the limits of the land occupied by 
      the farmer. A maximum of 8.5 hectares is provided for the recommended quantity of certified seed cost of the 
      required quantity.</p>
      <p>The components of crop protection</p>
      <p>Knapsack Sprayer</p>
      <p>50% of the cost or Rs.3000 / - whichever is less. Maximum number of accounts per account (NFSM). The 
      beneficiary has to purchase from the authorized vendor of the manufacturer included in the panel prepared
      for the purpose of prize discovery, as announced from time to time by the Napsek Sprayer account.</p>
      <p>Crop protection drugs</p>
      <p>50% of the cost or Rs.500 / - per hectare whichever is less. Maximum two hectares per one account (NFSM) 
      50% of the purchase price Rs.500 / ha. Whichever is less. For a maximum of two hectares per account (Nmoop)
      (AGR-6). The crop protection drugs GAIC, in consultation with the Director of Agriculture, have to quote 
      the price / brand and distribute it to the beneficiary farmer through their authorized seller (NFSM) 50% 
      of the purchase price Rs.500 / ha. Whichever is less. For a maximum of two hectares per account.</p>
      <p>Tools for sowing</p>
      <p>Multi Cope Planter Sown</p>
      <p>50% of the cost or Rs.15000 / - whichever is less. At most one nugget per account (NFSM pulses, wheat and rice). 
      The beneficiary farmers have to purchase from the authorized vendor of the manufacturer included in the 
      panel prepared for the purpose of prize discovery, as announced by the MultiCop Planter planting department.
       (NFSM pulses, wheat and rice)</p>
       <p>Zero Teal Multi Cope Planter Planted</p>
       <p>A) NFSM-pulses: - 50% of the cost or Rs.15000 / - whichever is less. Maximum one number per account 
       b)NFSM-wheat: 50% of the cost or Rs.15000 / - whichever is less. Maximum one number per account: NFSM-Rice: - 50% 
         of the cost or Rs.15000 / - whichever is less. Maximum of one account per account</p>
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
       <p style="background:#333;color:#fff;height:50px;text-align:center;padding:10px"><b>Industry Projects of the Ministry of Food Processing</b></p>
       <p>The Ministry of Food Processing, New Delhi has a number of schemes for capital investment and other 
       subsidies in the food processing sector. There is a lot of incentive offered and it helps a lot in making the new project self-reliant.</p>
       <p>Gujarat Agricultural Industry Corporation Ltd. To implement the schemes of the Ministry of Food
        Processing New Delhi, Gujarat entrepreneurs will have to send their application to a central agency. 
        As per the guidelines, all necessary documents have been obtained, Gujarat Agricultural Industries
         Corporation Ltd. After processing it, he will send / recommend the application and the Ministry of
          Food Processing for evaluation and consideration.</p>
      <p>The added benefit of this is that the schemes of the Ministry of Food Processing as well as the agricultural
      industrial policy of the Government of Gujarat can be encouraged. For details of the scheme click outside 
      the <a href="http://www.mofpi.nic.in" target="blank">http://www.mofpi.nic.in</a> website opens in a new window.</p>
      </div>
      
      <div class="tab-pane fade" id="list-status" role="tabpanel" aria-labelledby="list-status-list">
       <p style="background:#333;color:#fff;height:50px;text-align:center;padding:10px"><b>Check your status</b></p>
     <form action="" method="POST">

     <div class="row">
      <div class="col-sm-12 col-sm">

        <div class="form-group form-con">
        <div>
        <label for="input1" class="control-label required">State <span style="color:red">*</span></label><BR>
        <select id="statedd" onChange="change_state()">
          <option>Select</option>
          <?php
          $res=mysqli_query($link,"select * from countries");
          while($row=mysqli_fetch_array($res)){
          ?>
              <option value="<?php echo $row{"id"}; ?>"><?php echo $row{"name"}; ?></option>
          <?php
          }
          ?>
          
         
      </select>
</div>
  <div>
    <label for="input1" class="control-label required">District <span style="color:red">*</span></label>
    <div id="district" >
                    <select>
                        <option>Select</option>
                    </select>
                </div>
</div>
    <div >
       <label for="input1" class="control-label required">Sub District <span style="color:red">*</span></label>
       <div id="sub-district">
                    <select>
                        <option>Select</option>
                    </select>
                </div>
  </div>
    <div>
      <label for="input1" class="control-label required">Block <span style="color:red">*</span></label>
      <div id="block1">
                    <select>
                        <option>Select</option>
                    </select>
                </div>
</div>
    <div>
      <label for="input1" class="control-label required">Village <span style="color:red">*</span></label>
      <div id="village">
                    <select>
                        <option>Select</option>
                    </select>
                </div>
</div>
<br>

<div>
<form name="form1" acotion="" method="post">
<h5>Enter your village number</h5>
        <input type="text" name="village_id" ></input>
        <br><br>
        
        <input type="submit" name="search" class="btn-primary" style="font-weight:bold;border:0;border-radius:20px;width:90px;height:45px">
</form>

<table border="1">
            <tr>
                <td>SR NO.</td>
                <td>Name</td>
            </tr>
            <?php
           
            if(isset($_POST['search']))
            {
               
                $village_id =isset($_POST['village_id'])? $_POST['village_id'] : '';
              
                $query_run = mysqli_query($link,"select *from report where village_id=$village_id") ;
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                        </tr>


                    <?php
                }
            }
        ?>
</table>
</div>

</div>
</div>
</div>
</form>
      
      </div>
    </div>
  </div>
</div>

<section id="footer">
            <div class="container text-center">
                <p>Heart <i class="fa fa-heart-o"></i> of Perfect Farming</p>
            </div>
        </section>


</body>
<script type="text/javascript">
function change_state(){
    var xmlhttp= new XMLHttpRequest();
    xmlhttp.open("GET","getdata.php?state="+document.getElementById("statedd").value,false);
    xmlhttp.send(null);
   
    document.getElementById("district").innerHTML=xmlhttp.responseText;

  
}

function change_district(){
    var xmlhttp= new XMLHttpRequest();
    xmlhttp.open("GET","getdata.php?district1="+document.getElementById("districtdd").value,false);
    xmlhttp.send(null);
   
    document.getElementById("sub-district").innerHTML=xmlhttp.responseText;
   
}
function change_subdistrict(){
    var xmlhttp= new XMLHttpRequest();
    xmlhttp.open("GET","getdata.php?subdistrict1="+document.getElementById("subdistrictdd").value,false);
    xmlhttp.send(null);
  
    document.getElementById("block1").innerHTML=xmlhttp.responseText;
   
}

function change_block(){
    var xmlhttp= new XMLHttpRequest();
    xmlhttp.open("GET","getdata.php?block1="+document.getElementById("blockdd").value,false);
    xmlhttp.send(null);
   
    document.getElementById("village").innerHTML=xmlhttp.responseText;
   
}

function change_village(){
    var xmlhttp= new XMLHttpRequest();
    xmlhttp.open("GET","getdata.php?village1="+document.getElementById("villagedd").value,false);
    xmlhttp.send(null);
   
    document.getElementById("report").innerHTML=xmlhttp.responseText;
   
}
</script>
</html>