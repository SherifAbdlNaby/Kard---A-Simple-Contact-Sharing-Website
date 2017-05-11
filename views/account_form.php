
<div class="coverphoto" style="background-image: url('<?= $cover ?>');"></div>
<div class="col-sm-12" style="">    
      <div id="profile-pic1">
          <img src="<?= $img ?>"></img>
      </div>
</div>
    
<div class="col-sm-12" style="<?= $style?>">    
<h1   > <?= $_SESSION["name"] ?> </h1>
<h5  > @<?= $_SESSION["username"]?></h5>
</div>



<div class="col-sm-12">  
    <a href="/photo.php"> <button type="button" class="btn btn-default"><?php if($img == "img/default.png")print("Add Profile-Picture"); else print("Change Profile-Picture");?></button></a>
    <a href="/cover.php"><button type="button" class="btn btn-default"><?php if($cover)print("Change Cover-Photo"); else print("Add Cover-Photo");?></button></a>
<?php if($cover){ print("</br></br></br></br></br></br>");} ?>
</div>
<div class="infofield2">
    <div class="infofield3">

<div class="col-sm-12">
<h1>Edit your Basic Information</h1>
           <div style="margin-left: 15%;">
   <form action="basicinfo.php" method="post">
        <fieldset>   
            <div class="col-sm-6" style="text-align: -webkit-auto; ">                <div>Name:</div>
                <input autocomplete="on" class="form-control" value="<?=$data["name"]?>" name="name" placeholder="Full Name" type="text"/>
            </div>
            
            <div class="col-sm-6" style="text-align: -webkit-auto; ">                <div>Email:</div>
                <input style=" width: 21%; min-width:200px;" autocomplete="on"   class="form-control" value="<?=$data["email"]?>" name="email" placeholder="Email" type="text"/>
            </div>
            

            <div class="col-sm-6" style="text-align: -webkit-auto; ">
                <div>Gender</div>
            <select class="form-control"  name="gender" >
                 <?php if($data["gender"] !="" && $data["gender"]!=NULL ):?>
                 <option selected value="<?=$data["gender"]?>"><?=ucfirst($data["gender"])?></option>
                 <?php else:?>
                 <option selected disabled>Gender</option>
                 <?php endif?> 
             <option value="male">Male</option>
             <option value="female">Female</option>
             <option value="other">Other</option>
            </select></div> <div class="col-sm-6" style="text-align: -webkit-auto; ">
            <div>Relationship</div>
            <select class="form-control" value="0" name="relationship" >
                 <?php if($data["relationship"] !="" && $data["relationship"]!=NULL ):?>
                 <option selected value="<?=$data["relationship"]?>"><?=ucfirst($data["relationship"])?></option>
                 <?php else:?>
                 <option selected disabled>Relationship</option>
                 <?php endif?> 
             <option value="single">Single</option>
             <option value="relationship">In Relationship</option>
             <option value="married">Married</option>
             <option value="engaged">Engaged</option>
            </select>
            </div>
            
             <div class="col-sm-6" style="text-align: -webkit-auto; ">
                <div>Mobile:</div>
            <input autocomplete="off"   class="form-control" value="<?=$data["mobile"]?>" name="mobile" placeholder="Mobile" type="text"/>
             </div>
             <div class="col-sm-6" style="text-align: -webkit-auto; ">
                <div>Telephone:</div>
            <input autocomplete="off"   class="form-control" value="<?=$data["telephone"]?>" name="telephone" placeholder="Landline" type="text"/>
            </div>
            
             <div class="col-sm-6" style="text-align: -webkit-auto; ">
                <div>Work:</div>
            <input  autocomplete="off"   class="form-control" value="<?=$data["work"]?>" name="work" placeholder="Work" type="text"/>
                </div> <div class="col-sm-6" style="text-align: -webkit-auto; ">
                <div>Education:</div>
            <input  autocomplete="off"   class="form-control" value="<?=$data["education"]?>" name="education" placeholder="Education" type="text"/>
            </div>
            
             <div class="col-sm-6" style="text-align: -webkit-auto; ">
                <div>Country:</div>
            <select style="width: 195px;" class="form-control" name="country">
                 <?php if($data["country"] !="" && $data["country"] != NULL ):?>
                 <option selected value="<?=$data["country"]?>"><?=ucfirst($data["country"])?></option>
                 <?php else:?>
                 <option selected disabled>Country</option>
                 <?php endif?> 
                <option value="Afganistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire">Bonaire</option>
                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Canary Islands">Canary Islands</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Channel Islands">Channel Islands</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Island">Cocos Island</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote DIvoire">Cote D'Ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curaco">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Ter">French Southern Ter</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Great Britain">Great Britain</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea North">Korea North</option>
                <option value="Korea Sout">Korea South</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Malawi">Malawi</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Midway Islands">Midway Islands</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nambia">Nambia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherland Antilles">Netherland Antilles</option>
                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                <option value="Nevis">Nevis</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau Island">Palau Island</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Phillipines">Philippines</option>
                <option value="Pitcairn Island">Pitcairn Island</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Republic of Montenegro">Republic of Montenegro</option>
                <option value="Republic of Serbia">Republic of Serbia</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="St Barthelemy">St Barthelemy</option>
                <option value="St Eustatius">St Eustatius</option>
                <option value="St Helena">St Helena</option>
                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                <option value="St Lucia">St Lucia</option>
                <option value="St Maarten">St Maarten</option>
                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                <option value="Saipan">Saipan</option>
                <option value="Samoa">Samoa</option>
                <option value="Samoa American">Samoa American</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Tahiti">Tahiti</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Erimates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States of America">United States of America</option>
                <option value="Uraguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City State">Vatican City State</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                <option value="Wake Island">Wake Island</option>
                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                <option value="Yemen">Yemen</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
                </select></div>
                 <div class="col-sm-6" style="text-align: -webkit-auto; ">
                <div>City:</div>
            <input autocomplete="off"   class="form-control" value="<?=$data["city"]?>" name="city" placeholder="City" type="text"/>
        </div>
        
         <div class="col-sm-12" style="text-align: -webkit-auto; ">
           <div> Address:</div>
            <input style="width: 30.50%; min-width: 200px;" autocomplete="off" value="<?=$data["address"]?>"   class="form-control" name="address" placeholder="Address" type="text"/>
        </div>     

        
        </br>
        <div class="col-sm-12" style="text-align: -webkit-auto; ">
                 <div> Birthday:</div>
                <select class="form-control" value="01" name="day" onchange="">
                <?php if($data["day"]>0 || $data["day"] ==""):?>
             <option selected value="<?=$data["day"]?>"><?=$data["day"]?></option>
             <?php else:?>
             <option selected disabled>Day</option>
             <?php endif?>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            <select class="form-control" name="month"  onchange="" >
                <?php 
                $monthName = date("F", mktime(0, 0, 0, $data["month"], 10));
                ?>
                 <?php if($data["month"]>0):?>
                 <option selected value="<?=$data["month"]?>"><?=$monthName?></option>
                 <?php else:?>
                 <option selected disabled>Month</option>
                 <?php endif?>               
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>      
            <?php if(!$data["year"]) $data["year"]=date("Y"); ?>
            <select class="form-control" name="year"  onchange="" >
            <option selected value="<?=$data["year"]?>"><?=$data["year"]?></option>
            <?php 
            echo '<option value='.date("Y").'>'.date("Y").'</option>';
            for ($i = date("Y")-1; $i >= date("Y")-110; $i--) {
                 echo '<option value="'.$i.'">'.$i.'</option>';
            }?>
            </select>    
                    </div>
            <div class="col-sm-12"  >
                </br>
            <button style="margin-left: -18%;" class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-edit"></span>
                 Save
            </button>
            </div>
        </fieldset>
        </br>
    </form>



