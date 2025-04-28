<?php include('header.php'); ?>

<div id="Registration-panel">
		<img src="assets/images/signin-bg.jpg" alt="img">
    <div id="overlay-panel"></div>

	<div id="open-acccount-content">
		<p>Online Account Opening</p>
		<p>Registration Form</p>
	</div>

<div class="container mt-5" id="my-reg-container">

  <!-- Step Header -->
  <div class="step-header mb-4">
    <div class="step active" id="step1">Basic info</div>
    <div class="step" id="step2">Address Details</div>
    <div class="step" id="step3">Other Details</div>
    <div class="step" id="step4">Privacy Policy</div>
  </div>

  <form id="regForm">
  	<!-- ------------------------ -->
    <!-- Tab 1 -->
    <div class="tab active">

    <div class="row my-col-margin">

       <div id="have-an-account-sec"> 
  <p>Already have an account with any other Broker? <span class="red-req">*</span></p>
  
  <!-- Yes Option -->
  <div class="form-check">
    <input type="radio" value="yes" id="flexCheckYes" name="brokerAccount" required>
    <label for="flexCheckYes">Yes</label>
  </div>
  
  <!-- No Option -->
  <div class="form-check">
    <input type="radio" value="no" id="flexCheckNo" name="brokerAccount" checked required>
    <label for="flexCheckNo">No</label>
  </div>
</div>

    <!-- Left Side -->
    <div class="col-md-6">

    	<div class="row">

    	<div class="mb-3 col-3">
            <label for="fullName">Title</label>
            <select class="form-select" >
              <option selected>Mr</option>
              <option>Mrs</option>
              <option>Ms</option>
            </select>
        </div>

        <div class="mb-3 col-9">
            <label for="fullName">Full Name (as per CNIC):<span class="red-req">*</span></label>
            <input type="text" class="form-control" id="fullName" name="name" placeholder="Enter your full name" required>
        </div>
        </div>

		<div class="mb-3">
            <label for="fatherName">Father's / Husband's Name:<span class="red-req">*</span></label>
            <input type="text" class="form-control" id="fatherName" placeholder="Enter name" required>
        </div>

	    <div class="row">
			<div class="mb-3 col-md-6">
	            <label for="nationality">Nationality:</label>
	            <input type="text" class="form-control" id="nationality" placeholder="Your nationality" required>
	        </div>

	        <div class="mb-3 col-md-6">
	            <label for="nationality">Place of Birth:<span class="red-req">*</span></label>
	            <input type="text" class="form-control" id="nationality" placeholder="" required>
	        </div>
	    </div>

		<div class="mb-3">
            <label for="residentialStatus">Residential Status:</label>
            <select class="form-select" id="residentialStatus" required>
              <option selected disabled>Choose...</option>
              <option>Resident</option>
              <option>Non-Resident</option>
            </select>
        </div>

	    <div class="mb-3">
            <label for="cnicNo">CNIC / SNIC / NICOP / POC No:<span class="red-req">*</span></label>
            <input type="text" class="form-control" id="cnicNo" placeholder="Enter CNIC number" required>
        </div>

        <div class="mb-3 mt-3">
            <label>Upload CNIC Front Side:<span class="red-req">*</span></label>
            <input type="file" class="form-control" required>
        </div>

    	</div>
    	<!-- -------------- -->

    	<!-- Right side -->
    	<div class="col-md-6">

    	<div class="mb-3">
            <label for="accountType">Account Type:<span class="red-req">*</span></label>
            <select class="form-select" id="accountType" required>
              <option selected disabled>Choose...</option>
              <option>Individual</option>
              <option>Joint</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="motherName">Mother's Name:<span class="red-req">*</span></label>
            <input type="text" class="form-control" id="motherName" placeholder="Enter mother's name" required>
        </div>

        <div class="mb-3">
            <label for="maritalStatus">Marital Status:<span class="red-req">*</span></label>
            <select class="form-select" id="maritalStatus" required>
              <option selected>Single</option>
              <option>Married</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="gender">Gender:<span class="red-req">*</span></label>
            <select class="form-select" id="gender" required>
              <option selected>Male</option>
              <option>Female</option>
            </select>
        </div>

        <div class="row">

            <div class="col">
              <label for="issueDate">Issue Date:<span class="red-req">*</span></label>
              <input type="date" class="form-control" id="issueDate" required>
            </div>

            <div class="col">
              <label for="expiryDate">Expiry Date:<span class="red-req">*</span></label>
              <input type="date" class="form-control" id="expiryDate" required>
            </div>

        </div>

        <div class="mb-3 mt-3">
            <label>Upload CNIC Back Side:<span class="red-req">*</span></label>
            <input type="file" class="form-control" required>
        </div>

    	</div>

    	</div>

    </div>
