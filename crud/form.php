 <?php include("connection.php"); ?>
 <?php
    if($_POST['register'])
    {
        $fname    = $_POST['fname'];
        $phone    = $_POST['phone'];
        $pwd      = $_POST['password'];
        $emp      = $_POST['emp'];
        $address  = $_POST['address'];
        $country  = $_POST['country'];
        $city     = $_POST['city'];
        $email    = $_POST['email'];

        $sql = "SELECT * from FORM where emp = '$emp'";
        $present = mysqli_query($conn,$sql);
        $after = mysqli_num_rows($present);
        // if(empty($email)){
        //     $err = "please enter Email";
        // }
        // elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        //     $err = "Invalid Email Address..";
        // }
        if($after>0)
        {
            // echo "Employee Id already exist";
            echo "<script> alert('Employee Id already exist');</script>";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<script> alert('Invalid email address');</script>";
        }
        else{
        $query = "INSERT INTO FORM VALUES('$fname','$phone','$pwd','$emp','$address','$country','$city ','$email')";
        $data = mysqli_query($conn,$query);
        echo "<script> alert('Form submited');</script>";
        }
    }
?>
 <html>
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://smtpjs.com/v3/smtp.js"></script>
     </head>
     <body>
        <div class="container">
            <form action="#" class="form-contact" method="POST">
                <div class="title">
                    Registration form
                </div>
                <div class="form">
                    <div class="input_field">
                    <label> First Name </label>
                    <input type="text" class="input" required name="fname" id="fname">
                </div>
                <div class="input_field">
                    <label> Phone </label>
                    <input type="text" maxlength="10" class="input" required name="phone" id="phone">
                </div>
                <!-- <div class="input_field">
                    <label> Last  Name </label>
                    <input type="text" class="input">
                </div> -->
                <div class="input_field">
                    <label> Password </label>
                    <input type="password" class="input" required name="password" id="password">
                </div>
                <!-- <div class="input_field">
                    <label>Confirm Password </label>
                    <input type="password" class="input">
                </div> -->
                <div class="input_field">
                    <label> Emp code </label>
                    <input type="text" class="input" required name="emp" id="emp">
                </div>
                <div class="input_field">
                    <label> Address </label>
                    <textarea class="textarea" required name="address" id="address"></textarea>
                </div>
                <div class="input_field"> 
                    <label>Country</label>
                    <div class="custom_select">
                        <!-- <select class="selectbox">
                            <option>Select</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select> -->
                        <select required name="country" class="selectbox" id="country">
            <option value="" label="Select a country ... " selected="selected" >Select a country ... </option>
            <optgroup id="country-optgroup-Asia" label="Asia">
                <option value="AF" label="Afghanistan">Afghanistan</option>
                <option value="AM" label="Armenia">Armenia</option>
                <option value="AZ" label="Azerbaijan">Azerbaijan</option>
                <option value="BH" label="Bahrain">Bahrain</option>
                <option value="BD" label="Bangladesh">Bangladesh</option>
                <option value="BT" label="Bhutan">Bhutan</option>
                <option value="BN" label="Brunei">Brunei</option>
                <option value="KH" label="Cambodia">Cambodia</option>
                <option value="CN" label="China">China</option>
                <option value="GE" label="Georgia">Georgia</option>
                <option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
                <option value="IN" label="India">India</option>
                <option value="ID" label="Indonesia">Indonesia</option>
                <option value="IR" label="Iran">Iran</option>
                <option value="IQ" label="Iraq">Iraq</option>
                <option value="IL" label="Israel">Israel</option>
                <option value="JP" label="Japan">Japan</option>
                <option value="JO" label="Jordan">Jordan</option>
                <option value="KZ" label="Kazakhstan">Kazakhstan</option>
                <option value="KW" label="Kuwait">Kuwait</option>
                <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
                <option value="LA" label="Laos">Laos</option>
                <option value="LB" label="Lebanon">Lebanon</option>
                <option value="MO" label="Macau SAR China">Macau SAR China</option>
                <option value="MY" label="Malaysia">Malaysia</option>
                <option value="MV" label="Maldives">Maldives</option>
                <option value="MN" label="Mongolia">Mongolia</option>
                <option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
                <option value="NP" label="Nepal">Nepal</option>
                <option value="NT" label="Neutral Zone">Neutral Zone</option>
                <option value="KP" label="North Korea">North Korea</option>
                <option value="OM" label="Oman">Oman</option>
                <option value="PK" label="Pakistan">Pakistan</option>
                <option value="PS" label="Palestinian Territories">Palestinian Territories</option>
                <option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
                <option value="PH" label="Philippines">Philippines</option>
                <option value="QA" label="Qatar">Qatar</option>
                <option value="SA" label="Saudi Arabia">Saudi Arabia</option>
                <option value="SG" label="Singapore">Singapore</option>
                <option value="KR" label="South Korea">South Korea</option>
                <option value="LK" label="Sri Lanka">Sri Lanka</option>
                <option value="SY" label="Syria">Syria</option>
                <option value="TW" label="Taiwan">Taiwan</option>
                <option value="TJ" label="Tajikistan">Tajikistan</option>
                <option value="TH" label="Thailand">Thailand</option>
                <option value="TL" label="Timor-Leste">Timor-Leste</option>
                <option value="TR" label="Turkey">Turkey</option>
                <option value="TM" label="Turkmenistan">Turkmenistan</option>
                <option value="AE" label="United Arab Emirates">United Arab Emirates</option>
                <option value="UZ" label="Uzbekistan">Uzbekistan</option>
                <option value="VN" label="Vietnam">Vietnam</option>
                <option value="YE" label="Yemen">Yemen</option>
            </optgroup>
        </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>City</label>
                    <div class="custom_select">
                        <!-- <select class="selectbox">
                            <option>Select</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select> -->
                        <select id="city" class="selectbox" required name="city">
            <option value="">Select City</option>
            <option value="Achalpur">Achalpur</option>
            <option value="Ahiri">Ahiri</option>
            <option value="Ahmadnagar">Ahmadnagar</option>
            <option value="Ahmadpur">Ahmadpur</option>
            <option value="Airoli">Airoli</option>
            <option value="Ajra">Ajra</option>
            <option value="Akalkot">Akalkot</option>
            <option value="Akola">Akola</option>
            <option value="Akot">Akot</option>
            <option value="Alandi">Alandi</option>
            <option value="Alibag">Alibag</option>
            <option value="Allapalli">Allapalli</option>
            <option value="Amalner">Amalner</option>
            <option value="Amarnath">Amarnath</option>
            <option value="Ambad">Ambad</option>
            <option value="Ambajogai">Ambajogai</option>
            <option value="Amravati">Amravati</option>
            <option value="Amravati Division">Amravati Division</option>
            <option value="Anjangaon">Anjangaon</option>
            <option value="Anshing">Anshing</option>
            <option value="Arangaon">Arangaon</option>
            <option value="Artist Village">Artist Village</option>
            <option value="Arvi">Arvi</option>
            <option value="Ashta">Ashta</option>
            <option value="Ashti">Ashti</option>
            <option value="Aurangabad">Aurangabad</option>
            <option value="Ausa">Ausa</option>
            <option value="Badlapur">Badlapur</option>
            <option value="Balapur">Balapur</option>
            <option value="Ballalpur">Ballalpur</option>
            <option value="Baramati">Baramati</option>
            <option value="Barsi">Barsi</option>
            <option value="Basmat">Basmat</option>
            <option value="Beed">Beed</option>
            <option value="Bhandara">Bhandara</option>
            <option value="Bhayandar">Bhayandar</option>
            <option value="Bhigvan">Bhigvan</option>
            <option value="Bhiwandi">Bhiwandi</option>
            <option value="Bhor">Bhor</option>
            <option value="Bhudgaon">Bhudgaon</option>
            <option value="Bhum">Bhum</option>
            <option value="Bhusaval">Bhusaval</option>
            <option value="Bid">Bid</option>
            <option value="Biloli">Biloli</option>
            <option value="Boisar">Boisar</option>
            <option value="Borivli">Borivli</option>
            <option value="Buldana">Buldana</option>
            <option value="Chakan">Chakan</option>
            <option value="Chalisgaon">Chalisgaon</option>
            <option value="Chanda">Chanda</option>
            <option value="Chandor">Chandor</option>
            <option value="Chandrapur">Chandrapur</option>
            <option value="Chandur">Chandur</option>
            <option value="Chandur Bazar">Chandur Bazar</option>
            <option value="Chicholi">Chicholi</option>
            <option value="Chikhli">Chikhli</option>
            <option value="Chinchani">Chinchani</option>
            <option value="Chiplun">Chiplun</option>
            <option value="Chopda">Chopda</option>
            <option value="Dabhol">Dabhol</option>
            <option value="Dahanu">Dahanu</option>
            <option value="Darwha">Darwha</option>
            <option value="Daryapur">Daryapur</option>
            <option value="Dattapur">Dattapur</option>
            <option value="Daulatabad">Daulatabad</option>
            <option value="Daund">Daund</option>
            <option value="Dehu">Dehu</option>
            <option value="Deolali">Deolali</option>
            <option value="Deoli">Deoli</option>
            <option value="Deulgaon Raja">Deulgaon Raja</option>
            <option value="Dharangaon">Dharangaon</option>
            <option value="Dharmabad">Dharmabad</option>
            <option value="Dharur">Dharur</option>
            <option value="Dhule">Dhule</option>
            <option value="Dhulia">Dhulia</option>
            <option value="Diglur">Diglur</option>
            <option value="Digras">Digras</option>
            <option value="Dombivli">Dombivli</option>
            <option value="Dondaicha">Dondaicha</option>
            <option value="Dudhani">Dudhani</option>
            <option value="Durgapur">Durgapur</option>
            <option value="Erandol">Erandol</option>
            <option value="Faizpur">Faizpur</option>
            <option value="Gadchiroli">Gadchiroli</option>
            <option value="Gadhinglaj">Gadhinglaj</option>
            <option value="Gangakher">Gangakher</option>
            <option value="Gangapur">Gangapur</option>
            <option value="Gevrai">Gevrai</option>
            <option value="Ghatanji">Ghatanji</option>
            <option value="Ghoti Budrukh">Ghoti Budrukh</option>
            <option value="Ghugus">Ghugus</option>
            <option value="Gondiya">Gondiya</option>
            <option value="Goregaon">Goregaon</option>
            <option value="Guhagar">Guhagar</option>
            <option value="Hadgaon">Hadgaon</option>
            <option value="Harnai">Harnai</option>
            <option value="Hinganghat">Hinganghat</option>
            <option value="Hingoli">Hingoli</option>
            <option value="Hirapur Hamesha">Hirapur Hamesha</option>
            <option value="Ichalkaranji">Ichalkaranji</option>
            <option value="Igatpuri">Igatpuri</option>
            <option value="Indapur">Indapur</option>
            <option value="Jaisingpur">Jaisingpur</option>
            <option value="Jalgaon">Jalgaon</option>
            <option value="Jalgaon Jamod">Jalgaon Jamod</option>
            <option value="Jalna">Jalna</option>
            <option value="Jawhar">Jawhar</option>
            <option value="Jejuri">Jejuri</option>
            <option value="Jintur">Jintur</option>
            <option value="Junnar">Junnar</option>
            <option value="Kagal">Kagal</option>
            <option value="Kalamb">Kalamb</option>
            <option value="Kalamnuri">Kalamnuri</option>
            <option value="Kalas">Kalas</option>
            <option value="Kalmeshwar">Kalmeshwar</option>
            <option value="Kalundri">Kalundri</option>
            <option value="Kalyan">Kalyan</option>
            <option value="Kamthi">Kamthi</option>
            <option value="Kandri">Kandri</option>
            <option value="Kankauli">Kankauli</option>
            <option value="Kannad">Kannad</option>
            <option value="Karad">Karad</option>
            <option value="Karanja">Karanja</option>
            <option value="Karjat">Karjat</option>
            <option value="Karmala">Karmala</option>
            <option value="Kati">Kati</option>
            <option value="Katol">Katol</option>
            <option value="Khadki">Khadki</option>
            <option value="Khamgaon">Khamgaon</option>
            <option value="Khapa">Khapa</option>
            <option value="Kharakvasla">Kharakvasla</option>
            <option value="Khed">Khed</option>
            <option value="Khetia">Khetia</option>
            <option value="Khopoli">Khopoli</option>
            <option value="Khuldabad">Khuldabad</option>
            <option value="Kinwat">Kinwat</option>
            <option value="Kodoli">Kodoli</option>
            <option value="Kolhapur">Kolhapur</option>
            <option value="Kondalwadi">Kondalwadi</option>
            <option value="Kopargaon">Kopargaon</option>
            <option value="Koradi">Koradi</option>
            <option value="Koregaon">Koregaon</option>
            <option value="Koynanagar">Koynanagar</option>
            <option value="Kudal">Kudal</option>
            <option value="Kurandvad">Kurandvad</option>
            <option value="Kurduvadi">Kurduvadi</option>
            <option value="Lanja">Lanja</option>
            <option value="Lasalgaon">Lasalgaon</option>
            <option value="Latur">Latur</option>
            <option value="Lohogaon">Lohogaon</option>
            <option value="Lonar">Lonar</option>
            <option value="Lonavla">Lonavla</option>
            <option value="Mahabaleshwar">Mahabaleshwar</option>
            <option value="Mahad">Mahad</option>
            <option value="Maindargi">Maindargi</option>
            <option value="Majalgaon">Majalgaon</option>
            <option value="Makhjan">Makhjan</option>
            <option value="Malegaon">Malegaon</option>
            <option value="Malkapur">Malkapur</option>
            <option value="Malvan">Malvan</option>
            <option value="Manchar">Manchar</option>
            <option value="Mangrul Pir">Mangrul Pir</option>
            <option value="Manmad">Manmad</option>
            <option value="Manor">Manor</option>
            <option value="Mansar">Mansar</option>
            <option value="Manwat">Manwat</option>
            <option value="Matheran">Matheran</option>
            <option value="Mehekar">Mehekar</option>
            <option value="Mhasla">Mhasla</option>
            <option value="Mhasvad">Mhasvad</option>
            <option value="Mohpa">Mohpa</option>
            <option value="Moram">Moram</option>
            <option value="Morsi">Morsi</option>
            <option value="Mowad">Mowad</option>
            <option value="Mudkhed">Mudkhed</option>
            <option value="Mukher">Mukher</option>
            <option value="Mul">Mul</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Mumbai Suburban">Mumbai Suburban</option>
            <option value="Murbad">Murbad</option>
            <option value="Murgud">Murgud</option>
            <option value="Murtajapur">Murtajapur</option>
            <option value="Murud">Murud</option>
            <option value="Nagothana">Nagothana</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Nagpur Division">Nagpur Division</option>
            <option value="Naldurg">Naldurg</option>
            <option value="Nanded">Nanded</option>
            <option value="Nandgaon">Nandgaon</option>
            <option value="Nandura Buzurg">Nandura Buzurg</option>
            <option value="Nandurbar">Nandurbar</option>
            <option value="Nashik">Nashik</option>
            <option value="Nashik Division">Nashik Division</option>
            <option value="Navi Mumbai">Navi Mumbai</option>
            <option value="Neral">Neral</option>
            <option value="Nilanga">Nilanga</option>
            <option value="Nipani">Nipani</option>
            <option value="Osmanabad">Osmanabad</option>
            <option value="Ozar">Ozar</option>
            <option value="Pachora">Pachora</option>
            <option value="Paithan">Paithan</option>
            <option value="Palghar">Palghar</option>
            <option value="Panchgani">Panchgani</option>
            <option value="Pandharpur">Pandharpur</option>
            <option value="Panhala">Panhala</option>
            <option value="Panvel">Panvel</option>
            <option value="Parbhani">Parbhani</option>
            <option value="Parli Vaijnath">Parli Vaijnath</option>
            <option value="Parola">Parola</option>
            <option value="Partur">Partur</option>
            <option value="Patan">Patan</option>
            <option value="Pathardi">Pathardi</option>
            <option value="Pathri">Pathri</option>
            <option value="Patur">Patur</option>
            <option value="Pawni">Pawni</option>
            <option value="Pen">Pen</option>
            <option value="Phaltan">Phaltan</option>
            <option value="Pimpri">Pimpri</option>
            <option value="Pipri">Pipri</option>
            <option value="Powai">Powai</option>
            <option value="Pulgaon">Pulgaon</option>
            <option value="Pune">Pune</option>
            <option value="Pune Division">Pune Division</option>
            <option value="Purna">Purna</option>
            <option value="Pusad">Pusad</option>
            <option value="Rahimatpur">Rahimatpur</option>
            <option value="Rahuri">Rahuri</option>
            <option value="Raigarh">Raigarh</option>
            <option value="Rajapur">Rajapur</option>
            <option value="Rajgurunagar">Rajgurunagar</option>
            <option value="Rajur">Rajur</option>
            <option value="Rajura">Rajura</option>
            <option value="Ramtek">Ramtek</option>
            <option value="Ratnagiri">Ratnagiri</option>
            <option value="Raver">Raver</option>
            <option value="Revadanda">Revadanda</option>
            <option value="Risod">Risod</option>
            <option value="Roha">Roha</option>
            <option value="Sangamner">Sangamner</option>
            <option value="Sangli">Sangli</option>
            <option value="Sangola">Sangola</option>
            <option value="Saoner">Saoner</option>
            <option value="Sasvad">Sasvad</option>
            <option value="Satana">Satana</option>
            <option value="Satara">Satara</option>
            <option value="Satara Division">Satara Division</option>
            <option value="Savantvadi">Savantvadi</option>
            <option value="Savda">Savda</option>
            <option value="Selu">Selu</option>
            <option value="Shahada">Shahada</option>
            <option value="Shahapur">Shahapur</option>
            <option value="Shegaon">Shegaon</option>
            <option value="Shiraguppi">Shiraguppi</option>
            <option value="Shirdi">Shirdi</option>
            <option value="Shirgaon">Shirgaon</option>
            <option value="Shirpur">Shirpur</option>
            <option value="Shirwal">Shirwal</option>
            <option value="Shivaji Nagar">Shivaji Nagar</option>
            <option value="Shrigonda">Shrigonda</option>
            <option value="Sillod">Sillod</option>
            <option value="Sindhudurg">Sindhudurg</option>
            <option value="Sindi">Sindi</option>
            <option value="Sinnar">Sinnar</option>
            <option value="Sirur">Sirur</option>
            <option value="Solapur">Solapur</option>
            <option value="Sonegaon">Sonegaon</option>
            <option value="Soygaon">Soygaon</option>
            <option value="Srivardhan">Srivardhan</option>
            <option value="Surgana">Surgana</option>
            <option value="Talegaon Dabhade">Talegaon Dabhade</option>
            <option value="Taloda">Taloda</option>
            <option value="Tarapur">Tarapur</option>
            <option value="Tasgaon">Tasgaon</option>
            <option value="Telhara">Telhara</option>
            <option value="Thane">Thane</option>
            <option value="Trimbak">Trimbak</option>
            <option value="Tuljapur">Tuljapur</option>
            <option value="Tumsar">Tumsar</option>
            <option value="Udgir">Udgir</option>
            <option value="Ulhasnagar">Ulhasnagar</option>
            <option value="Umarga">Umarga</option>
            <option value="Umarkhed">Umarkhed</option>
            <option value="Umred">Umred</option>
            <option value="Uran">Uran</option>
            <option value="Vada">Vada</option>
            <option value="Vaijapur">Vaijapur</option>
            <option value="Varangaon">Varangaon</option>
            <option value="Vasind">Vasind</option>
            <option value="Vengurla">Vengurla</option>
            <option value="Virar">Virar</option>
            <option value="Vite">Vite</option>
            <option value="Wadgaon">Wadgaon</option>
            <option value="Wai">Wai</option>
            <option value="Wani">Wani</option>
            <option value="Wardha">Wardha</option>
            <option value="Warora">Warora</option>
            <option value="Warud">Warud</option>
            <option value="Washim">Washim</option>
            <option value="Yaval">Yaval</option>
            <option value="Yavatmal">Yavatmal</option>
            <option value="Yeola">Yeola</option>
        </select>
                    </div>
                </div>

                <!-- <div class="input_field">
                    <label> country </label>
                    <input type="text" class="input">
                </div>
                <div class="input_field">
                    <label> city   </label>
                    <input type="text" class="input">
                </div> -->
                <div class="input_field">
                    <label> E-mail</label>
                    <input type="text" class="input" id="email" name="email" required>
                </div>
                <!-- <div class="input_field">
                    <label class="check">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <p> Agree to terms and coditions</p>
                </div> -->
                <div class="input_field">
                    <input type="submit" value="Register" class="btn" name="register">
                </div>
            </div>
            </form>
        </div>
        <script>
            const fname    = document.getElementById('fname');
            const phone    = document.getElementById('phone');
            const password = document.getElementById('password');
            const emp      = document.getElementById('emp');
            const address  = document.getElementById('address');
            const country  = document.getElementById('country');
            const city     = document.getElementById('city');
            const email    = document.getElementById('email');
            const submit   = document.getElementsByClassName('form-contact')[0];

    submit.addEventListener('submit',(e)=>{
    e.preventDefault();
    let ebody = `
    <h1>First Name: </h1>${fname.value}
    <br>
    <h1>Employee Id: </h1>${emp.value}
    <br>
    <h1>email: </h1>${email.value}
    <br>
    <h1>phone: </h1>${phone.value} 
    <br>
    <h1>address: </h1>${address.value} 
    <br>
    <br>
    <h1>country: </h1>${country.value}
    <br>
    <h1>city: </h1>${city.value}
    <br>  
    `;

    Email.send({
        SecureToken : "ca3afdc0-842c-40e7-b4d7-3d469b755a23", //add your token here
        To : 'aahadqureshi78621@gmail.com', 
        From : "aahadqureshi78621@gmail.com",
        Subject : "This is the subject",
        Body : ebody
    }).then(
      message => alert(message)
    );
});

        </script>
     </body>
    </html>



    

    