</div>    

<div style="margin-bottom: 20px;" class="col-sm-12"><a href="/networksedit.php" class="btn btn-success" style="min-width: 220px; " role="button"> <span aria-hidden="true" style="margin-right: 5px;" class="glyphicon glyphicon-edit"> </span>Edit Social-Networks</a>
</div>

<div class="col-sm-12"><a href="/password.php" class="btn btn-success" style="min-width: 220px; " role="button"><span aria-hidden="true" class="glyphicon glyphicon-lock"></span>
Change Password</a></div>
<div class="col-sm-12">
    </br>
    <form action="birth.php" method="post">
    <button style="min-width: 220px; " class="btn btn-<?php if($data["hideBirth"]) print("success"); else print("danger");?>" type="submit">
        <span aria-hidden="true" class="glyphicon glyphicon-calendar"></span>
        <?php if($data["hideBirth"]) print("Show My Birthday"); else print("Hide My Birthday");?>
    </button>
    </form>
    </br></div>



<div class="col-sm-12">
    <form action="list.php" method="post">
    <button style="min-width: 220px; " class="btn btn-<?php if($data["indexed"]) print("danger"); else print("success");?>" type="submit">
        <span aria-hidden="true" class="glyphicon glyphicon-th-list"></span>
                 <?php if($data["indexed"]) print("Unlist from Search Results"); else print("List in Search Results");?>
    </button>
    </form>
    </br>
</div>



</div>
</div>