<!-- ---------Tab 1 End---------- -->
<!-- ------------------------------------- -->


<!-- ------------------------------------------ -->
    <!-- Tab 2 -->
    <div class="tab">

      <div class="row">

      	<div class="col-md-6">

		    <div class="mb-3">
	          <label>Mailing Address:<span class="red-req">*</span></label>
	          <input type="text" class="form-control" placeholder="Enter address" name="email" required>
	        </div>

		    <div class="mb-3">
	          <label>Province:<span class="red-req">*</span></label>
	          <input type="text" class="form-control" placeholder="Enter province" required>
	        </div>

		    <div class="mb-3">
	          <label>Mobile No:<span class="red-req">*</span></label>
	          <input type="tel" class="form-control" placeholder="Enter mobile no" required>
	        </div>

		    <div class="mb-3">
	          <label>Relation with Mobile Number:</label>
	          <input type="text" class="form-control" placeholder="Enter relation">
	        </div>

		    <div class="mb-3">
	          <label>Relative Name:</label>
	          <input type="text" class="form-control" placeholder="Enter relative name">
	        </div>

		    <div class="mb-3">
	          <label>Relative CNIC:</label>
	          <input type="text" class="form-control" placeholder="Enter CNIC">
	        </div>

      	</div>

      	<div class="col-md-6">

	    <div class="mb-3">
          <label>City/ Town/ Village:<span class="red-req">*</span></label>
          <input type="text" class="form-control" placeholder="Enter city" required>
        </div>

        <div class="mb-3">
          <label>Country:<span class="red-req">*</span></label>
          <input type="text" class="form-control" placeholder="Enter country" required>
        </div>

        <div class="mb-3">
          <label>Email:<span class="red-req">*</span></label>
          <input type="email" class="form-control" placeholder="Enter email" required>
        </div>

        <div class="mb-3">
          <label>Proof of Mailing/ Permanent Address:<span class="red-req">*</span></label>
          <input type="file" class="form-control" required>
        </div>

        <div class="mb-3 d-flex justify-content-between">
          <button type="reset" class="btn btn-outline-light">Clear</button>
          <button type="submit" class="btn btn-light">Save</button>
        </div>

      	</div>

      </div>

    </div>
    <!-- address details -->
<!-- -------------------------------------------- -->

    <!-- Tab 3 -->
    <div class="tab">
            <div class="row">


    <!-- left side -->
    <div class="col-md-6">

        <div class="mb-3">
            <label for="gender">Gross Annual Income:<span class="red-req">*</span></label>
            <select class="form-select" id="income" required>
              <option selected>Below Rs 100,000</option>
              <option>100,001 - 250,000</option>
              <option>250,000 - 500,000</option>
              <option>500,001 - 1,000,000</option>
              <option>1,000,001 - 2,500,000</option>
              <option>Above 2,50,0001</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="gender">Occupation:<span class="red-req">*</span></label>
            <select class="form-select" id="occupation" required>
              <option selected>Agriculturist</option>
              <option>Retired Person</option>
              <option>Professional</option>
              <option>Business</option>
              <option>Student</option>
              <option>Service</option>
              <option>Housewife</option>
              <option>Business Executive</option>
              <option>Govt./Public Sector</option>
              <option>Household</option>
              <option>Industrialist</option>
              <option>Other (Specify)</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="gender">Department:<span class="red-req">*</span></label>
            <select class="form-select" id="department" required>
              <option selected>Marketing</option>
              <option>IT</option>
            </select>
        </div>

        <div class="mb-3">
          <label>Employer's Address:<span class="red-req">*</span></label>
          <input type="text" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>IBAN Number:<span class="red-req">*</span></label>
          <input type="text" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Bank/E-Wallet No:<span class="red-req">*</span></label>
          <input type="text" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Proof of Income with Employer's Address:<span class="red-req">*</span></label>
          <input type="file" class="form-control" required>
        </div>

      </div>
      <!-- ------- -->

      <!-- Right side -->
      <div class="col-md-6">

        <div class="mb-3">
          <label>Source of Income:<span class="red-req">*</span></label>
          <input type="text" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Designation:<span class="red-req">*</span></label>
          <input type="text" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Employer's Name:<span class="red-req">*</span></label>
          <input type="text" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Bank Name:<span class="red-req">*</span></label>
          <input type="text" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Bank /E-wallet Name:<span class="red-req">*</span></label>
          <input type="text" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Proof of IBAN:<span class="red-req">*</span></label>
          <input type="file" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Proof of Specimen Signature:<span class="red-req">*</span></label>
          <input type="file" class="form-control" required>
        </div>

      </div>

        </div>
