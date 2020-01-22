<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});

$app->run();
<?php
echo <<<_END
<html>
<head>
<title>Nairobi Water Privacy Policy</title>
<style>
body 
{
    font-family: "Times New Roman", Times, serif;
}
#main 
{
    margin: 5%;
    margin-top: 2%;
    
}
#heading 
{
font-size: 25px;
font-weight: bold;
color: #0040ff;
}

#heads
{
    font-weight: bold;
    font-size: 22px;
}
#heads1
{
font-size: 18px;
font-weight: bold;
}
#text 
{
font-size:16px;
}
</style>
</head>
<body>
<div id = "main">
<div id="heading">
<p>Nairobi Water and Sewerage Company Limited Privacy Policy</p>
</div>
<div id="content">
<p id = "heads">Privacy Policy </br> last updated: January 22, 2020<p>

<p id = "text">
This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the 
Service and tells You about Your privacy rights and how the law protects You.</br></br>
We use Your Personal data to provide and improve the Service. By using the Service, 
You agree to the collection and use of information in accordance with this Privacy Policy. 
This Privacy Policy is maintained by the Company.
</p>

<p id ="heads">Interpretation and Definitions</p>
<p id ="heads1">Interpretation</p>

<p id = "text">
The words of which the initial letter is capitalized have meanings defined under the following
conditions.</br></br>
The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.
</p>

<p id = "heads1">Definitions</p>
<p id = "text">
For the purposes of this Privacy Policy:</br>
<ul>
<li><b>You</b> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable. </li></br>
<li><b>Company</b> (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to Nairobi Water and Sewerage Company Ltd. </li></br>
<li><b>Affiliate</b> means an entity that controls, is controlled by or is under common control with a party, where "control" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.  </li></br>
<li><b>Account</b> means a unique account created for You to access our Service or parts of our Service.  </li></br>
<li><b>Website</b> refers to Nairobi Water and Sewerage Company Ltd, accessible from https://www.nairobiwater.co.ke/  </li></br>
<li><b>Chatbot</b> refers to Majibot which is a service built and managed by the Company. </li></br>
<li><b>Service</b> refers to the Chatbot and/ or Website. </li></br>
<li><b>Country</b> refers to: KENYA. </li></br>
<li><b>Service Provider</b> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used. </li></br>
<li><b>Third-party Social Media Service</b> refers to any website or any social network website through which a User can log in or create an account to use the Service.  </li></br>
<li><b>Personal Data</b> is any information that relates to an identified or identifiable individual.  </li></br>
<li><b>Cookies</b> are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.  </li></br>
<li><b>Usage Data</b> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit). </li></br>
</ul>
</p>

<p id = "heads">Collecting and Using Your Personal Data</p>
<p id = "heads1"<Types of Data Collected</p>
<b>Personal Data</b></br>
<p id = "text">
While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:
<ul>
<li>Email address </li>
<li>First name and Last name </li>
<li>Phone number </li>
<li>Address, Constituency, Ward, Postal code, City  </li>
<li>Usage Data </li>
<li>Account number </li>
<li>Bill number </li>
<li>Location Information</li>
</ul>
</p>

<p id = "heads1">Usage Data</p>
<p = "text">
Usage Data is collected automatically when using the Service.</br></br>
Usage Data may include information such as 
Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, 
unique device identifiers and other diagnostic data.</br></br>
When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers
and other diagnostic data.</br></br>
We may also collect information that 
Your browser sends whenever You visit our Service 
or when You access the Service by or through a mobile device.</br>
</p>

