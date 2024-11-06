<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <title>Responsive email template</title>
	<!--[if mso]>
  <style>
    table {border-collapse:collapse;border-spacing:0;border:none;margin:0;}
    div, td {padding:0;}
    div {margin:0 !important;}
	</style>
  <noscript>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  </noscript>
  <![endif]-->
  <style>
    table, td, div, h1, h2, h3, p {
      font-family: Arial, sans-serif;
    }
    @media screen and (max-width: 530px) {
      /* .unsub {
        display: block;
        padding: 8px;
        margin-top: 14px;
        border-radius: 6px;
        background-color: #555555;
        text-decoration: none !important;
        font-weight: bold;
      } */
      .col-sml,
      .col-mid,
      .col-lge,
      .personal .col-sml,
      .personal .col-mid,
      .personal .col-lge,
      .help .col-sml,
      .help .col-mid,
      .help .col-lge {
        max-width: 90% !important;
      }
      .personal .col-mid,
      .personal .col-lge {
        padding-left: 20px;
      }
      .help .col-mid,
      .help .col-lge {
        text-align: left;
      }
    }
    @media screen and (min-width: 531px) {
      .col-sml {
        max-width: 65% !important;
      }
      .col-mid {
        max-width: 65% !important;
      }
      .col-lge {
        max-width: 30% !important;
      }
      .order .col-sml {
        max-width: 15% !important;
      }
      .order .col-mid {
        max-width: 40% !important;
      }
      .order .col-lge {
        max-width: 38% !important;
      }
      .personal .col-sml,
      .help .col-sml,
      .personal .col-mid,
      .help .col-mid,
      .personal .col-lge,
      .help .col-lge {
        max-width: 30% !important;
      }
    }
  </style>
</head>
<body style="margin:0;padding:0;word-spacing:normal;background-color:#ffffff;">
  <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#ffffff;">
    <table cellpdding="0" cellspacing="0" role="presentation" style="width:100%;border:none;border-spacing:0;;">
      <tr>
        <td style="padding:0;">
          <!--[if mso]>
          <table role="presentation" align="center" style="width:800px;">
          <tr>
          <td>
          <![endif]-->
          <table role="presentation" style="width:100%;max-width:750px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;margin:0 auto">
            <tr>
              <td style="padding:40px 30px 30px 20px;font-size:24px;font-weight:bold;">
                <!-- Arcade Logo -->
                <a  style="text-decoration:none;"><img src="https://prakhardemos.com/D-TRAS/public/assests/Prakhar-logo.png" width="165" style="width:165px;max-width:80%;height:auto;border:none;text-decoration:none;color:#ffffff;"></a>
                <!-- // End Logo -->
              </td>
            </tr>
            <tr>
              <td>
                <!-- Main email body -->
                <div style="padding: 0 20px 0 20px">
                  <h1 style="margin-bottom:16px;font-size:26px;line-height:32px;font-weight:bold;letter-spacing:-0.02em;">Thank you for contact</h1>
                  {{-- <p>This is comfirmation for order number: 86351987-14555</p> --}}
                  <hr style="border-width:1px;border-color:lightgrey;border-style:solid;">
                  <br>
                  <p style="margin:0;">Hi {{$data->name}},<br><br>I hope this email finds you well. I wanted to take a moment to express my sincere gratitude for reaching out to us. Your message is important to us, and we appreciate the opportunity to assist you.
<br>
                    We have received your enquiry , and we are committed to providing you with the information and support you need. Our team is currently reviewing your message, and we will respond as soon as possible. Please allow us to provide you with a comprehensive and helpful response.
                 <br> 
                 <br>    
                    In the meantime, if you have any additional questions or concerns, please don't hesitate to let us know. We are here to help and ensure your experience with us is a positive one.
                    <br>   
                    <br>    
                    Once again, thank you for choosing to contact us. We value your trust and appreciate your patience. We look forward to assisting you further.
                    <br>  
                    <br>     
                    Best regards,
                    <br>     
                    Team Prakhar
                    <br>    
                    <br>  
                    <a style="font-weight:bold;text-decoration:none;border-radius:50px;background-color:black;color:white;padding:15px;padding-left:30px;padding-right:30px;display:inline-block;mso-padding-alt:0;" href="https://prakhardemos.com/D-TRAS/" title="D-TRAS">
                        <!--[if mso]>
                          <i style="letter-spacing: 25px;mso-font-width:-100%;mso-text-raise:20pt">&nbsp;</i><![endif]-->
                          <span style="mso-text-raise:10pt;font-weight:bold;">Start exploring D-TRAS</span>
                          <!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%">&nbsp;</i>
                        <![endif]--></a>
                    
                    
                    </p>
                </div>
                <!-- // End main email body -->
              </td>
            </tr>
            {{-- <tr>
              <td>
                <!-- Access digital title section -->
                <div style="padding: 0 20px 0 20px">
                  <h2>Access your digital edition</h2>
                  <p>Visit our guide <a href="http://www.mymagazine.co.uk/" style="color:#2F80ED;text-decoration:underline;">How to download your digital edition</a> to view instructions for accessing your digital edition straight away.</p>
                </div>
                <!-- // End Access digital title section -->
              </td>
            </tr> --}}
            {{-- <tr>
              <td>
                <!-- Access magazine title section -->
                <div style="padding: 0 20px 0 20px">
                  <h2>Access Golfmonthly.com</h2>
                  <p>Visit <a href="http://www.mymagazine.co.uk/" style="color:#2F80ED;text-decoration:underline;">Golfmonthly.com</a> to create an account with the email you have used to makle this purchase. You will need to verify your email before you can get full acccess so watch out for the verification email.</p>
                  <br>
                  <a style="font-weight:bold;text-decoration:none;border-radius:50px;background-color:black;color:white;padding:15px;padding-left:30px;padding-right:30px;display:inline-block;mso-padding-alt:0;" href="https://golfmonthly.com/" title="Golf Monthly Unlimited">
                    <!--[if mso]>
                      <i style="letter-spacing: 25px;mso-font-width:-100%;mso-text-raise:20pt">&nbsp;</i><![endif]-->
                      <span style="mso-text-raise:10pt;font-weight:bold;">Start reading Golf Monthly Unlimited</span>
                      <!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%">&nbsp;</i>
                    <![endif]--></a>
                  <p>&nbsp;</p>
                </div>
                <!-- // End Access magazine title section -->
              </td>
            </tr> --}}
          </table>
          <!--[if mso]>
          </td>
          </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
    </table>
  </div>
</body>
</html>