</div>

    <!-- -------------------------- -->
    <!-- Tab 4 -->
    <div class="tab">

<div class="accordion" id="accordionExample">

  <!-- ---------------------- -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Terms & Conditions and Risk Disclosure
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body" id="term-and-cond-accordion">
        <p> These Terms and Conditions shall constitute a Contract between the Parties hereto. This Contract shall govern opening, maintenance and operations of Trading Account, CDC Sub-Account(s) and sharing of UIN and KYC information to/from NCCPL and ancillary matters connected therewith.</p>
<strong>GENERAL - General Terms and Conditions</strong>
<ol>
  <li>
All Trades, Transactions, including non-Exchange Transactions, Derivative Contracts and deals (jointly referred to as "Transactions") between the Parties and Clearing and Settlement thereof and opening, maintenance and operations of Sub-Account in the CDS shall be subject to the Securities Act, 2015, Central Depositories Act, 1997, Pakistan Stock Exchange Limited (PSX) Regulations, Central Depository Company of Pakistan Limited (CDC) Regulations, CKO Regulations, 2017, National Clearing Company of Pakistan Limited (NCCPL) Regulations and the Securities Brokers (Licensing and Operations) Regulation, 2016 including Procedures, Manuals, Polices, Guidelines, Circulars, Directives, and Notifications issued and as amended) thereunder by the Securities and Exchange Commission of Pakistan (SECP), PSX, CDC or NCCPL from time to time.</li>
<li>The information provided in KYC application form and/or CRF shall be in addition to and not in derogation of the requirements prescribed under Anti-Money Laundering and Countering Financing of Terrorism Regulations, 2018.</li>
<li>The Securities Broker/Participant shall ensure provision of copies of all the relevant laws, rules and regulations at its office for access to the Sub-Account Holder(s)/Customer(s) during working hours. The Securities Broker/Participant shall ensure that its website contains hyperlinks to the websites/pages on the website of PSX, CDC, NCCPL and the SECP displaying above said regulatory framework for reference of the Customers.</li>
<li>In case of a Joint Account, all obligations and liabilities of the Applicants under these Terms and Conditions shall be joint and several.</li>
<li>These Terms and Conditions shall be binding on the nominee, legal representative, successors in interest and/or permitted assigns of the respective Parties hereto.</li>
<li>The Securities Broker/Participant shall provide a list of its Registered Offices and Representatives authorized and employees designated to deal with the Sub-Account Holder(s)/Customer(s) along with their authorized mobile/landline/fax number(s), email and registered addresses. Any change(s) therein shall be intimated in writing to the Sub-Account Holder(s)/Customer(s) with immediate effect.</li>
</ol>
      </div>
    </div>
  </div>
  <!-- --------------------- -->

  <!-- ----------------------------- -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Do's & Don'ts
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body" id="do-and-dont-accordion">
       <table class="table">
         <thead>
           <th>Do's</th>
           <th>Don'ts</th>
         </thead>
         <tbody>
           <tr>
             <td>
<p>1. Always enter/maintain true and correct registration details of clients on Exchange Trading System, and do not Change any detail without prior approval of the client.<br>
 1۔ ایکسچینج کے ٹر یننگ سسٹم میں ہمیشہ کلائنٹ کی ر جسٹر یشن کی درست اورسچی تفصیلات کو اندر اج بر قر ار ر کھیں اور کلائنٹ کی پیشگی منظور ی کے بغیر کوئی تبدیلی نہ کر یں.</p>

<p>2. Issue confirmations for trades executed on behalf of clients within 24 hours and obtain acknowledgment there of.<br>
2۔ 24 گھنٹوں کے اندر کلائنٹس کی جانب سے انجام پانے والی تجارت کے لیے تصدیقات جاری کریں اور اس کا اعتراف حاصل کریں۔</p>

<p>3. Ensure that all requisite signed documents have been received from clients including Account Opening Form and Risk Disclosure Document.<br>
3۔ اس بات کو یقینی بنائیں کہ تمام مطلوبہ دستخط شدہ دستاویزات کلائنٹس سے موصول ہوچکے ہیں بشمول اکاؤنٹ کھولنے کا فارم اور رسک ڈسکلوژر دستاویز۔</p>