<p id = "heads1">Tracking Technologies and Cookies</p>
<p id = "text">
We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. 
Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service.
You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service.</br> </br>
Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close your web browser.</br></br>
We use both session and persistent Cookies for the purposes set out below:</br>
<ul>
<li><b> Necessary / Essential Cookies</b></br></br>Type: Session Cookies</br> Administered by: Us</br>
Purpose: These Cookies are essential to provide You with services available through the Chatbot and Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</li></br>
<li><b>Cookies Policy / Notice Acceptance Cookies</b></br></br>Type: Persistent Cookes</br> Administered by: Us</br>
Purpose: These Cookies identify if users have accepted the use of cookies on the Website and Chatbot.</li></br>
<li><b>Functionality Cookies</b></br></br>Type: Persistent Cookies</br> Administered by: Us</br>
Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</li></br>
</ul>
</br>
For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy.
</p>

<p id = "heads1">Use of Your Personal Data</p>
<p id = "text">
The company may use Personal Data for the following purposes:</br>
<ul>
<li> <b>To provide and maintain our Service,</b> including to monitor the usage of our Service. </li>
<li> <b>To manage Your Account:</b> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</li>
<li> <b>For the performance of a contract:</b>  the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</li>
<li> <b>To contact You:</b> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</li>
<li> <b>To provide You </b> with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</li>
<li> <b>To manage Your requests:</b> To attend and manage Your requests to Us.</li>
</ul>
</br>
</p>
<p id = "text">
We may share your personal information in the following situations:</br>
<ul>
<li> <b>With Service Providers:</b> We may share Your personal information with Service Providers to monitor and analyze the use of our Service, to show advertisements to You to help support and maintain Our Service, to contact You, to advertise on third party websites to You after You visited our Service or for payment processing.</li>
<li> <b>For Business transfers:</b> We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of our business to another company.</li>
<li> <b>With Affiliates:</b> We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li>
<li> <b>With Business partners:</b> We may share Your information with Our business partners to offer You certain products, services or promotions.</li>
<li> <b>With other users:</b> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside. If You interact with other users or register through a Third-Party Social Media Service, Your contacts on the Third-Party Social Media Service may see You name, profile, pictures and description of Your activity. Similarly, other users will be able to view descriptions of Your activity, communicate with You and view Your profile.</li>
</ul>
</p>

<p id = "heads1">Retention of Your Personal Data</p>
<p id = "text">
The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</br>
The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</br>
</p>

<p id = "heads1">Transfer of Your Personal Data</p>
<p id = "text">
Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</br></br>
Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</br></br>
The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</br></br>
</p>

<p id = "heads1">Disclosure of Your Personal Data</p>
<p id = "text">
<b>Business Transactions</b></br></br>
If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</br></br>
<b>Law enforcement</b></br></br>
Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</br></br>
<b>Other Legal requirements</b></br></br>
The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</br>
<ul>
<li> Comply with a legal obligation </li>
<li> Protect and defend the rights or property of the Company </li>
<li> Prevent or investigate possible wrongdoing in connection with the Service </li>
<li> Protect the personal safety of Users of the Service or the public </li>
<li> Protect against legal liability </li>
</ul>
</p>
</br>

<p id = "heads1">Security of Your Personal Data</p>
<p id = "text">
The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.
</p></br>

<p id ="heads">Children's Privacy</p>
<p id = "text">
Our Service does not address anyone under the age of 18. We do not knowingly collect personally identifiable information from anyone under the age of 18. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 18 without verification of parental consent, We take steps to remove that information from Our servers.</br></br>
We also may limit how We collect, use, and store some of the information of Users between 13 and 18 years old. In some cases, this means We will be unable to provide certain functionality of the Service to these users.</br></br>
If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.
</p>

<p id = "heads">Links to Other Websites</p>
<p id = "text"> 
Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.</br></br>
We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.
</p>

<p id = "heads">Changes to this Privacy Policy</p>
<p id = "text"> 
We may update our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</br></br>
We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the "Last updated" date at the top of this Privacy Policy.</br></br>
You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</br>
</p>

<p id = "heads">Contact Us</p>
<p id = "text"> 
If you have any questions about this Privacy Policy, You can contact us:
<ul>
<li>By phone number: +254-724253582 </li>
<li>By Email address: info@nairobiwater.co.ke</li>
</ul>
</p>
</div>
</div>
</body>
</html>
_END;
?>