<p>4.Ensure that Know Your Customer (KYC) and Customer Due Diligence (CDD) processes are conducted effectively and in full compliance with applicable anti-money laundering (AML) regulations, guidelines, and laws.<br>
 4۔یقینی بنائیں کہ "اپنے صارف کو جانیں" (KYC) اور "صارف کی واجب جانچ" (CDD) کے عمل مؤثر طریقے سے اور منی لانڈرنگ کے خلاف قوانین، رہنما اصولوں، اور ضوابط کے مطابق مکمل طور پر انجام دیے جا رہے ہیں۔</p>

<p>5. Ensure that the information contained in the Account Opening Form is updated, complete and correct at all time.<br>
5۔اس بات کو یقینی بنائیں کہ اکائونٹ اوپنگ فارم میں دی گئ معلومات ہمیشہ تازہ ترین مکمل اور درست ہوں۔</p>
</td>

<td>
<p>1. Do not maintain anonymous accounts or accounts that are opened or maintained in the name of fictitious persons.<br>
 1۔ بے نامی اکاؤنٹس یا جعلی اشخاص کے نام پر کھولے گے اکاؤنٹس کو برقرار نہ رکھیں۔</p>

<p>2. Do not alter or change terms and conditions of Standardized Account Opening Form (SAOF). Any additional terms and Conditions shall not contradict with the terms and conditions of SAOF.<br>
 2- اسٹینڈرڈائزڈ اکاؤنٹ اوپننگ فارم ایس ای او ایف کی شرائط و ضوابط میں کوئی ردو بدل یا تبدیلی نہ کریں کوئ بھی اضافی شرائط و ضوابط ایس اے او ایف کی شرائط و ضوابط سے متصادم نہ ہوں۔</p>

<p>3. Do not obtain any blank document or blank cheque from client.<br>
3۔کلائنٹ سے کوئی خالی دستاویز یا خالی چیک حاصل نہ کریں۔</p>

<p>4. Do not enter any wrong, contradictory or incomplete information on Exchange Trading System.<br>
 4۔ایکسچینج ٹریڈنگ سسٹم پر کوئی غلط، متضاد یا نامکمل    معلومات درج نہ کریں۔</p>

<p>5. Do not attract clients by alluring advertisements, rumors, hot tips or the promise of assured returns/fixed profit.<br>
5۔دلکش اشتہارات، افواہوں، گرم تجاویز یا یقینی واپسی/مقررہ منافع کے وعدے کے ذریعے گاہکوں کو متوجہ نہ کریں۔</p>

</td>

           </tr>
           <tr>
           </tr>
         </tbody>
       </table>
      </div>
    </div>
  </div>
  <!-- ------------------------ -->

  <!-- ------------------------- -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Commision Structure
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table">
          <thead>
            <th>Contracts</th>
            <th>Trading Unit Trading Unit (Lot Size)</th>
            <th>Tick Size</th>
            <th>Tick Value</th>
            <th>Price Quote</th>
            <th>Commission(USD)</th>
          </thead>
          <tbody>
            <tr>
              <td>Gold 100 Ounce</td>
              <td>100 Ounce</td>
              <td>0.10 $</td>
              <td>10 $</td>
              <td>1/$ Ounce</td>
              <td>50</td>
            </tr>
            <tr>
              <td>Gold 10 Ounce</td>
              <td>10 Ounce</td>
              <td>0.10 $</td>
              <td>1 $</td>
              <td>1/$ Ounce</td>
              <td>5</td>
            </tr>
            <tr>
              <td>Gold 1 Ounce</td>
              <td>1 Ounce</td>
              <td>0.10 $</td>
              <td>0.01 $</td>
              <td>1/$ Ounce</td>
              <td>1</td>
            </tr>
            <tr>
              <td>Gold ID 100 Ounce</td>
              <td>100 Ounce</td>
              <td>0.10 $</td>
              <td>10 $</td>
              <td>1/$ Ounce</td>
              <td>50</td>
            </tr>
            <tr>
              <td>Gold ID10 Ounce</td>
              <td>10 Ounce</td>
              <td>0.10 $</td>
              <td>1 $</td>
              <td>1/$ Ounce</td>
              <td>5</td>
            </tr>
            <tr>
              <td>Gold ID1 Ounce</td>
              <td>1 Ounce</td>
              <td>0.10 $</td>
              <td>0.10 $</td>
              <td>1/$ Ounce</td>
              <td>1</td>
            </tr>
            <tr>
              <td>Silver 5000 Ounce</td>
              <td>5000 Ounce</td>
              <td>0.001 $</td>
              <td>5 $</td>
              <td>1/$ Ounce</td>
              <td>120</td>
            </tr>
            <tr>
              <td>Silver 500 Ounce</td>
              <td>500 Ounce</td>
              <td>0.001 $</td>
              <td>0.50 $</td>
              <td>1/$ Ounce</td>
              <td>12</td>
            </tr>
            <tr>
              <td>Silver 100 Ounce</td>
              <td>100 Ounce</td>
              <td>0.001 $</td>
              <td>0.10 $</td>
              <td>1/$ Ounce</td>
              <td>2.4</td>
            </tr>
            <tr>
              <td>Silver 10 Ounce</td>
              <td>10 Ounce</td>
              <td>0.001 $</td>
              <td>0.01 $</td>
              <td>1/$ Ounce</td>
              <td>0.24</td>
            </tr>
            <tr>
              <td>Silver ID 5000 Ounce</td>
              <td>5000 Ounce</td>
              <td>0.001 $</td>
              <td>5 $</td>
              <td>1/$ Ounce</td>
              <td>120</td>
            </tr>
            <tr>
              <td>Silver ID 500 Ounce</td>
              <td>500 Ounce</td>
              <td>0.001 $</td>
              <td>0.50 $</td>
              <td>1/$ Ounce</td>
              <td>12</td>
            </tr>
            <tr>
              <td>Silver ID100 Ounce</td>
              <td>100 Ounce</td>
              <td>0.001 $</td>
              <td>0.10 $</td>
              <td>1/$ Ounce</td>
              <td>2.4</td>
            </tr>  
            <tr>
              <td>Silver ID10 Ounce</td>
              <td>10 Ounce</td>
              <td>0.001 $</td>
              <td>0.01 $</td>
              <td>1/$ Ounce</td>
              <td>0.24</td>
            </tr>
            <tr>
              <td>Copper 25000 Pounds</td>
              <td>25000 lbs</td>
              <td>0.001 $</td>
              <td>2.5 $</td>
              <td>1/$ Lbs</td>
              <td>65</td>
            </tr>
            <tr>
              <td>Copper 1000 Pounds</td>
              <td>1000 lbs</td>
              <td>0.001 $</td>
              <td>0.01 $</td>
              <td>1/$ Lbs</td>
              <td>2.5</td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- ------------------------------ -->

  <!-- --------------------------- -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Understanding of Procedures
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<ol>
<li>How to Manage Risk?</li>
<ul>
  <li>Effect of "High Leverage" or "High Gearing" is great profit or loss in comparison with the principal investment amount. Low degree of risk when Low gear trading.</li>
  <li>Volume of Margin Trading.</li> 
  <li>Place Stop Loss on every order.</li>
  <li>Risk Management tools never cover 100% of Risk.</li>
</ul>
<li>How to use Client Portal? </li>
<ul>
  <li>Creating your own Password.</li>
  <li>Placing Order.</li>
  <li>Viewing Report.</li>
</ul>
<li>How to get Trade Confirmations? </li>
<ul>
  <li>Reporting to client through email within 24 hours.</li>
  <li>Other Communication mode. </li>
</ul>
<li>How Discrepancies are Reported?</li>
<ul>
  <li>Any Discrepancy will be liaison through email to compliance department within 24 hours at <a id="mail-privacy" href="mailto:compliance@enrichers.com.pk">compliance@enrichers.com.pk</a> </li>
</ul>
<li>How Trade Authority can be Revoked?</li>  
<ul>
  <li>hange of Password.</li>
  <li>Initiate through email to compliance. </li>
</ul>
<li>Funds Withdrawal</li>
<ul>
  <li>Download Withdrawal Form from company website and fill accordingly.</li>
  <li>Forward Withdrawal Form through registered email.  
  Pay order will be deposited into registered bank account of client. </li>
  Change of Information  
  <li>All changes will be reported through affidavit.</li>
</ul>
</ol>
      </div>
    </div>
  </div>
  <!-- -------------------------- -->


</div>

    </div>

    <!-- Navigation Buttons -->
    <!-- Navigation Buttons -->
<!-- Navigation Buttons -->
<div class="mt-3">
  <button type="button" class="btn btn-secondary" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
  <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Next</button>
</div>


  </form>
</div>

</div>

<?php include('footer.php'); ?>